// create the controller and inject Angular's $scope
Intertec.controller('aboutController', function aboutController($scope, $http, $location, constants) {
  // retrieve slider listing from API
  $http.get(constants.API_URL + "about-us")
  .success(function(response) {
  	$scope.data = response.data;
  });
});
