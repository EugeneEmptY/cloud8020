@extends('layouts.app')

@section('title-block')Dashboard @endsection

@section('content')
@if(Gate::check('isAdmin'))
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    	Welcome, {{ Auth::user()->name }}
						<a href="/users" class="btn btn-primary">Go Back</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
						<tr>
							<th>
								User name: {{$users->name}}
							</th>
						</tr>
                        <tr>
							<th>
								User email: {{$users->email}}
							</th>
						</tr>
                        <tr>
							<th>
								User role: {{$users->user_role}}
							</th>
						</tr>
                        <tr>
							<th>
								<a href="/users/{{$users->id}}/edit" class="btn btn-primary">Edit</a>
								{!!Form::open(['action' => ['UserController@destroy', $users->id], 'method' => 'POST', 'pill-right'])!!}
									{{Form::hidden('_method', 'DELETE')}}
									{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
								{!!Form::close()!!}
							</th>
						</tr>
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