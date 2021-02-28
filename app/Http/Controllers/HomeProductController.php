<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeProductController extends Controller{
    public function index(){
        return view('home');
    }
}
