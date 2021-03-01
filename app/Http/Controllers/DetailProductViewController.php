<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailProductViewController extends Controller{
    public function index(){
        return view('detail-product');
    }
}
