// create the controller and inject Angular's $scope
Intertec.controller('productBrandController', function productBrandController($scope, $http, $location, constants) {
  // retrieve slider listing from API
  $http.get(constants.API_URL + "product/:productID")
  .success(function(response) {
  	$scope.data = response.data;
  });
});
