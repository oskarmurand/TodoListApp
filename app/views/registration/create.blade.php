@extends('layouts.default')

@section('content')

@if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif

<div class="starter-template">
  <h2> Register </h2>
{{ Form::open(['route' => 'registration.store', 'name' => 'registration-form']) }}
  <!--Email field-->
  <div class="form-group">
    {{ Form::label('email', 'Email:') }}
    {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'ng-model' => 'user.email']) }}
  </div>
  <!--Password field-->
  <div class="form-group">
    {{ Form::label('password', 'Password:') }}
    {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
  </div>
  <!--Password Confirmation field-->
  <div class="form-group">
    {{ Form::label('password_confirm', 'Password Confirmation:') }}
    {{ Form::password('password_confirm ', ['class' => 'form-control', 'required' => 'required', 'id' =>'password_confirm']) }}
  </div>
  <!--Submit button-->
  <div class="form-group">
    {{ Form::submit('Create Account', ['class' => 'btn btn-primary']) }}
  </div>


{{ Form::close() }}
</div>


@stop
