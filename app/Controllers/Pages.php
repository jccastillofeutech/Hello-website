<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function about(){
        return view('about');
    }

    public function home(){
        return view('home');
    } 
}
