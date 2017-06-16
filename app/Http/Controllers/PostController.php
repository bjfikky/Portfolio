<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Developer;

class PostController extends Controller
{
    //
    public function index() {
        $benjamin = Developer::find(1);
        $posts = Post::all();
        return view('frontend.posts', compact('benjamin','posts'));
    }


    public function show($id) {
        $post = Post::find($id);
        return view('frontend.post', compact('post'));
    }
}
