<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index(){
        return view("main.welcome");
    }
    public function serviceShow(){
        return view("main.services");
    }

    public function contactShow(){
        return view("main.contact");
    }

}
