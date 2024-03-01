<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WebDevEtc\BlogEtc\Models\Post;
use App\Models\Project;
use DB;

class SitemapXmlController extends Controller
{
    public function index() {
        $posts = Post::where('is_page',false)->orderBy('updated_at', 'desc')->get();

        return response()->view('index', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
      }
}