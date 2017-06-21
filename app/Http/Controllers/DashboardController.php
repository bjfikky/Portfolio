<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['login','authUser']);
    }


//Authentication and logging user in
    public function authUser() {

        if (! auth()->attempt(request(['email', 'password']))) {
            return back()
                ->withErrors(['Invalid Email Address or Password'])
                ->withInput();
        }

        return redirect('/dashboard');
    }


 //Display the login page
    public function login() {
        return view('backend.login');
    }


//Log user out
    public function logout() {
        auth()->logout();

        return redirect('/dashboard/login');
    }


//Display the overview page
    public function overview() {
        $recentPosts = Post::limit(5)->get();
        return view('backend.dashboard', compact('recentPosts'));
    }


//Display the posts page
    public function posts() {
        $posts = Post::all();
        return view('backend.posts', compact('posts'));
    }


//Display the form to add new post
    public function newPost() {
        return view('backend.newPost');
    }


//Store the new post
    public function storepost() {
        $post = new Post();

        $post->title = request('title');
        $post->body = request('body');

        $post->save();

        return redirect('/dashboard/posts')->with('post success', 'Post was successfully created!');

        //TODO:Add snippet to display the successful message on dashboard's posts.blade.php
    }

    public function categories() {
        return view('backend.categories');
    }
}
