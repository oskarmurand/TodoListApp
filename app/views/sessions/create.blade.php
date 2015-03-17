@extends('layouts.default')

@section('content')


<div class="small-12 small-centered medium-6 large-4 columns">
{{ Form::open(array('route' => 'sessions.store')) }}

<div class="row">

  <div class="small-12 columns border">
    <img src="http://placehold.it/350x150/" alt="350x150" /> <!-- placeholder image -->
  </div>

  <div class="small-12 columns">
      {{ Form::text('email', null, ['class' => 'radiusl', 'required' => 'required', 'placeholder' => 'Email']) }}
  </div> <!-- end email -->
  <div class="small-12 columns">
      {{ Form::password('password', ['class' => 'radius', 'required' => 'required', 'placeholder' => 'Password']) }}
  </div> <!-- end password -->
  <div class="small-12 columns">
      {{ Form::submit('Log In', ['class' => 'small radius button success small-12 columns']) }}
  </div> <!-- end button -->

</div> <!-- end row -->
{{ Form::close() }} <!-- close form -->
</div> <!-- end centering -->

    @stop
