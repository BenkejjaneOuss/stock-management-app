<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Sale_Invoice extends Model
{
    //
    protected $table = 'product_sale_invoice';

    public function products() {
        return $this->belongsTo('App\Product', 'product_id','id');
    }

    public function Invoice() {
        return $this->belongsTo('App\Invoice', 'invoice_id','id');
    }
}
