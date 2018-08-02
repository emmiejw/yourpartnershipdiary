<?php

namespace App\Http\Controllers;

use App\Trials;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Sodium\compare;

class TrialsController extends Controller
{
    protected $trials;


    public function index()
    {
        $trials = Trials::paginate(25);

        return view('trials.index', compact('trials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Trials::create($input);

        Session::flash('created_diary', 'Your diary entry has been logged');

        return redirect('/admin/trials' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trials = Trials::find($id);

        return View::make('trials.show')
        ->with('trials', $trials);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trial = \App\Trials::find($id);


        return view('trials.edit', compact('trial', $trial));
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
        $trial = Trials::findOrFail($id);

        $input = $request->all();

        $trial ->update($input);

        Session::flash('updated_diary', 'Your diary entry has been edited');

        return redirect('/admin/trials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trial = Trials::findOrFail($id);

        $trial->delete();

        Session::flash('deleted_diary', 'Your diary entry has been deleted');
        return redirect('/admin/trials');
    }
}
