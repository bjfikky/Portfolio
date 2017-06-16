<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index() {
        return view('backend.dashboard');
    }

    public function posts() {
        return view('backend.posts');
    }

    public function categories() {
        return view('backend.categories');
    }
}
