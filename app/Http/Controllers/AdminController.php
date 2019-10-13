<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use App\Diary;
use App\Repositories\DiaryRepository;
use App\Repositories\ReportRepository;
use Exception;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    protected $diaries;

    public function __construct(ReportRepository $diaries)
    {

        $this->diaries = $diaries;

    }

    public function diary(Request $request)
    {
        $date = Carbon::today()->subDays(90); //collects the last 90 days worth of diary entries

        return view('reports.create90', [
            'diaries' => $this->diaries->forUser($request->user(), $date)  // This method ensures only the logged in users diaries are loaded

        ]);
    }

    public function index()
    {

        $diaries = Diary::paginate(25)->sortByDesc('id');
        $date = Carbon::today()->subDays(90);
        return view('dashboard', compact('diaries', $date)); //all diary entries from all users
    }

    public function search($user_id)
    {
        $date = Carbon::today()->subDays(90);
        $diaries = Diary::where('user_id', $user_id)->paginate(25)->sortByDesc('id');
        return view('dashboard',compact('diaries', $date)); //diaries for the user that was selected
    }


}
