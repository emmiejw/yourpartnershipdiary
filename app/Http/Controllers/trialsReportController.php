<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trials;
use Illuminate\Support\Carbon;

class trialsReportController extends Controller
{
    public function index($dog_name)
    {
        $date = Carbon::today()->subDays(90);
        $trials = Trials::where('dog_name', $dog_name)->paginate(25);
        return view('trialsdashboard', compact('trials', $date)); //diaries for the user that was selected
    }
}
