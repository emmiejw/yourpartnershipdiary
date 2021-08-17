<?php

namespace App\Http\Controllers;

use App\User;
use App\Diary;
use Illuminate\Http\Request;
use App\Repositories\DiaryRepository;
use App\Repositories\ReportRepository;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    protected $diaries;

    public function __construct(ReportRepository $diaries)
    {

        $this->diaries = $diaries;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Diary $diary)
    {
        $users = User::paginate(20);

        return view('users.index', compact('users', 'diary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        User::create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
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
        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->is_admin = $request->get('is_admin');
        $user->email = $request->get('email');

        $user->save();


        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        Session::flash('deleted_user', 'Client deleted');
        return redirect('/admin/users');
    }
}
