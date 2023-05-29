<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;

    protected $table = "tb_kategori";
    protected $fillable = ['nama_kategori'];

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
