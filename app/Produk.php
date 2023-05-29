<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use SoftDeletes;

    protected $table = "tb_produk";
    protected $fillable = ['nama_produk', 'deskripsi_produk', 'kategori_id', 'size_produk', 'harga_produk', 'tipe_id', 'gambar_produk'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function tipe()
    {
        return $this->belongsTo(Tipe::class);
    }
}
