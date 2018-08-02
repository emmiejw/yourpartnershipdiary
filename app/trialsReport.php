<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trialsReport extends Model
{
    public function trials(){


        return $this->belongsTo('App\Trials');


    }
}
