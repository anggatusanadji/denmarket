<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeProductViewController extends Controller{
    public function index(){
        return view('home');
    }
}
