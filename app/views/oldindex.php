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
	<!--<pre>
	{{ // taskData }}
</pre>-->
	<!-- PAGE TITLE -->
	<div class="page-header">
		<h2>Laravel and Angular TodoApp</h2>
		<h4>Todo list</h4>
	</div>


	<!-- LOADING ICON -->
	<!-- show loading icon if the loading variable is set to true -->
	<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

	<!-- THE TASKS -->
	<!-- hide these tasks if the loading variable is true -->
	<div class="task row" ng-hide="loading" ng-repeat="task in tasks">

			<div class="col-md-2">
					<div class="panel panel-default">
							<div class="panel-body">{{ task.id }}</div>
					</div>
			</div>
			<div class="col-md-8">
					<div class="panel panel-default">
							<div class="panel-body">{{ task.task }}</div>
					</div>
			</div>
			<div class="col-md-2">
					<div class="panel panel-default">
							<div class="panel-body"><a href="#" ng-click="deletetask(task.id)" class="task-muted">Delete</a></div>
					</div>
			</div>
	</div>

	<!-- NEW TASK FORM -->
	<div class="addtasks" ng-app >
		<button type="button" class="btn btn-success" ng-click="showDetails = ! showDetails;">Add a Task</button>
		<button type="submit" class="btn btn-danger" type="button" onClick="location.href='logout'">Log Out</button>
			<div class="taskinput" ng-class="{ 'hidden': ! showDetails }">
				<form ng-submit="submittask()"> <!-- ng-submit will disable the default form action and use our function -->
					<div class="form-group">
						<div class="col-md-12">
							<div class="input-group">
								<input type="task" class="form-control input-lg" name="task" ng-model="taskData.task" placeholder="What shall we do today?">
								<span class="input-group-btn">
								<button type="submit" class="btn btn-primary btn-lg" type="button">Submit</button>
								</span> <!-- /submit button -->
							</div> <!-- /input-group -->
						</div>
					</div>
				</form>
			</div>
	</div>
</div>
</body>
</html>
