// create the controller and inject Angular's $scope
Intertec.controller('contactController', function contactController($scope, $http, $location, constants) {
  // retrieve slider listing from API
  $http.get(constants.API_URL + "contact")
  .success(function(response) {
  	$scope.data = response.data;
  });
});
