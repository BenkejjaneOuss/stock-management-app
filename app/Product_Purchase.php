<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Purchase extends Model
{
    //
    protected $table = 'product_purchase';
    
    public function products() {
        return $this->belongsTo('App\Product', 'product_id','id');
    }

    public function suppliers() {
        return $this->belongsTo('App\Supplier', 'supplier_id','id');
    }

}
