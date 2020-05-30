@extends('layouts.app')

@section('content')

@if(Gate::check('isAdmin'))
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome, {{ Auth::user()->name }}</div>
                    <div class="panel-body">
                        <h3>Users</h3>
                            @if(count($users) > 0)
                                <table class="table table-striped">
                                    <tr>
                                        <th>List</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                @foreach($users as $user)
	                                <tr>
	                                    <th><h3><a href="/users/{{$user->id}}">{{$user->name}}</a></h3></th>
	                                </tr>
                            	@endforeach
							{{ $users->render() }}
                            @else
                                <p>No users</p>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif(!Gate::check('isAdmin'))
    <script>window.location = "/home";</script>
@endif
@endsection