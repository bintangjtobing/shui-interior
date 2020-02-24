<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemModel extends Model
{
    protected $table = 'items';
    protected $primaryKey =  'itemId';
    protected $fillable = ['nama_item', 'kategori_id', 'images', 'description', 'type_product', 'created_by', 'updated_by', 'tokopedia_link', 'shopee_link'];
}
