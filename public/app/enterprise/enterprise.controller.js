// create the controller and inject Angular's $scope
Intertec.controller('enterpriseController', function enterpriseController($scope, $http, $location, constants) {
  // retrieve slider listing from API
  $http.get(constants.API_URL + "enterprise")
  .success(function(response) {
  	$scope.data = response.data;
  });

  $http.get(constants.API_URL + "clients")
  .success(function(response) {
  	$scope.customerLists = response.data;
    console.log(response.data);
  });
});
