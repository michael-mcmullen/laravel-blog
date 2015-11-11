<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

use App\Post;

// Only do tree view for now

class BlogController extends Controller
{

    public function __construct()
    {
    }

    /**
     * shows all the blog posts
     */
    public function listing()
    {
        $posts = Post::where('published', true)->orderBy('created_at', 'desc')->get();

        return view('blog.listing', [
            'posts' => $posts
        ]);
    }

    /**
     * shows the specified blog
     * @param  string $slug the slug according to posts.slug
     */
    public function view($slug)
    {
        // grab the latest posts
        $post = Post::where('published', true)->where('slug', $slug)->first();

        if(empty($post))
        {
            return Redirect::route('home');
        }

        return view('blog.view', [
            'post' => $post
        ]);
    }

}