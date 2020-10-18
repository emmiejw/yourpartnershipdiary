@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-header" style="font-size: 18px;"><center><b>Blood Glucose and Alert Diary</b></center></div>
                    <br>
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
                        </div><br />
                      @endif

                        <form method="post" action="{{ route('diaries.store') }}">
                            @csrf
                            <div class="form-group">    
                                <label for="date_bg">Date of BG:</label>
                                <input required type="date" class="form-control" name="date_bg"/>
                            </div>
                  
                            <div class="form-group">
                                <label for="time_bg">Time of BG:</label>
                                <input required type="time" class="form-control" name="time_bg"/>
                            </div>
                  
                            <div class="form-group">
                                <label for="bg_level">BG Level:</label>
                                <input  type="number" class="form-control" name="bg_level"  step="0.1" placeholder="6.5" required/>
                            </div>
                            <div class="form-group">
                                <label for="reason_for_bg">Reason for BG:</label>
                                <input type="text" class="form-control" name="reason_for_bg"/>
                            </div>
                            <div class="form-group">
                                <label for="treatment">Treatment needed:</label>
                                <input type="text" class="form-control" name="treatment"/>
                            </div>
                            <div class="form-group">
                                <label for="symptoms">Symptoms:</label>
                                <input type="text" class="form-control" name="symptoms"/>
                            </div>
                            <div class="form-group">
                                <label for="alert_type">Type of Alert:</label>
                                <input type="text" class="form-control" name="alert_type"/>
                            </div>
                            <div class="form-group">
                                <label for="activity">What were you doing at the time:</label>
                                <input type="text" class="form-control" name="activity"/>
                            </div>
                            <div class="form-group">
                                <label for="missed_alert">If your Dog missed an alert, please give details:</label>
                                <input type="text" class="form-control" name="missed_alert"/>
                            </div>
                            <div class="form-group">
                                <label for="in_range">If your Dog alerted when you was in range, please give details:</label>
                                <input type="text" class="form-control" name="in_range"/>
                            </div>
                            <div class="form-group">
                                <label for="notes">If your Dog missed an alert, please give details:</label>
                                <input type="textarea" class="form-control" name="notes"/>
                            </div>
                            <button type="submit" class="btn btn-info">Add Record</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@stop


