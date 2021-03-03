<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table="tb_kontak";
    protected $fillable = ['nama','email','pesan'];

}