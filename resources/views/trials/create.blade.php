@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-header"><center><b>Clinical Trials - Blood Glucose and Alert Diary</b></center></div>
                    <br>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                            {!! Form::open(['method'=>'POST', 'action'=> 'TrialsController@store','files'=>true]) !!}
                        <div class="form-group font-weight-bold">

                            {!! Form::label('dog_name', 'Dogs Name/ID:') !!}
                            {!! Form::text('dog_name', null,[ "class"=>"form-control"])!!}

                            {!! Form::label('date_bg', 'Date of Trial:') !!}
                            {!! Form::date('date_bg', null, ['class'=>'form-control'])!!}

                            {!! Form::label('start_time', 'Start Time:') !!}
                            {!! Form::time('start_time', null, ['class'=>'form-control'])!!}

                            {!! Form::label('complete_time', 'Finish within or Abandoned:') !!}
                            {!! Form::text('complete_time', null, ['class'=>'form-control'])!!}

                            {!! Form::label('sample_type', 'Sample Type Used:') !!}
                            {!! Form::text('sample_type', null,[ "class"=>"form-control"])!!}

                            {!! Form::label('sample_level', ' Sample Blood Glucose Level:') !!}
                            {!! Form::number('sample_level', null, ['class'=>'form-control', 'step'=>'0.1'])!!}

                            {!! Form::label('alert_type', 'Alert Behaviour:') !!}
                            {!! Form::text('alert_type', null, [ "class"=>"form-control"])!!}

                            {!! Form::label('location', 'Location of Trial:') !!}
                            {!! Form::text('location', null, ["class"=>"form-control"])!!}

                            {!! Form::label('activity', 'What was the Dog Doing?:') !!}
                            {!! Form::text('activity', null, ['class'=>'form-control'])!!}

                            {!! Form::label('missed_alert', 'Did the dog miss the scent?, please give details:') !!}
                            {!! Form::text('missed_alert', null, ['class'=>'form-control'])!!}

                            {!! Form::label('response_decoy', 'Any Response to Decoy Scent?, please give details:') !!}
                            {!! Form::text('response_decoy', null, ['class'=>'form-control'])!!}

                            {!! Form::label('notes', 'Notes:') !!}
                            {!! Form::textarea('notes', null, ['class'=>'form-control'])!!}
                            <br>
                            <center>
                                {!! Form::submit('Save' , ['class'=>'btn btn-primary col-sm-3 ']) !!}

                            </center>

                    </div>

                    {!! Form::close() !!}

                    <div class="row">


                    </div>

                </div>

            </div>

        </div>
    </div>
@stop


