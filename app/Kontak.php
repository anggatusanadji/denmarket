<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kontak extends Model
{
    use SoftDeletes;
    
    protected $table="tb_kontak";
    protected $fillable = ['nama','email','pesan'];

}