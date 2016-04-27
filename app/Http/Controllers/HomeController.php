<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        // grab the latest posts
        $posts = Post::where('published', true)->orderBy('published_at', 'desc')->take(2)->get();

        return view('home.index', [
            'posts' => $posts
        ]);
    }

}