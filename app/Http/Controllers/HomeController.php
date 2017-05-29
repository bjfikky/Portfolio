<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Developer;

class HomeController extends Controller
{
    // For the one-page homepage

    public function index() {

        $benjamin = Developer::find(1);         // Hard-coding Benjamin Orimoloye's id of 1 from DB


        return view('home', compact('benjamin'));

    }
}
