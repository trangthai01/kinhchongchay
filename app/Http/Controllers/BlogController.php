<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use WebDevEtc\BlogEtc\Models\Post;
use WebDevEtc\BlogEtc\Requests\SearchRequest;
use WebDevEtc\BlogEtc\Services\PostsService;
use WebDevEtc\BlogEtc\Services\CategoriesService;
use WebDevEtc\BlogEtc\Services\CaptchaService;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    /** @var PostsService */
    private $postsService;
    /** @var CategoriesService */
    private $categoriesService;
    /** @var CaptchaService */
    private $captchaService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PostsService $postsService, CategoriesService $categoriesService, CaptchaService $captchaService)
    {
        $this->postsService = $postsService;
        $this->categoriesService = $categoriesService;
        $this->captchaService = $captchaService;
    }

    public function getArticles(Request $request, string $categorySlug = null)
    {
        // default category ID
        $categoryID = null;

        if ($categorySlug) {
            // get the category
            $category = $this->categoriesService->findBySlug($categorySlug);

            // get category ID to send to service
            $categoryID = $category->id;

            // TODO - make configurable
            $title = config('blogetc.blog_index_category_title', 'Viewing blog posts in ').$category->category_name;
        }

        $posts = $this->postsService->indexPaginated(config('blogetc.per_page'), $categoryID);
        $articles = '';
        $categoryContent = '';
        if ($request->ajax()) {
            foreach ($posts as $post) {
                $categoryContent = '';
                foreach($post->categories as $category){
                    $categoryContent.= '<a href="'. $category->url() .'" rel="category tag">'.$category->category_name.'</a>, ';
                }
                $articles.=
                '<div class="blog_box ">'.
                    '<a href="'. url('blog-da-quy/'.$post->slug) .'" class="pic">'.
                        $post->imageTag('medium', true, '').
                    '</a>'.
                    '<div class="text">'.
                        '<span class="top">'.
                            $categoryContent.
                        '</span>'.
                        '<h4>'.
                            '<a href="'. url('blog-da-quy/'.$post->slug) .'">'.$post->title.'</a>'.
                        '</h4>'.
                        '<div class="conText">'.
                            '<p>'.$post->renderBody().'</p>'.
                            '<a href="'. url('blog-da-quy/'.$post->slug) .'" class="read_more">Read More <i>&gt;</i></a>'.
                        '</div>'.
                    '</div>'.
                '</div>';
            }
            return $articles;
        }
        return view('layouts.blogs');
    }

    public function getArticle(string $slug){
        $blogPost = $this->postsService->findBySlug($slug);
        return view('layouts.blog', ['post' => $blogPost]);
    }

    public function findArticles(Request $request){
        $keyword = $request->get('keyword');
        $posts = Blog::orderBy('post_id')->paginate(3);
        $articles = '';
        if ($request->ajax()) {
            foreach ($posts as $result) {
                $articles.=
                '<article id="post-9031" class="post"> '.
                    '<header class="entry-header">'.
                        '<h3 class="entry-title">'.
                            '<a href="'. url('blog-da-quy/'.$result->slug) .'" rel="bookmark">'.$result->post_header.'</a>'.
                        '</h3>'.
                    '</header>'.
                    '<div class="entry-summary">'.
                        '<div class="entry-thumbnail">'.
                            '<a href="'. url('blog-da-quy/'.$result->slug) .'"><img width="300" height="270" src="https://191ohi2x4mb3b0bwt2tgdwk1-wpengine.netdna-ssl.com/wp-content/uploads/2021/01/879859_s-1-1-300x270.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="'. $result->slug .'"></a>'.
                        '</div>'.
                        'text content'.
                    '</div>'.
                '</article>';
            }
            return $articles;
        }
        return view('layouts.search', compact('keyword'));
    }

    public function storyIndex(string $categorySlug = null)
    {
        // the published_at + is_published are handled by BlogEtcPublishedScope, and don't take effect if the logged
        // in user can manage log posts
        $title = config('blogetc.blog_index_title', 'Viewing blog');

        // default category ID
        $categoryID = 1;

        $posts = $this->postsService->indexPaginated(config('blogetc.per_page'), $categoryID);
        
        return view('vendor.storyetc.index', [
            'posts' => $posts,
            'title' => $title,
            'blogetc_category' => $category ?? null,
        ]);
    }

    public function showStory(Request $request, string $postSlug): \Illuminate\View\View
    {
        $blogPost = $this->postsService->findBySlug($postSlug);
        $isBlog = 'Y';
        foreach($blogPost->categories as $category){
            if($category->id == "1"){
                $isBlog = 'N';
                break;
            }
        }
        if($isBlog == "Y"){
            return view('errors.404');
        }
        $usingCaptcha = $this->captchaService->getCaptchaObject();

        if (null !== $usingCaptcha && method_exists($usingCaptcha, 'runCaptchaBeforeShowingPosts')) {
            $usingCaptcha->runCaptchaBeforeShowingPosts($request, $blogPost);
        }
        $relatedPosts = $this->postsService->findRelatedPosts($blogPost->id, [1]);
        return view(
            'blogetc::single_post',
            [
                'post' => $blogPost,
                'captcha' => $usingCaptcha,
                'comments' => $blogPost->comments->load('user'),
                'relatedPosts' => $relatedPosts
            ]
        );
    }
}
