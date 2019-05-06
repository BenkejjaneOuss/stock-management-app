<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    public function categorys() {
        return $this->belongsTo('App\Category', 'category_id','id');
    }
    public function suppliers() {
        return $this->belongsTo('App\Supplier', 'supplier_id','id');
    }
}
