<?php

namespace App\Http\Controllers;


use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index(){

    $posts = BlogPost::where('status', 'puplished')->get();
    return view('blog.index', compact('posts'));
}
}
