<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kontak;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view('pesan.index', [
            'kontak' => $kontak
            ]);
    }
    
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required'
        ]);

        Kontak::create($request->all());
        return redirect('contact/create');
    }

    public function destroy(Kontak $kontak)
    {
        // Menghapus sementara (Soft Delete)
        // Kategori::destroy($kategori->id);

        // Menghapus permanen
        $delete = $kontak->forceDelete();
        return redirect('/dashboard/pesan')->with('status', 'Data Pesan Berhasil Dihapus!');
    }
}
