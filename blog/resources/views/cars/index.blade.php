@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome, {{ Auth::user()->name }}</div>
                <div class="panel-body">
                    <h3>Cars</h3>
                    @if(Gate::check('isAdmin'))
                        <table class="table table-striped">
                            @if(count($cars) > 0)
                               @foreach($cars as $car)
	                                <tr>
	                                    <th>
	                                    	<h3>Car number: {{$car->carNumber}}&nbsp;|&nbsp;Driver name:&nbsp;({{$car->driverName}})</a></h3>
											<h4>Car fleet(s): 
												@foreach ($car->car_fleets as $car_fleet)
												    {{ $car_fleet->carFleetTitle}} |
												@endforeach
											</h4>
										</th>
	                                </tr>
                            	@endforeach
                            @else
								<p>No cars found</p>
							@endif
                		</table>
                		{{ $cars->render() }}
                   	@elseif(!Gate::check('isAdmin'))
                    <table class="table table-striped">
						@if(count($cars) > 0)
							@foreach($cars as $car)
									<tr>
										<th>
											<h3>Car number: {{$car->carNumber}}&nbsp;|&nbsp;Driver name:&nbsp;({{$car->driverName}})</h3>
											<h4>Car fleet(s): @foreach ($car->car_fleets as $car_fleet)
												    {{ $car_fleet->carFleetTitle}} |
												@endforeach
											</h4>
										</th>
									</tr>
							@endforeach
						@else
							<p>No cars found</p>
						@endif
					</table>
					{{ $cars->render() }}
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection