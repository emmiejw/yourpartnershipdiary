@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header"><center><b>Hypo Hounds Clients and Staff </b></center></div>
                    <div class="card-body">
                        <center><h1>Client Details</h1></center>
                        <div class="text-center">
                            <a href="{{route('search', $user->id)}}" 
                                 class="btn btn-info  text-center">
                                 View {{ $user->name }}'s Diary
                            </a>
                        </div>
                        {!! Form::model($user,['method'=>'PATCH', 'action'=> ['userController@update', $user->id]]) !!}
                        <div class="form-group font-weight-bold">

                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control'])!!}

                            {!! Form::label('is_admin', 'Admin:') !!}
                            {!! Form::number('is_admin', null, ['class'=>'form-control'])!!}

                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::text('email', null, ['class'=>'form-control'])!!}

                            <br>
                            <center>
                                {!! Form::submit('Update Client', ['class'=>'btn btn-primary col-sm-3 ']) !!}
                                {!! Form::close() !!}
                                <br>
                                <div class="form-group py-2">
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['userController@destroy', $user->id]]) !!}
                                        <br>
                                        <div class="form-group">
                                            {!! Form::submit('Delete Client', ['class'=>'btn btn-danger col-sm-3']) !!}
                                        </div>
                                        {!! Form::close() !!}

                            </center>

                        </div>

                        {!! Form::close() !!}

                    </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection