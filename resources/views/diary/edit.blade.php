@extends('layouts.app')

@section('content')
    @if(Session::has('created_user'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> BG & Alert record has been added successfully!
        </div>
    @endif

    @if(Session::has('updated_user'))
        <div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> BG & Alert record has been updated successfully!
        </div>
    @endif

    @if(Session::has('deleted_user'))
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> BG & Alert record has been deleted successfully!
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header" style="font-size: 18px;"><center><b>Your Blood Glucose and Alert Diary</b></center></div>
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
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <br /> 
                        <form method="post" action="{{ route('diaries.update', $diary->id) }}">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">    
                                <label for="date_bg">Date of BG:</label>
                            <input required type="date" class="form-control" name="date_bg" value="{{ $diary->date_bg }}" />
                            </div>
                  
                            <div class="form-group">
                                <label for="time_bg">Time of BG:</label>
                                <input required type="time" class="form-control" name="time_bg" value="{{ $diary->time_bg }}" />
                            </div>
                  
                            <div class="form-group">
                                <label for="bg_level">BG Level:</label>
                                <input required type="number" class="form-control" name="bg_level"  step="0.1" value="{{ number_format($diary->bg_level, 1)}}" />
                            </div>
                            <div class="form-group">
                                <label for="reason_for_bg">Reason for BG:</label>
                                <input type="text" class="form-control" name="reason_for_bg" value="{{ $diary->reason_for_bg }}" />
                            </div>
                            <div class="form-group">
                                <label for="treatment">Treatment needed:</label>
                                <input type="text" class="form-control" name="treatment" value="{{ $diary->treatment }}" />
                            </div>
                            <div class="form-group">
                                <label for="symptoms">Symptoms:</label>
                                <input type="text" class="form-control" name="symptoms" value=" {{$diary->symptoms }} "/>
                            </div>
                            <div class="form-group">
                                <label for="alert_type">Type of Alert:</label>
                                <input type="text" class="form-control" name="alert_type" value="{{ $diary->alert_type }}" />
                            </div>
                            <div class="form-group">
                                <label for="activity">What were you doing at the time:</label>
                                <input type="text" class="form-control" name="activity" value=" {{$diary->activity }} " />
                            </div>
                            <div class="form-group">
                                <label for="missed_alert">If your Dog missed an alert, please give details:</label>
                                <input type="text" class="form-control" name="missed_alert" value="{{$diary->missed_alert}}"/>
                            </div>
                            <div class="form-group">
                                <label for="in_range">If your Dog alerted when you was in range, please give details:</label>
                                <input type="text" class="form-control" name="in_range" value="{{$diary->in_range }}" />
                            </div>
                            <div class="form-group">
                                <label for="notes">If your Dog missed an alert, please give details:</label>
                                <input type="textarea" class="form-control" name="notes" value="{{$diary->notes}}" />
                            </div>
                            <button type="submit" class="btn btn-info">Update Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection