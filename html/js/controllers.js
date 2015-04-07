
var phonecatApp = angular.module('phonecatApp', []);

phonecatApp.controller('PhoneListCtrl', function ($scope){

	$scope.phones =[
		{'name': 'Nexus 6',
		'snippit': 'Test 1'},
		{'name': 'Nexus 5',
		'snippit': 'Test 2'}

];




});
