@extends('layouts.default')

@section('content')

<div class="small-12 medium-6 large-4 columns small-centered container-card">

{{ Form::open(array('route' => 'sessions.store')) }}

<div class="row">

  <div class="small-12  border">
    <img src="images/logo.gif" alt="155x155" /> <!-- placeholder image -->
  </div>

  <div class="small-12 ">
      {{ Form::text('email', null, ['class' => 'radius email-input', 'required' => 'required', 'placeholder' => '&#09;Email']) }}
  </div> <!-- end email -->
  <div class="small-12 ">
      {{ Form::password('password', ['class' => 'radius pass-input', 'required' => 'required', 'placeholder' => '&#09;Password']) }}
  </div> <!-- end password -->
  <div class="small-12 ">
      {{ Form::submit('Log In', ['class' => 'small radius button small-12', 'placeholder' => 'Log in']) }}
  </div> <!-- end button -->

</div> <!-- end row -->
{{ Form::close() }} <!-- close form -->

</div>



    @stop
