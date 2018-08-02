@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header"><center><b>Hypo Hounds Clients and Staff </b></center></div>
                    <div class="card-body">
                        <br>
                        <table class="table table-striped table-responsive-sm table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Admin</th>
                                <th>Email </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($users as $user)
                                <tr>
                                    <td><a href="{{route('users.edit', $user->id)}}">{{$user->id}}</a></td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->is_admin}}</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="align-self: center">
                        {{ $users->links() }}
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>

@stop
