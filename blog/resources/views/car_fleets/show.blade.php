@extends('layouts.app')

@section('title-block')Dashboard @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Welcome, {{ Auth::user()->name }}
					<a href="/car_fleets" class="btn btn-primary">Go Back</a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
					<tr>
						<th>
							Car fleet title: {{$car_fleets->carFleetTitle}}
						</th>
					</tr>
                    <tr>
						<th>
							Car fleet address: {{$car_fleets->carFleetAddress}}
						</th>
					</tr>
                    <tr>
						<th>
							Car fleet schedule: {{$car_fleets->carFleetSchedule}}
						</th>
					</tr>
					<tr>
						<th>
							Car(s): 
							@foreach ($car_fleets->cars as $car)
							    {{ $car->carNumber }}&nbsp;(Driver: {{$car->driverName}}) |
							@endforeach
						</th>
					</tr>
					@if(Gate::check('isAdmin'))
                    <tr>
						<th>
							<a href="/car_fleets/{{$car_fleets->id}}/edit" class="btn btn-primary">Edit</a>
						</th>
					</tr>
					<tr>
						<th>
							{!!Form::open(['action' => ['CarFleetsController@destroy', $car_fleets->id], 'method' => 'POST', 'pill-right'])!!}
								{{Form::hidden('_method', 'DELETE')}}
								{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
							{!!Form::close()!!}
						</th>
					</tr>
					@endif
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection