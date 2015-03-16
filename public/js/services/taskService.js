angular.module('taskservice', [])

	.factory('task', function($http) {

		return {
			get : function() {
				return $http.get('api/tasks');
			},
			show : function(id) {
				return $http.get('api/tasks/' + id);
			},
			save : function(taskData) {
				return $http({
					method: 'POST',
					url: 'api/tasks',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(taskData)
				});
			},
			destroy : function(id) {
				return $http.delete('api/tasks/' + id);
			}
		}

	});
