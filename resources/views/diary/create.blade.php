@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-header"><center><b>Blood Glucose and Alert Diary</b></center></div>
                    <br>
                    <center>
                        <a href="{{ URL::route('diaries.index') }}" class="btn btn-info" style="margin-bottom: 10px;">Return to Diary</a>

                    </center>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                            {!! Form::open(['method'=>'POST', 'action'=> 'alertDiaryController@store','files'=>true]) !!}
                        <div class="form-group font-weight-bold">

                            {!! Form::label('date_bg', 'Date of BG:') !!}
                            {!! Form::date('date_bg', null, ['class'=>'form-control'])!!}

                            {!! Form::label('time_bg', 'Time of BG:') !!}
                            {!! Form::time('time_bg', null, ['class'=>'form-control'])!!}

                            {!! Form::label('bg_level', 'Blood Glucose Level:') !!}
                            {!! Form::number('bg_level', null, ['class'=>'form-control', 'step'=>'0.1'])!!}

                            {!! Form::label('reason_for_bg', 'Reason for doing a Blood Test:') !!}
                            {!! Form::text('reason_for_bg', null,[ "class"=>"form-control"])!!}

                            {!! Form::label('treatment', 'Did you need to take any action?:') !!}
                            {!! Form::text('treatment', null, ["class"=>"form-control"])!!}

                            {!! Form::label('symptoms', 'How do you feel?:') !!}
                            {!! Form::text('symptoms',null, ["class"=>"form-control"])!!}

                            {!! Form::label('alert_type', 'Type of Alert:') !!}
                            {!! Form::text('alert_type', null, [ "class"=>"form-control"])!!}

                            {!! Form::label('activity', 'What were you doing?:') !!}
                            {!! Form::text('activity', null, ['class'=>'form-control'])!!}

                            {!! Form::label('missed_alert', 'If your Dog missed an alert, please give details:') !!}
                            {!! Form::text('missed_alert', null, ['class'=>'form-control'])!!}

                            {!! Form::label('in_range', 'If your Dog alerted when you was in normal range, please give details:') !!}
                            {!! Form::text('in_range', null, ['class'=>'form-control'])!!}

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


