<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kategori;
use App\Tipe;
use App\Produk;
use File;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexview()
    {
        // $kategori = DB::table('films')->get();
        $produk = Produk::where('tipe_id', 1 && 'kategori_id', 2)->get();
        return view('home', ['produk' => $produk]);
    }
    public function index()
    {
        // $kategori = DB::table('films')->get();
        $produk = Produk::all();
        return view('produk.index', ['produk' => $produk]);
    }
    public function indexfutsal()
    {
        // $kategori = DB::table('films')->get();
        $produk = Produk::where('kategori_id', 1)->get();
        return view('product-futsal', ['produk' => $produk]);
    }
    public function indexfootball()
    {
        // $kategori = DB::table('films')->get();
        $produk = Produk::where('kategori_id', 2)->get();
        return view('product-football', ['produk' => $produk]);
    }
    public function indexrunning()
    {
        // $kategori = DB::table('films')->get();
        $produk = Produk::where('kategori_id', 3)->get();
        return view('product-running', ['produk' => $produk]);
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
        $gambar_produk = time(). "." .$img->getClientOriginalExtension();
        $upDir = 'image/product';
        $img->move($upDir, $gambar_produk);

        $produk = Produk::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'kategori_id' => $request->kategori_id,
            'size_produk' => $request->size_produk,
            'harga_produk' => $request->harga_produk,
            'tipe_id' => $request->tipe_id,
            'gambar_produk' => $gambar_produk
            // 'gambar_produk' => request('gambar_produk') ? request()->file('gambar_produk')->store('public/image/product') : null,
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
    public function detailProduct(Produk $produk)
    {
        return view('detail-product', compact('produk'));
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
    public function update(Request $request, $id)
    {
        $produk = Produk::where('id', $id)->first();

        $this->validate($request, [
            'gambar_produk' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if($request->hasfile('gambar_produk')){

            File::delete('image/product/'.$produk->gambar_produk);

            $img = $request->file('gambar_produk');
            $img_name = time(). "." .$img->getClientOriginalExtension();

            $upDir = 'image/product';
            $img->move($upDir, $img_name);

            Produk::where('id', $id)->update([
                'nama_produk' => $request->nama_produk,
                'deskripsi_produk' => $request->deskripsi_produk,
                'kategori_id' => $request->kategori_id,
                'size_produk' => $request->size_produk,
                'harga_produk' => $request->harga_produk,
                'tipe_id' => $request->tipe_id,
                'gambar_produk' => $img_name,
            ]);

        }else{
            
            Produk::where('id', $produk->id)
            ->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'kategori_id' => $request->kategori_id,
            'size_produk' => $request->size_produk,
            'harga_produk' => $request->harga_produk,
            'tipe_id' => $request->tipe_id
        ]);
        }

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

        return redirect('/dashboard/produk')->with('status', 'Data Produk Berhasil Dihapus!');
    }
}
