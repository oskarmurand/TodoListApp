@extends('layouts.default')

@section('content')

<h2>Login</h2>

{{ Form::open(array('route' => 'sessions.store')) }}
  <div class="form-group>">
      {{ Form::label('email', 'Email:') }}
      {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
  </div>
  <div class="form-group>">
      {{ Form::label('password', 'Password:') }}
      {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
  </div>
  <div class="form-group>">
      {{ Form::submit('Log In', ['class' => 'btn btn-primary']) }}
  </div>
{{ Form::close() }}

    @stop
