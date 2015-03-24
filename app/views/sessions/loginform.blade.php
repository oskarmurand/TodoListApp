{{ Form::open(array('route' => 'sessions.store')) }}

<div class="row loginform" data-equalizer-watch="form">

  <div class="small-12 columns border">
    <img src="images/logo.gif" alt="155x155" /> <!-- placeholder image -->
  </div>

  <div class="small-12 columns">
      {{ Form::text('email', null, ['class' => 'radius email-input', 'required' => 'required', 'placeholder' => '&#09;Email']) }}
  </div> <!-- end email -->
  <div class="small-12 columns">
      {{ Form::password('password', ['class' => 'radius pass-input', 'required' => 'required', 'placeholder' => '&#09;Password']) }}
  </div> <!-- end password -->
  <div class="small-12 columns">
      {{ Form::submit('Log In', ['class' => 'small radius button small-12', 'placeholder' => 'Log in']) }}
  </div> <!-- end button -->
      <div class="row">
          <div class="small-6 columns">
            <div class="row collapse prefix-radius">
              <div class="small-3 columns">
                <input  class"prefix" id='remember' type='checkbox' /><label for='remember'><span></span></label>
              </div>
              <div class="small-9 columns">
                <span class="left">Remember Me</span>
              </div>
           </div>
         </div>
           <div class="small-6 columns register-link">
             <p class="right"><a href="register">Register</a></p>
           </div>

        </div>



</div> <!-- end row -->
{{ Form::close() }} <!-- close form -->
