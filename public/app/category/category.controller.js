// create the controller and inject Angular's $scope
Intertec.controller('categoryController', function categoryController($scope, $http, $location, constants) {
  // retrieve slider listing from API
  $http.get(constants.API_URL + "about")
  .success(function(response) {
  	$scope.data = response.data;
  });
});
