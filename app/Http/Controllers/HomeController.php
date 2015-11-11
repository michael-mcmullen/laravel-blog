<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;

// Only do tree view for now

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        // grab the latest posts
        $posts = Post::orderBy('created_at', 'desc')->take(5)->get();

        return view('home.index', [
            'posts' => $posts
        ]);
    }

}