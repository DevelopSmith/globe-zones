var globezones = angular.module('globezones', ['ngRoute', 'ngResource']);

// SERVICES
globezones.service('cityService', function(){
	//var self = this;
	this.city = 'Cairo';
});

// ROUTES
globezones.config(function($routeProvider){
    $routeProvider.when('/', {
        templateUrl: 'views/home.html',
        controller: 'homeControler'
    }).when('/forecast', {
        templateUrl: 'views/forecast.html',
        controller: 'forecastControler'
    }).when('/forecast/:days', {
        templateUrl: 'views/forecast.html',
        controller: 'forecastControler'
    });
});

// CONTROLLERS
globezones.controller('homeControler', ['$scope', '$http', '$location', '$routeParams', 'cityService', function($scope, $http, $location, $routeParams, cityService){
	$scope.city = cityService.city;
	
    $scope.$watch('city', function(){
		cityService.city = $scope.city;
	});
	
	$scope.submit = function(){
		$location.path('/forecast');
	}
}]);
	
globezones.controller('forecastControler', ['$scope', '$resource', '$routeParams', 'cityService', function($scope, $resource, $routeParams, cityService){
	$scope.daysArr = ['2', '7', '10', '14'];
	
	$scope.city = cityService.city;
	$scope.days = $routeParams.days || 2;
	$scope.daysText = 'for ' + $scope.days + ' day(s)' || 2;

	$scope.weatherAPI = $resource(
		"http://api.openweathermap.org/data/2.5/forecast/daily",
		{callback: 'JSON_CALLBACK'},
		{get: {method: 'JSONP'}}
	);
	$scope.weatherResult = $scope.weatherAPI.get({q: $scope.city, cnt: $scope.days});
	
	$scope.convertToFeh = function(degK){
		return Math.round((1.8 * (degK - 273)) + 32);
	}
	$scope.convertToCel = function(degK){
		return Math.round(degK - 273.15);
	}
	
	$scope.convertToDate = function(dt){
		return new Date(dt * 1000);
	}
}]);

// DIRECTIVES
globezones.directive('weatherPanel', function(){
	return {
		restrict: 'AECM',
		templateUrl: 'directives/weatherPanel.html',
		replace: true,
		scope: {
			weatherDay: '=',
			convertToStandard: '&',
			convertToDate: '&',
			dateFormat: '@'
		}
	}
});