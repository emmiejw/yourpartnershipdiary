@extends('layouts.app')

@section('content')
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header"><center><b>Clinical Trials - Blood Glucose and Alert Diary</b></center></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif



                        <center>
                            <a href="{{ URL::route('trials.create') }}" class="btn btn-info" style="margin: 10px;"> Add Entry to Diary</a>
                        </center>
                            <br>
                        <table class="table table-info table-responsive-sm table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Edit</th>
                                <th>Dog's name/ID</th>
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
                                    <td><a href="{{route('trials.edit', $trial->id)}}" class="btn btn-danger"><i class="fa fa-edit"></i></a></td>
                                    <td><a href="{{route('trial.report', $trial->dog_name)}}">{{$trial->dog_name}}</a></td>
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
                    <div style="align-self: center">
                        {{ $trials->links() }}
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>

@stop
