<!doctype html>
<html class="no-js" lang="en">
    <!-- Include HTML head -->
    @include('layouts.head')
<!-- declare our angular app and controller -->
<body class="container" ng-app="taskApp" ng-controller="mainController">
  <div id="wrapper">
  @if (Auth::guest())
  <!-- Display nothing -->
  @else
	<!-- Logged in Navigation -->
  @include('layouts.navigation')
  @endif


  <!-- Content -->
  @yield('content')
</div>


</body>
  <script>
  $(document).foundation();

  $("button.close").click(function(){
    $('.close.button.radius.small-12').foundation('reveal', 'close');
  });

  </script>


</html>
