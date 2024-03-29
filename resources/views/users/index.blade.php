@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <center><b>Hypo Hounds Clients and Staff </b></center>
                </div>
                <div class="card-body">
                    <br>
                    @if(Session::has('deleted_user'))
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Client record has been deleted successfully!
                    </div>
                    @endif
                    <table class="table table-striped table-responsive-sm table-hover table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Admin</th>
                                <th>Email </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user)
                            <tr>
                                <td>
                                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-light border-dark p-1">
                                        Client Details
                                    </a>
                                </td>
                                <td> {{$user->name}}</td>
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