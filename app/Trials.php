<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trials extends Model
{
    protected $fillable = [
        'dog_name',
        'date_bg',
        'time_bg',
        'bg_level',
        'reason_for_bg',
        'treatment',
        'symptoms',
        'alert_type',
        'reward',
        'activity',
        'settle',
        'missed_alert',
        'in_range',
        'notes',

    ];

    protected $diaries = [
        'dog_name' => 'str',
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }
}
