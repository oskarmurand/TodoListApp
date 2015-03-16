@extends('layouts.default')

@section('content')

	<div class="page-header">
		<h2>Laravel and Angular TodoApp</h2>
		{{ Auth::check() ? "Welcome, " . Auth::user()->givenname : "Unable to confirm login" }}
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
							<div class="panel-body">@{{ task.id }}</div>
					</div>
			</div>
			<div class="col-md-8">
					<div class="panel panel-default">
							<div class="panel-body">@{{ task.task }}</div>
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

@stop
