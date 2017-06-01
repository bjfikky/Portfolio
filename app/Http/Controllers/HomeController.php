<?php

namespace App\Http\Controllers;

use App\Attributes;
use Illuminate\Http\Request;
use App\Developer;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    // For the one-page homepage

    public function index() {

        $benjamin = Developer::find(1);         // Hard-coding Benjamin Orimoloye's id of 1 from DB
        $features = Developer::find(1)->features;

        return view('frontend.home', compact('benjamin', 'features'));

    }

    public function contact() {
        return redirect('/')->with('status', 'message sent');
    }
}
