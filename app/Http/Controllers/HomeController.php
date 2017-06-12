<?php

namespace App\Http\Controllers;

use App\Attributes;
use Illuminate\Support\Facades\Validator;
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

    public function contact(Request $request) {

//        $this->validate($request, [
//
//            'name' => 'required|min:2',
//            'email' => 'required|email',
//            'message' => 'required|min:8'
//
//        ]);
//
////        if ($mail = new \PHPMailer())
//
//        return "sent";

    /* Validating the fields inputted in the contact form */

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($validator)
                ->withInput();
        }

//        TODO-Fikky: Use PHPMailer class to send emails after the above validation

        return "sent";

    }
}
