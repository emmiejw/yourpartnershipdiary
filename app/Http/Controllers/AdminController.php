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
        $date = Carbon::today()->subDays(90);
        return view('reports.create90', [ 'diaries' => $this->diaries->forUser($request->user(), $date) ]);
    }
    
    public function index()
    {
        $diaries = Diary::orderBy('created_at', 'desc') ->paginate(25);
        return view('dashboard', compact('diaries', $diaries)); 
    }

    public function search($user_id)
    {
        $date = Carbon::today()->subDays(90);
        $diaries = Diary::where('user_id', $user_id)->orderBy('created_at', 'desc')->paginate(25);
        return view('dashboard',compact('diaries', $date)); 
    }
}
