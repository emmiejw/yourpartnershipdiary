<?php

namespace App\Http\Controllers;

use App\Diary;
use App\Repositories\DiaryRepository;
use App\Repositories\ReportRepository;
use Illuminate\Http\Request;


class ReportController extends Controller
{
    protected $diaries;

    public function __construct(ReportRepository $diaries)
    {
        $this->middleware('auth');

        $this->diaries = $diaries;

    }

    public function index(Request $request)
    {
        
        $date = \Carbon\Carbon::now(); 


        return view('reports.create90',[
            'diaries' => $this->diaries->forUser($request->user())->where('created_at','>=', now()->subdays(90)) 
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
