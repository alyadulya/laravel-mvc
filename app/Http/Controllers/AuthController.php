<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form() {
        return view('form');
    }

    public function welcome_post(Request $request) {
        $name = $request['fname']." ".$request['lname'];
        return view('welcome', ["name"=>$name]);
    }
}
