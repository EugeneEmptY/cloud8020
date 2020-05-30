@extends('layouts.app')

@section('content')
@if(Gate::check('isDriver'))
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Welcome, {{ Auth::user()->name }}
                        <a class="btn btn-primary" href="/cars/create">+ Add car</a>
                    </div>
                    <div class="panel-body">
                        <h3>Your car(s)</h3>
                            @if(count($cars) > 0)
                                <table class="table table-striped">
                                    <tr>
                                        <th>List</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                @foreach($cars as $car)
                                <tr>
                                    <th>{{$car->carNumber}}&nbsp;|&nbsp;Car fleet(s): 
                                        @foreach ($car->car_fleets as $car_fleet)
                                            {{ $car_fleet->carFleetTitle}} | 
                                        @endforeach
                                    </th>
                                    <th><a href="/cars/{{$car->id}}/edit" class="btn btn-primary">Edit</a></th>
                                    <th>
                                        {!!Form::open(['action' => ['CarsController@destroy', $car->id], 'method' => 'POST', 'pill-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </th>
                                </tr>
                            @endforeach
                            @else
                                <p>You have no car(s)</p>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif(!Gate::check('isDriver'))
    <script>window.location = "/home";</script>
@endif
@endsection


