<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recharge_Sale extends Model
{
    //
    protected $table = 'recharge_sale';

    public function num_phones() {
        return $this->belongsTo('App\Num_Phone', 'num_phone_id','id');
    }
}
