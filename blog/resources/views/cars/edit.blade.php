@extends('layouts.app')

@section('title-block')Dashboard @endsection

@section('content')
@if(Gate::check('isDriver'))
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Welcome, {{ Auth::user()->name }}
                        <a href="/dashboard" class="btn btn-primary">Go Back</a>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['action' => ['CarsController@update', $cars->id], 'method' => 'POST']) !!}
                        <table class="table table-striped">
                            <tr>
                                <th>
                                    {{Form::label('carNumber', 'Car Number')}}
                                    {{Form::text('carNumber', $cars->carNumber, ['class' => 'form-control', 'placeholder' => 'Car Number'])}}
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    {{Form::label('driverName', 'Driver Name')}}
                                    {{Form::text('driverName', $cars->driverName, ['class' => 'form-control', 'placeholder' => 'Driver Name'])}}
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    @if(count($car_fleets) > 0)
                                        @foreach ($car_fleets as $car_fleet)
                                            <input type="checkbox" name="id[]" value="{{$car_fleet->id}}" id="{{$car_fleet->id}}"
                                            {{$cars->car_fleets->contains($car_fleet->id)  ? 'checked' : '' }}>
                                            <label for='{{$car_fleet->id}}'>{{$car_fleet->carFleetTitle}}</label>
                                        @endforeach
                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    {{Form::hidden('_method', 'PUT')}}
                                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                                </th>
                            </tr>
                        </table>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif(!Gate::check('isDriver'))
    <script>window.location = "/home";</script>
@endif
@endsection