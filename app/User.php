<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        if ($this->is_admin == 1) {
            return true;
        }
        return false;
    }

    public function diaries()
    {
        return $this->hasMany(Diary::class);
    }

    public function reports()
    {
        return $this->hasMany('App\Report');
    }

    public  function forUser()
    {
        return $this->hasMany(DiaryRepository::class);
    }

    public function trials()
    {
        return $this->hasMany('App\Trials');
    }
}
