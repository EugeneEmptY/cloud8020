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
                        {!! Form::open(['action' => ['UserController@update', $users->id], 'method' => 'POST']) !!}
                        <table class="table table-striped">
                            <tr>
                                <th>
                                    {{Form::label('name', 'Name')}}
                                    {{Form::text('name', $users->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    {{Form::label('email', 'User Email')}}
                                    {{Form::text('email', $users->email, ['class' => 'form-control', 'placeholder' => 'User Email'])}}
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <h2>Edit user role: </h2>
                                    <input type="radio" name="user_role" value='Administrator' id='Administrator'
                                    {{  $users->user_role == 'Administrator' ? 'checked' : '' }}>
                                    <label for='Administrator'>Administrator</label>
                                    <input type="radio" name="user_role" value='Driver' id='Driver'
                                    {{  $users->user_role == 'Driver' ? 'checked' : '' }}>
                                    <label for='Driver'>Driver</label>
                                    <input type="radio" name="user_role" value='user' id='user'
                                    {{  $users->user_role == 'user' ? 'checked' : '' }}>
                                    <label for='user'>User</label>
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
@elseif(!Gate::check('isAdmin'))
    <script>window.location = "/home";</script>
@endif
@endsection