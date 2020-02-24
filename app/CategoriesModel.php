<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    protected $table =  'categoriesSparepart';
    protected $fillable = ['nama_kategori', 'created_by', 'updated_by'];
}
