@extends('layouts.default')

@section('content')

@if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif

<div class="small-12 medium-6 large-4 columns small-centered container-card">
{{ Form::open(['route' => 'registration.store', 'name' => 'registration-form']) }} <!-- open form -->
<div class="row">

  <div class="small-12 columns border">
    <img src="http://placehold.it/350x150/" alt="350x150" /> <!-- placeholder image -->
  </div>

  <!--Email field-->
  <div class="small-12 columns">
    {{ Form::text('givenname', null, ['class' => ' radius firstname-input', 'required' => 'required', 'placeholder' => '&#09;First name' ]) }}
  </div>
  <!--Email field-->
  <div class="small-12 columns">
    {{ Form::text('lastname', null, ['class' => ' radius lastname-input', 'required' => 'required', 'placeholder' => '&#09;Last name' ]) }}
  </div>
  <!--Email field-->
  <div class="small-12 columns">
    {{ Form::email('email', null, ['class' => ' radius email-input', 'required' => 'required', 'ng-model' => 'user.email', 'placeholder' => '&#09;Email' ]) }}
  </div>
  <!--Password field-->
  <div class="small-12 columns">
    {{ Form::password('password', ['class' => 'radius pass-input', 'required' => 'required', 'placeholder' => '&#09;Password', ]) }}
  </div>
  <!--Password Confirmation field-->
  <div class="small-12 columns">
    {{ Form::password('password_confirm ', ['class' => 'radius pass-input', 'placeholder' => '&#09;Repeat password', 'required' => 'required', 'id' =>'password_confirm']) }}
  </div>
  <!--Submit button-->
  <div class="small-12 columns">
    {{ Form::submit('Register', ['class' => 'small radius button  small-12 columns', 'placeholder' => 'Sign up']) }}
  </div> <!-- end button -->

</div> <!-- end row -->
{{ Form::close() }} <!-- close form -->
</div> <!-- end centering -->

@stop
