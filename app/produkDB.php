<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produkDB extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'produk_id';
    protected $fillable = [
        'nama_produk', 'deskripsi', 'created_by', 'image'
    ];
}
