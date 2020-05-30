@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome, {{ Auth::user()->name }}</div>
                <div class="panel-body">
                    <h3>Car fleets</h3>
	                @if(Gate::check('isAdmin'))
						<a class="btn btn-primary" href="/car_fleets/create">+ Add car fleet</a>
					@endif
                    <table class="table table-striped">
                        @if(count($car_fleets) > 0)
                           @foreach($car_fleets as $car_fleet)
                                <tr>
                                    <th>
                                    	<h3><a href="/car_fleets/{{$car_fleet->id}}">{{$car_fleet->carFleetTitle}}&nbsp;|&nbsp;{{$car_fleet->carFleetAddress}}
                                        @if($car_fleet->carFleetSchedule != NULL)
                                            &nbsp;|&nbsp;{{$car_fleet->carFleetSchedule}}
                                        @endif
                                        </a></h3>
									</th>
                                </tr>
                        	@endforeach
                        @else
							<p>No car fleets found</p>
						@endif
            		</table>
            		{{ $car_fleets->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection