<?php

/**
 * Created by PhpStorm.
 * User: emily
 * Date: 29/06/2018
 * Time: 13:36
 */

namespace App\Repositories;

use App\User;
use App\Diary;


class ReportRepository
{
    public function forUser(User $user)
    {

        return Diary::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
