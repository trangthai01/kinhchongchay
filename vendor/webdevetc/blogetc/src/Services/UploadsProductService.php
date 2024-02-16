<?php

namespace WebDevEtc\BlogEtc\Services;

use Auth;
use Carbon\Carbon;
use Exception;
use File;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Image;
use Intervention\Image\Constraint;
use RuntimeException;
use Storage;
use WebDevEtc\BlogEtc\Events\ProductAdded;
use WebDevEtc\BlogEtc\Events\ProductEdited;
use WebDevEtc\BlogEtc\Events\ProductWillBeDeleted;
use WebDevEtc\BlogEtc\Events\UploadedImage;
use WebDevEtc\BlogEtc\Helpers;
use WebDevEtc\BlogEtc\Interfaces\LegacyGetImageFileInterface;
use App\Models\Product;
use App\Models\Tag;
use WebDevEtc\BlogEtc\Models\UploadedPhoto;
use WebDevEtc\BlogEtc\Repositories\UploadedPhotosRepository;
use WebDevEtc\BlogEtc\Requests\CreateBlogEtcProductRequest;
use WebDevEtc\BlogEtc\Requests\DeleteBlogEtcProductRequest;
//use WebDevEtc\BlogEtc\Requests\PostRequest;
use WebDevEtc\BlogEtc\Requests\UpdateBlogEtcProductRequest;
use WebDevEtc\BlogEtc\Requests\UploadImageRequest;

/**
 * Class UploadsProductService.
 */
class UploadsProductService
{
    /**
     * How many iterations to find an available filename, before exception.
     *
     * @var int
     */
    private static $availableFilenameAttempts = 10;
    /**
     * @var UploadedPhotosRepository
     */
    private $repository;

    public function __construct(UploadedPhotosRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Save a new post.
     */
    public function legacyStoreProduct(CreateBlogEtcProductRequest $request)
    {
        $new_product_post = new Product($request->all());
        $this->legacyProcessUploadedImages($request, $new_product_post);
        if (!$new_product_post->created_at) {
            $new_product_post->created_at = Carbon::now();
        }
        $new_product_post->save();
        $this->handleTags($request->get('product_tags'), $new_product_post);
        Helpers::flashMessage('Added product');
        event(new ProductAdded($new_product_post));
        return $new_product_post->editUrl();
    }

    /**
     * This uses some legacy code. This will get refactored soon into something nicer.
     */
    public function legacyUpdateProduct(UpdateBlogEtcProductRequest $request, $productId)
    {
        /** @var Product $product */
        $product = Product::findOrFail($productId);
        $product->fill($request->all());

        $this->legacyProcessUploadedImages($request, $product);

        $product->save();
        $this->handleTags($request->get('product_tags'), $product);
        Helpers::flashMessage('Updated product');
        event(new ProductEdited($product));

        return $product->editUrl();
    }

    public function handleTags(string $tags, Product $product){

        if (!empty($tags)) {
            $tagList = array_map('trim', explode(",", $tags));

            // Loop through the tag array that we just created
            foreach ($tagList as $tagName) {
                Tag::firstOrCreate(['name' => $tagName]);
                
            }
            $productTags = Tag::whereIn('name', $tagList)->get()->pluck('id');
            $product->tags()->sync($productTags);
        }
    }

    /**
     * Process any uploaded images (for featured image).
     *
     * @param $new_product_post
     *
     * @throws Exception
     *
     * @todo - next full release, tidy this up!
     */
    public function legacyProcessUploadedImages(LegacyGetImageFileInterface $request, Product $new_product_post)
    {
        if (!config('blogetc.image_upload_enabled')) {
            return;
        }

        $this->increaseMemoryLimit();

        $uploaded_image_details = [];
        foreach ((array) config('blogetc.product_image_sizes') as $size => $image_size_details) {
            if ($image_size_details['enabled'] && $photo = $request->get_image_file(str_replace('_thumbnail', '', $size))) {
                $suggested_file_name = $new_product_post->slug . '-'. $size.'.'.$photo->getClientOriginalExtension();
                $uploaded_image = $this->legacyUploadAndResize($new_product_post, $suggested_file_name, $image_size_details,
                    $photo);
                $new_product_post->$size = $uploaded_image['filename'];
                $uploaded_image_details[$size] = $uploaded_image;
            }
        }
    }

    /**
     * @param Product $new_product_post
     * @param $suggested_title string - used to help generate the filename
     * @param $image_size_details mixed - either an array (with 'w' and 'h') or a string (and it'll be uploaded at full size, no size reduction, but will use this string to generate the filename)
     * @param $photo
     *
     * @throws Exception
     *
     * @return array
     */
    protected function legacyUploadAndResize(Product $new_product_post = null, $suggested_title, $image_size_details, $photo)
    {
        $image_filename = $this->legacyGetImageFilename($suggested_title);
        $destinationPath = $this->image_destination_path();

        $resizedImage = Image::make($photo->getRealPath());

        if (is_array($image_size_details)) {
            $w = $image_size_details['w'];
            $h = $image_size_details['h'];

            if (isset($image_size_details['crop']) && $image_size_details['crop']) {
                $resizedImage = $resizedImage->fit($w, $h);
            } else {
                $resizedImage = $resizedImage->resize($w, $h, static function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
        } elseif ('fullsize' === $image_size_details) {
            $w = $resizedImage->width();
            $h = $resizedImage->height();
        } else {
            throw new Exception('Invalid image_size_details value');
        }

        $resizedImage->save($destinationPath.'/'.$image_filename, config('blogetc.image_quality', 80));

//        event(new UploadedImage($image_filename, $resizedImage, $new_product_post, __METHOD__));

        return [
            'filename' => $image_filename,
            'w'        => $w,
            'h'        => $h,
        ];
    }

    /**
     * @throws RuntimeException
     *
     * @return string
     */
    public function image_destination_path()
    {
        $path = public_path('/'.config('blogetc.product_upload_dir'));
        $this->check_image_destination_path_is_writable($path);

        return $path;
    }

    /**
     * Legacy - will be removed
     * Check if the image destination directory is writable.
     * Throw an exception if it was not writable.
     *
     * @param $path
     *
     * @throws RuntimeException
     */
    protected function check_image_destination_path_is_writable($path)
    {
        if (!is_writable($path)) {
            throw new RuntimeException("Image destination path is not writable ($path)");
        }
    }

    /**
     * Legacy function, will get refactored soon into something nicer!
     * Get a filename (that doesn't exist) on the filesystem.
     *
     * Todo: support multiple filesystem locations.
     *
     * @param $image_size_details - either an array (with w/h attributes) or a string
     *
     * @throws RuntimeException
     *
     * @return string
     */
    public function legacyGetImageFilename(string $suggested_file_name)
    {
        if (!File::exists($this->image_destination_path().'/'.$suggested_file_name)) {
            // filename doesn't exist, let's use it!
            return $suggested_file_name;
        }

        // too many attempts...
        throw new RuntimeException("Unable to find a free filename after $i attempts - aborting now.");
    }

    /**
     * @return string
     */
    protected function generate_base_filename(string $suggested_title)
    {
        $base = substr($suggested_title, 0, 100);
        if (!$base) {
            // if we have an empty string then we should use a random one:
            $base = 'image-'.str_random(5);

            return $base;
        }

        return $base;
    }

    /**
     * Given a filename, return a public url for that asset on the filesystem as defined in the config.
     */
    public static function publicUrl(string $filename): string
    {
        return self::disk()->url(config('blogetc.blog_upload_dir').'/'.$filename);
    }

    /**
     * Disk for filesystem storage.
     *
     * Set the relevant config file to use things such as S3.
     */
    public static function disk(): Filesystem
    {
        return Storage::disk(config('blogetc.image_upload_disk', 'public'));
    }

    /**
     * Small method to increase memory limit.
     * This can be defined in the config file. If blogetc.memory_limit is false/null then it won't do anything.
     * This is needed though because if you upload a large image it'll not work.
     */
    public function increaseMemoryLimit(): void
    {
        // increase memory - change this setting in config file
        if (config('blogetc.memory_limit')) {
            ini_set('memory_limit', config('blogetc.memory_limit'));
        }
    }

    /**
     * Resize and store an image.
     *
     * @param Product $new_product_post
     * @param $suggested_title - used to help generate the filename
     * @param array|string $imageSizeDetails - either an array (with 'w' and 'h') or a string (and it'll be uploaded at full size,
     *                                       no size reduction, but will use this string to generate the filename)
     * @param $photo
     *
     * @throws Exception
     */
    protected function uploadAndResize(
        ?Product $new_product_post,
        $suggested_title,
        $imageSizeDetails,
        UploadedFile $photo
    ): array {
        // get the filename/filepath
        $image_filename = $this->getImageFilename($suggested_title, $imageSizeDetails, $photo);
        $destinationPath = $this->imageDestinationPath();
        // make image
        $resizedImage = Image::make($photo->getRealPath());

        if (is_array($imageSizeDetails)) {
            // resize to these dimensions:
            $w = $imageSizeDetails['w'];
            $h = $imageSizeDetails['h'];

            if (isset($imageSizeDetails['crop']) && $imageSizeDetails['crop']) {
                $resizedImage = $resizedImage->fit($w, $h);
            } else {
                $resizedImage = $resizedImage->resize($w, $h, static function (Constraint $constraint) {
                    $constraint->aspectRatio();
                });
            }
        } elseif ('fullsize' === $imageSizeDetails) {
            // nothing to do here - no resizing needed.
            // We just need to set $w/$h with the original w/h values
            $w = $resizedImage->width();
            $h = $resizedImage->height();
        } else {
            throw new RuntimeException('Invalid image_size_details value of '.$imageSizeDetails);
        }

        $imageQuality = config('blogetc.image_quality', 80);
        $format = pathinfo($image_filename, PATHINFO_EXTENSION);
        $resizedImageData = $resizedImage->encode($format, $imageQuality);
        $this::disk()->put($destinationPath.'/'.$image_filename, $resizedImageData);

//        event(new UploadedImage($image_filename, $resizedImage, $new_product_post, __METHOD__));

        return [
            'filename' => $image_filename,
            'w'        => $w,
            'h'        => $h,
        ];
    }

    /**
     * Get a filename (that doesn't exist) on the filesystem.
     *
     * @param $image_size_details - either an array (with w/h attributes) or a string
     *
     * @throws RuntimeException
     */
    protected function getImageFilename(string $suggested_title, $image_size_details, UploadedFile $photo): string
    {
        $base = $this->baseFilename($suggested_title);

        // $wh will be something like "-1200x300"
        $wh = $this->getDimensions($image_size_details);
        $ext = '.'.$photo->getClientOriginalExtension();

        for ($i = 1; $i <= self::$availableFilenameAttempts; $i++) {
            // add suffix if $i>1
            $suffix = $i > 1 ? '-'.Str::random(5) : '';

            $attempt = Str::slug($base.$suffix.$wh).$ext;

            if (!$this::disk()->exists($this->imageDestinationPath().'/'.$attempt)) {
                return $attempt;
            }
        }

        // too many attempts...
        throw new RuntimeException("Unable to find a free filename after $i attempts - aborting now.");
    }

    protected function baseFilename(string $suggestedTitle): string
    {
        $base = substr($suggestedTitle, 0, 100);

        return $base ?: 'image-'.Str::random(5);
    }

    /**
     * Get the width and height as a string, with x between them
     * (123x456).
     *
     * It will always be prepended with '-'
     *
     * Example return value: -123x456
     *
     * $image_size_details should either be an array with two items ([$width, $height]),
     * or a string.
     *
     * If an array is given:
     * getWhForFilename([123,456]) it will return "-123x456"
     *
     * If a string is given:
     * getWhForFilename("some string") it will return -some-string". (max len: 30)
     *
     * @param array|string $imageSize
     *
     * @throws RuntimeException
     */
    protected function getDimensions($imageSize): string
    {
        if (is_array($imageSize)) {
            return '-'.$imageSize['w'].'x'.$imageSize['h'];
        }

        return '-'.Str::slug(substr($imageSize, 0, 30));
    }

    /**
     * @deprecated - use getDimensions()
     */
    protected function getWhForFilename($image_size_details)
    {
        return $this->getDimensions($image_size_details);
    }

    /**
     * @throws RuntimeException
     */
    protected function imageDestinationPath(): string
    {
        return config('blogetc.blog_upload_dir');
    }

    /**
     * Legacy function, will be refactored soon.
     *
     * @param $productId
     *
     * @return mixed
     */
    public function legacyDestroyProduct(/* @scrutinizer ignore-unused */ DeleteBlogEtcProductRequest $request, $productId)
    {
        $product = Product::findOrFail($productId);
        event(new ProductWillBeDeleted($product));

        $product->delete();

        // todo - delete the featured images?
        // At the moment it just issues a warning saying the images are still on the server.

        return $product;
    }

    public function deletePostImage(Product $product): array
    {
        $deletedImageSizes = [];
        foreach (array_keys(config('blogetc.image_sizes')) as $size) {
            $imageFilename = $product->$size;
            $path = $this->image_destination_path().'/'.$imageFilename;

            if ($imageFilename && file_exists($path)) {
                unlink($path);
                $deletedImageSizes[] = $size;
            }
        }

        return $deletedImageSizes;
    }
}
