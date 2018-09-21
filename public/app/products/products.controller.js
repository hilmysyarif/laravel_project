// create the controller and inject Angular's $scope
Intertec.controller('productsController', function productsController($scope, $http, $location, constants) {
  // retrieve slider listing from API
  $http.get(constants.API_URL + "product-category")
  .success(function(response) {
  	$scope.data = response.data;
    console.log($scope.data);
  });
});
