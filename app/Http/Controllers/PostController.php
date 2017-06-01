<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Developer;

class PostController extends Controller
{
    //
    public function index() {
        $benjamin = Developer::find(1);
        return view('frontend.posts', compact('benjamin'));
    }


    public function show($id) {
//        return view('frontend.post');
        echo $id;
    }
}
