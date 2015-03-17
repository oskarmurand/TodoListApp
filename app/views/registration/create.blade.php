@extends('layouts.default')

@section('content')

@if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif

<div class="small-12 small-centered medium-6 large-4 columns">
{{ Form::open(['route' => 'registration.store', 'name' => 'registration-form']) }} <!-- open form -->
<div class="row">

  <div class="small-12 columns border">
    <img src="http://placehold.it/350x150/" alt="350x150" /> <!-- placeholder image -->
  </div>

  <!--Email field-->
  <div class="small-12 columns">
    {{ Form::email('email', null, ['class' => ' radius', 'required' => 'required', 'ng-model' => 'user.email', 'placeholder' => 'Email' ]) }}
  </div>
  <!--Password field-->
  <div class="small-12 columns">
    {{ Form::password('password', ['class' => 'radius', 'required' => 'required', 'placeholder' => 'Password', ]) }}
  </div>
  <!--Password Confirmation field-->
  <div class="small-12 columns">
    {{ Form::password('password_confirm ', ['class' => 'radius', 'placeholder' => 'Password Again', 'required' => 'required', 'id' =>'password_confirm']) }}
  </div>
  <!--Submit button-->
  <div class="small-12 columns">
    {{ Form::submit('Register', ['class' => 'small radius button success small-12 columns']) }}
  </div> <!-- end button -->

</div> <!-- end row -->
{{ Form::close() }} <!-- close form -->
</div> <!-- end centering -->

@stop
