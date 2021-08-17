<?php

namespace App;

use App\User;
use App\Report;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = [
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
        'user_id' => 'int',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
