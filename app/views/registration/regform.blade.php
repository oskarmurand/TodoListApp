{{ Form::open(['route' => 'registration.store', 'name' => 'registration-form']) }} <!-- open form -->
<div class="row regform" data-equalizer-watch="form">

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
      {{ Form::email('email', null, ['class' => ' radius email-input', 'required' => 'required', 'placeholder' => '&#09;Email' ]) }}
    </div>
    <!--Password field-->
    <div class="small-12 columns">
      {{ Form::password('password', ['id' => 'password', 'class' => 'radius pass-input', 'required' => 'required', 'placeholder' => '&#09;Password', ]) }}
    </div>
    <!--Password Confirmation field-->
    <div class="small-12 columns">
      {{ Form::password('password_confirm ', ['id' => 'password_confirm', 'class' => 'radius pass-input', 'placeholder' => '&#09;Repeat password', 'required' => 'required', 'id' =>'password_confirm']) }}
    </div>
    <!--Submit button-->
    <div class="small-12 columns regbutton">
      {{ Form::submit('Register', ['class' => 'small radius button  small-12 columns', 'placeholder' => 'Sign up']) }}
    </div> <!-- end button -->
</div>
{{ Form::close() }} <!-- close form -->
