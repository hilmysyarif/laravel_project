//create the controller and inject Angular's $scope
Intertec.controller('productsController', function productsController($scope, $http, $location, constants) {
  // retrieve slider listing from API
  console.log(constants.API_URL + "product-category");
  $http.get(constants.API_URL + "product-category")
  .success(function(response) {
  	$scope.category = response.category;
  });
});
