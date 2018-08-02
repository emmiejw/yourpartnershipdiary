<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trials extends Model
{
    protected $fillable = [
        'dog_name',
        'date_bg',
        'start_time',
        'complete_time',
        'sample_type',
        'sample_level',
        'alert_type',
        'location',
        'activity',
        'missed_alert',
        'response_decoy',
        'notes',

    ];

    protected $diaries = [
        'dog_name' => 'str',
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }

    public function trialsReport(){
        return $this->hasMany(trialsReport::class);
    }
}
