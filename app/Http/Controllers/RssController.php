<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

use App\Post;

class RssController extends Controller
{

    public function __construct()
    {
    }

    /**
     * shows an rss feed
     */
    public function index()
    {
        $posts = Post::where('published', true)->orderBy('created_at', 'desc')->get();

        return view('rss.default', [
            'posts' => $posts
        ]);
    }

}