@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header"><center><b>Clinical Trials Dashboard</b></center></div>
                        <br>
                            <div class="card-body">

                                    <br>
                                        <table class="table table-responsive-sm table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Dogs Name/ID</th>
                                                <th>Date of Trial</th>
                                                <th>Start Time</th>
                                                <th>Finish Time</th>
                                                <th>Sample Type Used</th>
                                                <th>Sample BG Level</th>
                                                <th>Alert Behaviour</th>
                                                <th>Location of Trial</th>
                                                <th>What was the Dog Doing?</th>
                                                <th>Did the dog miss the scent?</th>
                                                <th>Any Response to Decoy Scent?</th>
                                                <th>Comments</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach ($trials as $trial)
                                                <tr>
                                                    <td>{{$trial->dog_name}}</td>
                                                    <td>{{$trial->date_bg}}</td>
                                                    <td>{{$trial->start_time}}</td>
                                                    <td>{{$trial->complete_time}}</td>
                                                    <td>{{$trial->sample_type}}</td>
                                                    <td>{{$trial->sample_level}}</td>
                                                    <td>{{$trial->alert_type}}</td>
                                                    <td>{{$trial->location}}</td>
                                                    <td>{{$trial->activity}}</td>
                                                    <td>{{$trial->missed_alert}}</td>
                                                    <td>{{$trial->response_decoy}}</td>
                                                    <td>{{$trial->notes}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop
