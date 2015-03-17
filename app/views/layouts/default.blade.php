<!doctype html>
<html class="no-js" lang="en">
    <!-- Include HTML head -->
    @include('layouts.head')
<!-- declare our angular app and controller -->
<body class="container" ng-app="taskApp" ng-controller="mainController">


	<!-- Temporary Navigation -->
  @include('layouts.navigation')

  <!-- Alerts -->
  <div class="">
    @if (Session::get('flash_message'))
    <div data-alert class="alert-box  {{ Session::get('flash_message_color') }}">
    <div class="alert" role="alert">
    <span class="fa fa-circle" aria-hidden="true"></span>
    <span class="sr-only">Alert:</span>
        {{ Session::get('flash_message') }}
        <a href="#" class="close">&times;</a>
      </div>
    </div>
      @endif

  <!-- Content -->
  @yield('content')
  <script>$(document).foundation();</script>
</body>
</html>
