<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;
use App\Repositories\DiaryRepository;
use Illuminate\Support\Facades\Session;

class alertDiaryController extends Controller
{
    protected $diaries;

    public function __construct(DiaryRepository $diaries)
    {
        $this->middleware('auth');

        $this->diaries = $diaries;

    }

    public function index(Request $request)
    {
        return view('diary.index',[ 'diaries' => $this->diaries->forUser($request->user())]);
    }


    public function create()
    {
        return view('diary.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'date_bg' =>'required|max:255',
            'time_bg' =>'required|max:255',
            'bg_level' =>'required|max:255',
            'reason_for_bg'=>'required|max:255',
        ]);

        $request->user()->diaries()->create([
            'date_bg' => $request->date_bg,
            'time_bg' => $request->time_bg,
            'bg_level' => $request->bg_level,
            'reason_for_bg' => $request->reason_for_bg,
            'treatment' => $request->treatment,
            'symptoms' => $request->symptoms,
            'alert_type' => $request->alert_type,
            'activity' => $request->activity,
            'missed_alert' => $request->missed_alert,
            'in_range' => $request->in_range,
            'notes' => $request->notes,
        ]);

        Session::flash('created_diary', 'Your diary entry has been logged');
        return redirect('/diaries' );
    }

    public function show($id)
    {
        $diary = Diary::find($id);
        return View::make('diaries.show')->with('diary', $diary);
    }


    public function edit($id)
    {
        $diary = Diary::find($id);
        return view('diary.edit', compact('diary', $diary));
    }


    public function update($id, Request $request)
    {

        $this->validate($request, [
            'date_bg' =>'required|max:255',
            'time_bg' =>'required|max:255',
            'bg_level' =>'required|max:255',
            'reason_for_bg'=>'required|max:255',
        ]);
        $diary = Diary::findOrFail($id);
        $diary -> date_bg = $request->get('date_bg');
        $diary -> time_bg = $request->get('time_bg');
        $diary -> bg_level = $request->get('bg_level');
        $diary -> reason_for_bg = $request->get('reason_for_bg');
        $diary -> treatment = $request->get('treatment');
        $diary -> symptoms = $request->get('symptoms');
        $diary -> alert_type = $request->get('alert_type');
        $diary -> activity = $request->get('activity');
        $diary -> missed_alert = $request->get('missed_alert');
        $diary -> in_range = $request->get('in_range');
        $diary -> notes = $request->get('notes');
        $diary -> save();

        Session::flash('updated_diary', 'Your diary entry has been edited');
        return redirect('/diaries');
    }


    public function destroy($id)
    {
        $diary = Diary::findOrFail($id);
        $diary->delete();
        Session::flash('deleted_diary', 'Your diary entry has been deleted');
        return redirect('/diaries');
    }
}
