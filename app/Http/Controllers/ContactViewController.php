<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactViewController extends Controller{
    public function index(){
        return view('contact');
    }
}
