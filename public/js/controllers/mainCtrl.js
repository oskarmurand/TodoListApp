angular.module('mainCtrl', [])

	.controller('mainController', function($scope, $http, task) {
		// object to hold all the data for the new task form
		$scope.taskData = {};

		// loading variable to show the spinning loading icon
		$scope.loading = true;

		// get all the tasks first and bind it to the $scope.tasks object
		task.get()
			.success(function(data) {
				$scope.tasks = data;
				$scope.loading = false;
			});


		// function to handle submitting the form
		$scope.submittask = function() {
			$scope.loading = true;

			// save the task. pass in task data from the form
			task.save($scope.taskData)
				.success(function(data) {
					$scope.taskData = {};
					// if successful, we'll need to refresh the task list
					task.get()
						.success(function(getData) {
							$scope.tasks = getData;
							$scope.loading = false;
						});

				})
				.error(function(data) {
					console.log(data);
				});
		};

		// function to handle deleting a task
		$scope.deletetask = function(id) {
			$scope.loading = true;

			task.destroy(id)
				.success(function(data) {

					// if successful, we'll need to refresh the task list
					task.get()
						.success(function(getData) {
							$scope.tasks = getData;
							$scope.loading = false;
						});

				});
		};


	});
