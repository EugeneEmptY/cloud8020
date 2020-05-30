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
                        <a href="/car_fleets" class="btn btn-primary">Go Back</a>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['action' => 'CarFleetsController@store', 'method' => 'POST']) !!}
                        <table class="table table-striped">
                            <tr>
                                <th>
                                    {{Form::label('carFleetTitle', 'Car Fleet Title')}}
                                    {{Form::text('carFleetTitle', '', ['class' => 'form-control', 'placeholder' => 'Car Fleet Title'])}}
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    {{Form::label('carFleetAddress', 'Car Fleet Address')}}
                                    {{Form::text('carFleetAddress', '', ['class' => 'form-control', 'placeholder' => 'Car Fleet Address'])}}
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    {{Form::label('carFleetSchedule', 'Car Fleet Schedule')}}
                                    {{Form::text('carFleetSchedule', '', ['class' => 'form-control', 'placeholder' => 'Car Fleet Schedule'])}}
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <h2>Choose car: </h2>
                                    @if(count($cars) > 0)
                                        @foreach ($cars as $car)
                                            <input type="checkbox" name="id[]" value='{{$car->id}}' id='{{$car->id}}'>
                                            <label for='{{$car->id}}'>{{$car->carNumber}}</label>
                                        @endforeach
                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>
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
@elseif(!Gate::check('isAdmin'))
    <script>window.location = "/home";</script>
@endif
@endsection