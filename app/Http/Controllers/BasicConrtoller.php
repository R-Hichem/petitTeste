<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicConrtoller extends Controller
{
    public function index(){
        return view('welcome', [
            "test" => request()->slug
        ]);
    }
    public function index2(){
        return view('page2');
    }
}