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
                                                <th>Dog's Name/ID</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach ($trials as $trial)
                                                <tr>
                                                    <td><a href="{{route('trials.search', $trial->dog_name)}}">{{$trial->dog_name}}</a></td>
                                                    <td><a href="{{route('trials.create')}}" class="btn btn-outline-info"></a></td>
                                                    <td><a href="{{route('trials.index')}}" class="btn btn-outline-info"></a></td>

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
