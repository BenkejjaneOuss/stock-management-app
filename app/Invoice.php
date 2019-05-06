<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $table = 'invoice';

    public function clients() {
        return $this->belongsTo('App\Client', 'client_id','id');
    }
}
