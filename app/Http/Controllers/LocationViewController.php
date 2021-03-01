<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationViewController extends Controller{
    public function index(){
        return view('location');
    }
}
