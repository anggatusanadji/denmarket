<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kategori;
use App\Tipe;
use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kategori = DB::table('films')->get();
        $produk = Produk::all();
        return view('produk.index', ['produk' => $produk]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $kategori = Kategori::all();
        $tipe = Tipe::all();
        return view('produk.create', compact('kategori','tipe'));
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
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required', 
            'kategori_id' => 'required', 
            'size_produk' => 'required', 
            'harga_produk' => 'required',
            'tipe_id' => 'required',
            'gambar_produk' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $img = $request->file('gambar_produk');
        $gambar_produk = $img->getClientOriginalName();
        $upDir = 'image/product';
        $img->move($upDir, $gambar_produk);

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'kategori_id' => $request->kategori_id,
            'size_produk' => $request->size_produk,
            'harga_produk' => $request->harga_produk,
            'tipe_id' => $request->tipe_id,
            'gambar_produk' => $gambar_produk
        ]);

        // Produk::create($request->all());
        return redirect('/dashboard/produk')->with('status', 'Data Produk Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        $kategori = Kategori::all();
        $tipe = Tipe::all();

        return view('produk.edit', compact('kategori','tipe','produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required', 
            'kategori_id' => 'required', 
            'size_produk' => 'required', 
            'harga_produk' => 'required',
            'tipe_id' => 'required',
            'gambar_produk' => 'required|image|mimes:jpg,jpeg,png|max:2048'   
        ]);

        Produk::where('id', $produk->id)
            ->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'kategori_id' => $request->kategori_id,
            'size_produk' => $request->size_produk,
            'harga_produk' => $request->harga_produk,
            'tipe_id' => $request->tipe_id,
            'gambar_produk' => $request->gambar_produk
            ]);
        
        return redirect('/dashboard/produk')->with('status', 'Data Produk Berhasil Diubah!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        // Menghapus sementara (Soft Delete)
        // Kategori::destroy($kategori->id);

        // Menghapus permanen
        $produk->forceDelete();

        return redirect('/dashboard/produk')->with('status', 'Data Buku Berhasil Dihapus!');
    }
}
