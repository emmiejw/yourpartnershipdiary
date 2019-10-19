@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header" style="font-size: 18px;"><center><b>Your Blood Glucose and Alert Diary</b></center></div>

                    <div class="card-body">
                            @if(Session::has('created_diary'))

                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Success!</strong> BG & Alert record has been added successfully!
                            </div>
                        @endif
                    
                        @if(Session::has('updated_diary'))
                            <div class="alert alert-warning alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Success!</strong> BG & Alert record has been updated successfully!
                            </div>
                        @endif
                    
                        @if(Session::has('deleted_diary'))
                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Success!</strong> BG & Alert record has been deleted successfully!
                            </div>
                        @endif



                        <center>
                            <a href="{{ URL::route('diaries.create') }}" class="btn btn-info" style="margin: 10px;"> Add Entry to Diary</a>
                            <a href="{{ URL::route('report') }}" class="btn btn-info" style="margin: 10px;"> 3 Monthly Diary Report</a>
                        </center>
                            <br>
                        <table class="table table-responsive-sm table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Edit</th>
                                <th>Date of BG</th>
                                <th>Time of BG</th>
                                <th>BG Level (mmols)</th>
                                <th>Reason for BG</th>
                                <th>Any Treatment needed?</th>
                                <th>How are you feeling?</th>
                                <th>Type of alert?</th>
                                <th>What were you doing at the time?</th>
                                <th>Did your dog miss the alert?</th>
                                <th>Did your dog alert when you was in range?</th>
                                <th>Comments</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($diaries as $diary)
                                <tr>
                                    <td><a href="{{route('diaries.edit', $diary->id)}}" class="btn btn-danger"><i class="fa fa-edit"></i></a></td>
                                    <td>{{$diary->date_bg}}</td>
                                    <td>{{$diary->time_bg}}</td>
                                    <td>{{number_format($diary->bg_level, 1) }}</td>
                                    <td>{{$diary->reason_for_bg}}</td>
                                    <td>{{$diary->treatment}}</td>
                                    <td>{{$diary->symptoms}}</td>
                                    <td>{{$diary->alert_type}}</td>
                                    <td>{{$diary->activity}}</td>
                                    <td>{{$diary->missed_alert}}</td>
                                    <td>{{$diary->in_range}}</td>
                                    <td>{{$diary->notes}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="align-self: center">
                        {{ $diaries->links() }}
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>

@stop
