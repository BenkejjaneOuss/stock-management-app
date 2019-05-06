<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Num_Phone extends Model
{
    //
    protected $table = 'num_phone';

    public function operators() {
        return $this->belongsTo('App\Operator', 'operator_id','id');
    }
}
