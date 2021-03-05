<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;
use App\Kontak;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah_produk = Produk::all()->count();
        $jumlah_kategori = Kategori::all()->count();
        $jumlah_pesan = Kontak::all()->count();
        $jumlah_admin = User::all()->count();
        
        return view('dashboard', compact('jumlah_produk', 'jumlah_kategori', 'jumlah_pesan', 'jumlah_admin'));
    }
}
