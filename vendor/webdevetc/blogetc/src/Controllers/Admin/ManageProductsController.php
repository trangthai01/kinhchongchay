<?php

namespace WebDevEtc\BlogEtc\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use RuntimeException;
use WebDevEtc\BlogEtc\Middleware\UserCanManageBlogPosts;
use App\Models\Product;
use WebDevEtc\BlogEtc\Requests\CreateBlogEtcProductRequest;
use WebDevEtc\BlogEtc\Requests\DeleteBlogEtcProductRequest;
use WebDevEtc\BlogEtc\Requests\UpdateBlogEtcProductRequest;
use WebDevEtc\BlogEtc\Services\UploadsProductService;

/**
 * Class BlogEtcAdminController.
 */
class ManageProductsController extends Controller
{
    /**
     * @var UploadsProductService
     */
    private $uploadsService;

    /**
     * BlogEtcAdminController constructor.
     */
    public function __construct(UploadsProductService $uploadsService)
    {
        $this->middleware(UserCanManageBlogPosts::class);
        $this->uploadsService = $uploadsService;

        if (!is_array(config('blogetc'))) {
            throw new RuntimeException('The config/blogetc.php does not exist. Publish the vendor files for the BlogEtc package by running the php artisan publish:vendor command');
        }
    }

    /**
     * View all posts.
     *
     * @return mixed
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);

        return view('blogetc_admin::products.index', ['products' => $products]);
    }

    /**
     * Show form for creating new post.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('blogetc_admin::products.add_product');
    }

    /**
     * Save a new post.
     *
     * @throws Exception
     *
     * @return RedirectResponse|Redirector
     */
    public function store(CreateBlogEtcProductRequest $request)
    {
        $editUrl = $this->uploadsService->legacyStoreProduct($request);

        return redirect($editUrl);
    }

    /**
     * Show form to edit post.
     *
     * @param $productId
     *
     * @return mixed
     */
    public function edit($productId)
    {
        $product = Product::findOrFail($productId);
        return view('blogetc_admin::products.edit_product', ['product' => $product]);
    }

    /**
     * Save changes to a post.
     *
     * This uses some legacy code. This will get refactored soon into something nicer.
     *
     * @param $productId
     *
     * @throws Exception
     *
     * @return RedirectResponse|Redirector
     */
    public function update(UpdateBlogEtcProductRequest $request, $productId)
    {
        $editUrl = $this->uploadsService->legacyUpdateProduct($request, $productId);

        return redirect($editUrl);
    }

    /**
     * Delete a post.
     *
     * @param $productId
     *
     * @return mixed
     */
    public function destroy(DeleteBlogEtcProductRequest $request, $productId)
    {
        $deletedProduct = $this->uploadsService->legacyDestroyProduct($request, $productId);

        return view('blogetc_admin::products.deleted_product')
            ->withDeletedPost($deletedProduct);
    }
}
