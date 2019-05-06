<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Sale extends Model
{
    //
    protected $table = 'product_sale';

    public function products() {
        return $this->belongsTo('App\Product', 'product_id','id');
    }

    public function clients() {
        return $this->belongsTo('App\Client', 'client_id','id');
    }
}
