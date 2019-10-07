<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_katalog extends Model
{
    public $timestamps = false;
    protected $table = "tbl_katalog";
    protected $fillable = ['nama_produk','berat','harga','gambar','keterangan'];
}
