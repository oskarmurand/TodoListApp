@extends('layouts.default')

@section('content')


<div class="small-12 medium-10 large-8 columns small-centered container-card">

<h5 class="text-center"><i class="fa fa-tasks"></i> My Tasks</h5>
<hr />
		<!-- column names -->
		<div class="row" data-equalizer>
			<div class="hide-for-small-only medium-2 columns  text-center" data-equalizer-watch>
				<p><strong>#</strong></p>
			</div><!--end task-number (hides on phone screen) -->
			<div class="small-10 medium-8 columns text-left" data-equalizer-watch>
				<p><strong>Title</strong></p>
			</div> <!-- end task body -->
			<div class="small-2 medium-2 columns text-center" data-equalizer-watch>
				<p><strong>Status</strong></p>
			</div> <!-- end task actions -->
		</div>


		<!-- LOADING ICON -->
		<!-- show loading icon if the loading variable is set to true -->
		<p class="text-center" ng-show="loading"><span class="fa fa-spinner fa-pulse fa-5x"></span></p>

		<!-- FOUNDATION TASK LISTING -->
		<div class="task row" data-equalizer ng-hide="loading" ng-repeat="task in tasks">
			<div class="panel hide-for-small-only medium-2 columns more text-center" data-equalizer-watch>
				<a href=# data-reveal-id="editModal"><p>@{{ task.id }}</p></a>
			</div><!--end task-number (hides on phone screen) -->
			<div class="panel small-10 medium-8 columns more text-left" data-equalizer-watch>
				<p>@{{ task.task }}</p>
			</div> <!-- end task body -->
			<div class="panel small-2 medium-2 columns more text-center" data-equalizer-watch>
				<input ng-click="deletetask(task.id)" id='@{{ task.id }}' type='checkbox' /><label for='@{{ task.id }}'><span></span></label> <!-- end checkbox -->
			</div> <!-- end task actions -->
		</div>

<!-- add task -->
<div class="row small-12 medium-6 large-3 small-centered">
	<a href="#" data-reveal-id="taskModal" class="button radius columns"><i class="fa fa-plus"></i> Add a new task</a>
</div> <!-- end task add button -->

	<div id="taskModal" class="reveal-modal medium" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
	  <h5 id="modalTitle" class="text-center">Add a new task</h5>
		<div class="row">
			<form name="tasksubmitform" ng-submit="submittask()" novalidate> <!-- ng-submit will disable the default form action and use our function -->
				<div class="small-12 columns" ng-class="{ 'has-error' : tasksubmitform.task.$invalid && !tasksubmitform.task.$pristine }">
					<input type="text" name="task" ng-model="taskData.task" placeholder="Title" required>
					<small class="error" ng-show="tasksubmitform.task.$invalid  && !tasksubmitform.task.$pristine" class="help-block">A task title is required</small>
				</div>
				<div class="small-12 columns">
					<textarea rows="5" type="text" name="description" ng-model="taskData.description" placeholder="Description"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="small-6 columns">
					<button type="submit" type="button" ng-disabled="tasksubmitform.$invalid" class="close button radius small-12">Add a new task</button>
				</div>
			</form>
			<div class="small-6 columns">
				<button type="button"class="button close radius secondary small-12">Cancel</button>
			</div>
		</div>
	</div> <!-- end taskModal -->

	<!-- edit task / mostly for demo purposes -->
	<div id="editModal" class="reveal-modal medium" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
	<h5 id="modalTitle" class="text-center">Edit task</h5>
	<div class="row">
		<form name="taskupdateform" novalidate> <!-- ng-submit will disable the default form action and use our function -->
			<div class="small-12 columns">
				<input type="text" name="task" placeholder="New title" required>
			</div>
			<div class="small-12 columns">
				<textarea rows="5" type="text" name="description" placeholder="New description"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="small-6 columns">
				<button type="submit" type="button" disabled class="close button radius small-12">Edit</button>
			</div>
		</form>
		<div class="small-6 columns">
			<button type="button"class="button close radius secondary small-12">Cancel</button>
		</div>
	</div>
</div> <!-- end editModal -->

</div>

@stop
