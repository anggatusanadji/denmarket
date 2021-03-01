<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductViewController extends Controller{
    public function index(){
        return view('product');
    }
}
