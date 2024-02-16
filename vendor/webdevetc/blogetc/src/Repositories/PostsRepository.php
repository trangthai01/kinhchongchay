<?php

namespace WebDevEtc\BlogEtc\Repositories;

use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use WebDevEtc\BlogEtc\Exceptions\PostNotFoundException;
use WebDevEtc\BlogEtc\Models\Post;
use WebDevEtc\BlogEtc\Models\Page;
use App\Models\Project;
/**
 * Class BlogEtcPostsRepository.
 */
class PostsRepository
{
    /**
     * @var Post
     */
    private $model;
    private $pageModel;
    private $projectModel;

    /**
     * BlogEtcPostsRepository constructor.
     */
    public function __construct(Post $model, Page $pageModel, Project $projectModel)
    {
        $this->model = $model;
        $this->pageModel = $pageModel;
        $this->projectModel = $projectModel;
    }

    /**
     * Return blog posts ordered by posted_at, paginated.
     *
     * @param int $categoryID
     */
    public function indexPaginated(int $perPage = 10, int $categoryID = null): LengthAwarePaginator
    {
        $query = $this->query(true)->orderBy('posted_at', 'desc');
        
        if ($categoryID > 0) {
            $query->whereHas('categories', static function (Builder $query) use ($categoryID) {
                $query->where('blog_etc_post_categories.blog_etc_category_id', $categoryID);
            })->get();
        }
        else{
            $query->doesntHave('categories')
            ->orwhereHas('categories', static function (Builder $query) use ($categoryID) {
                $query->where('blog_etc_post_categories.blog_etc_category_id', '!=', '1');
            })->get();
        }

        return $query->paginate($perPage);
    }

    /**
     * Return new instance of the Query Builder for this model.
     */
    public function query(bool $eagerLoad = false): Builder
    {
        $queryBuilder = $this->model->newQuery();

        if (true === $eagerLoad) {
            $queryBuilder->with(['categories']);
        }

        return $queryBuilder;
    }

    /**
     * Return new instance of the Query Builder for this model.
     */
    public function pageQuery(bool $eagerLoad = false): Builder
    {
        $queryBuilder = $this->pageModel->newQuery();

        if (true === $eagerLoad) {
            $queryBuilder->with(['categories']);
        }

        return $queryBuilder;
    }

    /**
     * Return posts for RSS feed.
     *
     * @return Builder[]|Collection
     */
    public function rssItems(): Collection
    {
        return $this->query(false)
            ->orderBy('posted_at', 'desc')
            ->limit(config('blogetc.rssfeed.posts_to_show_in_rss_feed'))
            ->with('author')
            ->get();
    }

    /**
     * Find a blog etc post by slug
     * If cannot find, throw exception.
     */
    public function findBySlug(string $slug): Post
    {
        try {
            // the published_at + is_published are handled by BlogEtcPublishedScope, and don't take effect if the
            // logged in user can manage log posts
            return $this->query(true)
                ->where('slug', $slug)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            throw new PostNotFoundException('Unable to find blog post with slug: '.$slug);
        }
    }

    /**
     * Find a blog etc post by slug
     * If cannot find, throw exception.
     */
    public function findBySlugNoMessage(string $slug)
    {
        $post = $this->pageQuery(false) ->where('slug', $slug)->first();
        return $post;
    }

    /**
     * Find a blog etc post by ID
     * If cannot find, throw exception.
     */
    public function findById(int $id): Post
    {
        try {
            // the published_at + is_published are handled by BlogEtcPublishedScope, and don't take effect if the
            // logged in user can manage log posts
            return $this->query(true)
                ->where('id', $id)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            throw new PostNotFoundException('Unable to find blog post with id: '.$id);
        }
    }

    public function findRelatedPosts(int $id, array $categories): Collection
    {
        try {
            return $this->query(true)->whereHas('categories', static function (Builder $query) use ($categories) {
                $query->whereIn('blog_etc_post_categories.blog_etc_category_id', $categories);
            })->where('id', '!=', $id)->inRandomOrder()->limit(7)->get();
        } catch (ModelNotFoundException $e) {
            throw new PostNotFoundException('Unable to find blog post with id: '.$id);
        }
    }

    public function findOtherPosts(int $id, array $categories): Collection
    {
        try {
            if($categories === []){
                
                return $this->query(true)->inRandomOrder()->limit(5)->get();
            }
            else{
                return $this->query(true)->whereHas('categories', static function (Builder $query) use ($categories) {
                    $query->whereNotIn('blog_etc_post_categories.blog_etc_category_id', $categories)->where('blog_etc_post_categories.blog_etc_category_id', '!=', '1');
                })->inRandomOrder()->limit(3)->get();
            }
            
        } catch (ModelNotFoundException $e) {
            throw new PostNotFoundException('Unable to find blog post with id: '.$id);
        }
    }

    public function findLatestPosts(): Collection
    {
        try {
            return $this->query(true)->orderBy('posted_at', 'desc')->limit(5)->get();
            
        } catch (ModelNotFoundException $e) {
            throw new PostNotFoundException('Unable to find blog post with id: '.$id);
        }
    }

    public function findLatestProjects(): Collection
    {
        try {
            $queryBuilder = $this->projectModel->newQuery();
            return $queryBuilder->orderBy('created_at', 'desc')->limit(4)->get();
            
        } catch (ModelNotFoundException $e) {
            throw new PostNotFoundException('Unable to find blog post with id: '.$id);
        }
    }

    /**
     * Create a new BlogEtcPost post.
     */
    public function create(array $attributes): Post
    {
        return $this->query()->create($attributes);
    }

    /**
     * Delete a post.
     *
     * @throws Exception
     */
    public function delete(int $postID): bool
    {
        $post = $this->find($postID);

        return (bool) $post->delete();
    }

    /**
     * Find a blog etc post by ID
     * If cannot find, throw exception.
     */
    public function find(int $blogEtcPostID): Post
    {
        try {
            return $this->query(true)->findOrFail($blogEtcPostID);
        } catch (ModelNotFoundException $e) {
            throw new PostNotFoundException('Unable to find blog post with ID: '.$blogEtcPostID);
        }
    }

    /**
     * Update image sizes (or in theory any attribute) on a blog etc post.
     *
     * TODO - currently untested.
     *
     * @param array $uploadedImages
     */
    public function updateImageSizes(Post $post, ?array $uploadedImages): Post
    {
        if (!empty($uploadedImages)) {
            // does not use update() here as it would require fillable for each field - and in theory someone
            // might want to add more image sizes.
            foreach ($uploadedImages as $size => $imageName) {
                $post->$size = $imageName;
            }
            $post->save();
        }

        return $post;
    }

    /**
     * Search for posts.
     *
     * This is a rough implementation - proper full text search has been removed in current version.
     */
    public function search(string $search, int $max = 25): Collection
    {
        $query = $this->query(true)->limit($max);

        trim($search)
            ? $query->where('title', 'like', '%'.$search)
            : $query->where('title', '');

        return $query->get();
    }
}
