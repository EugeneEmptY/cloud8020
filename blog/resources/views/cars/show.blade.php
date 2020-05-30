@extends('layouts.app')

@section('title-block')Dashboard @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    	Welcome, {{ Auth::user()->name }}
						<a href="/cars" class="btn btn-primary">Go Back</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
						<tr>
							<th>
								Car number: {{$cars->carNumber}}
							</th>
						</tr>
                        <tr>
							<th>
								Driver name: {{$cars->driverName}}
							</th>
						</tr>
                        <tr>
							<th>
								Car fleets: 
								@foreach ($car->car_fleets as $car_fleet)
								    {{ $car_fleet->carFleetTitle}} | 
								@endforeach
							</th>
						</tr>
                        <tr>
							<th>
								<a href="/cars/{{$cars->id}}/edit" class="btn btn-primary">Edit</a>
							</th>
						</tr>
						<tr>
							<th>
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
@endsection