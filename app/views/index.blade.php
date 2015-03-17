@extends('layouts.default')

@section('content')


<div class="small-10 columns small-centered container-card">

		<!-- LOADING ICON -->
		<!-- show loading icon if the loading variable is set to true -->
		<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>


		<div class="row" data-equalizer>
			<div class="hide-for-small-only medium-2 columns more text-centered" data-equalizer-watch>
				<p><strong>#</strong></p>
			</div><!--end task-number (hides on phone screen) -->
			<div class="small-10 medium-8 columns more text-left" data-equalizer-watch>
				<p><strong>Title</strong></p>
			</div> <!-- end task body -->
			<div class="small-2 medium-2 columns more text-centered" data-equalizer-watch>
				<p><strong>Status</strong></p>
			</div> <!-- end task actions -->
		</div>
		<!-- FOUNDATION TASK LISTING -->
		<div class="task row" data-equalizer ng-hide="loading" ng-repeat="task in tasks">
			<div class="panel hide-for-small-only medium-2 columns more text-centered" data-equalizer-watch>
				<p>@{{ task.id }}</p>
			</div><!--end task-number (hides on phone screen) -->
			<div class="panel small-10 medium-8 columns more text-left" data-equalizer-watch>
				<p>@{{ task.task }}</p>
			</div> <!-- end task body -->
			<div class="panel small-2 medium-2 columns more text-centered" data-equalizer-watch>
				<a href="#" ng-click="deletetask(task.id)" class="task-muted"><input type="checkbox" class="checkbox"></a>
			</div> <!-- end task actions -->
		</div>

		<div class="taskinput" ng-show="addtask">
			<div class="row">
				<div class="large-12 columns">
				<form ng-submit="submittask()"> <!-- ng-submit will disable the default form action and use our function -->
			      <div class="row collapse">
							<div class="small-10 columns">
							  <input type="text" name="task" ng-model="taskData.task" placeholder="Whats the next adventure?">
							</div>
							<span class="small-2 columns">
							  <button type="submit" type="button" class="button success postfix">Go!</button>
							</span>
							</div>
						</form>
					</div>
				</div>
		</div>

	<div class="row">
	  <div class="small-12 columns">
			<ul class="accordion" data-accordion>
			  <li class="accordion-navigation">
					<div id="addtask" class="content">
						<form ng-submit="submittask()"> <!-- ng-submit will disable the default form action and use our function -->
								<div class="row collapse">
									<div class="small-10 columns">
										<input type="text" name="task" ng-model="taskData.task" placeholder="Whats your next adventure?">
									</div>
									<span class="small-2 columns">
										<button type="submit" type="button" class="button success postfix">Go!</button>
									</span>
									</div>
								</form>
					</div>
			    <a href="#addtask" class="small-4 small-centered columns text-center">Add Task</a>
			  </li>
			</ul>
	  </div>
	</div>
</div>
@stop
