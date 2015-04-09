
var zipApp = angular.module('zipApp', []);

zipApp.controller('zipListCtrl', function ($scope,$http){

         $http.get('/zips/60015').
		success(function(data){

			$scope.zips=data;



		});



});
