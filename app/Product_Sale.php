<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Sale extends Model
{
    //
    protected $table = 'product_sale';

    public function product() {
        return $this->belongsTo('App\Product', 'product_id','id');
    }

    public function client() {
        return $this->belongsTo('App\Client', 'client_id','id');
    }
}
