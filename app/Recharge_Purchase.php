<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recharge_Purchase extends Model
{
    //
    protected $table = 'recharge_purchase';

    public function num_phones() {
        return $this->belongsTo('App\Num_Phone', 'num_phone_id','id');
    }
}
