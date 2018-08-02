@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header"><center><b>Hypo Hounds Clients and Staff </b></center></div>
                    <div class="card-body">
                        <center><h1>Client Details</h1></center>

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
                                {!! Form::submit('Update Entry', ['class'=>'btn btn-primary col-sm-3 ']) !!}
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