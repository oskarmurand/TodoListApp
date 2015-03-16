<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel Angular TodoApp</title>

	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
	<style>
	/* Placeholder undil proper stylesheet will be implemented */
		body 		{ padding-top:30px; }
		form 		{ padding-bottom:20px; }
		.task 	{ padding-bottom:20px; }
		.taskinput { max-height: 100px; -webkit-transition: height 1s linear; overflow: hidden; }
		.taskinput.hidden { max-height: 0; transition: 2.8s;}
		.addtasks { padding-bottom:6em; }
		.ng-invalid { background-color:red;}
		.ng-valid { background-color:green;}

	</style>

	<!-- JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> <!-- load bootstrap -->

	<!-- ANGULAR -->
	<!-- all angular resources will be loaded from the /public folder -->
		<script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
		<script src="js/services/taskservice.js"></script> <!-- load our service -->
		<script src="js/angular-smooth-scroll.min.js"></script> <!-- load our scrolling -->
		<script src="js/app.js"></script> <!-- load our application -->

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="taskApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">
  @if (Session::get('flash_message'))
  <div class="alert {{ Session::get('flash_message_color') }}" role="alert">
  <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
  <span class="sr-only">Alert:</span>
      {{ Session::get('flash_message') }}
    </div>
  @endif

	<!--Temporary navigation-->
	<div class="btn-group btn-group-justified" role="group" aria-label="...">
	<a type="button" class="btn btn-primary" href="index">Home</a>
	@if (Auth::guest())
	<a type="button" class="btn btn-default" href="register">Register</a>
	<a type="button" class="btn btn-default" href="login">Login</a>
	@else
	<a type="button" class="btn btn-danger" href="logout">Logout</a>
	@endif
</div>


  @yield('content')

</body>
</html>
