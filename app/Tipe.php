<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipe extends Model
{
    use SoftDeletes;
    
    protected $table="tb_tipe_produk";
    protected $fillable = ['tipe_produk'];

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}