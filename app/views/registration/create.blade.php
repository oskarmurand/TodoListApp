@extends('layouts.default')

@section('content')

@if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif


        <div class="row fullWidth" data-equalizer="split" data-equalizer="form">

           <div class="small-12 medium-6 columns register" data-equalizer-watch="split">

             <div class="small-12 columns deadspace show-for-medium-up" ></div>

             <article>

              <div class="large-6 large-push-6 medium-12 columns">
                <div class="show-for-small-only">
                  <div class="small-12 columns border">
                    <img src="images/logo.gif" alt="155x155" /> <!-- placeholder image -->
                  </div>
                  <a href="login"><input class="small radius button small-12" placeholder="Already have an account?" value="Already have an account?"></a>
                </div> <!-- end button -->
               @include('registration.regform')

             </div>

             </article>

           </div> <!-- end register -->

           <div class="small-12 medium-6 columns login show-for-medium-up" data-equalizer-watch="split">

             <div class="small-12 columns deadspace show-for-medium-up" ></div>

             <article>
               <div class="large-6 medium-12 colums">

                 <div class="row loginprompt" data-equalizer-watch="form">

                 <div class="small-12 columns border">
                   <img src="images/logo.gif" alt="155x155" /> <!-- placeholder image -->
                 </div>

                     <div class="small-12 columns">
                       <p class="text-center">Already<br/>have an account?</p>
                     </div> <!-- end password -->
                     <div class="small-12 columns">
                       <a href="login"><input class="small radius button small-12" placeholder="Log in" value="Log In"></a>
                     </div> <!-- end button -->

                 </div>
               </div> <!-- end row -->
               <div class="medium-6  colums">
               </div>



             </article>

         </div> <!-- end login -->


        </div>

@stop
