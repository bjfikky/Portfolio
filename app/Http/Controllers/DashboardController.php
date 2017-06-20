<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth')->except(['login','authUser']);
    }

    public function authUser() {

        if (! auth()->attempt(request(['email', 'password']))) {
            return back();
        }

        return redirect('/dashboard');

    }

    public function login() {
        return view('backend.login');
    }

    public function overview() {
        $recentPosts = Post::limit(5)->get();
        return view('backend.dashboard', compact('recentPosts'));
    }

    public function posts() {
        $posts = Post::all();
        return view('backend.posts', compact('posts'));
    }

    public function categories() {
        return view('backend.categories');
    }
}
