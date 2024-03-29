@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <center><b>{{Auth::user()->name}} 3 monthly Report</b></center>
                </div>
                <div class="card-body">
                    <center>
                        <a href="{{ URL::route('diaries.index') }}" class="btn btn-info"
                            style="margin-bottom: 10px;">Return to Your Diary</a>
                    </center>

                    <table class="table table-responsive-sm table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Date & Time of BG</th>
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
                                <td>
                                    {{  date('d/m/Y', strtotime($diary->date_bg)) }}
                                    <br />
                                    {{ date('h:i a', strtotime($diary->time_bg)) }}
                                </td>
                                @if ($diary->bg_level <= 5) <td id="BG" style="font-weight:bold; color:red;">
                                    {{number_format($diary->bg_level, 1) }}
                                    </td>
                                    @elseif ($diary->bg_level >= 10)
                                    <td id="BG" style="font-weight:bold; color:blue;">
                                        {{number_format($diary->bg_level, 1) }}
                                    </td>
                                    @else
                                    <td id="BG" style="font-weight:bold;">
                                        {{number_format($diary->bg_level, 1) }}
                                    </td>
                                    @endif
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
            </div>
        </div>

    </div>
</div>

@stop