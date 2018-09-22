// define the 'Intertec' module
// also include ngRoute for all our routing needs
var Intertec = angular.module('Intertec', ['ngRoute']);

 // define our canstant for the API
Intertec.constant('constants', {
	API_URL: 'http://127.0.0.1:8000/api/'
});

// configure our routes
Intertec.config(function($routeProvider) {
	$routeProvider
		// route for the hamburgers page
		.when('/', {
			templateUrl : 'app/home/home.template.htm',
			controller  : 'homeController'
		})

		.when('/about-us', {
			templateUrl : 'app/about/about.template.htm',
			controller  : 'aboutController'
		})

		.when('/enterprise', {
			templateUrl : 'app/enterprise/enterprise.template.htm',
			controller  : 'enterpriseController'
		})

		.when('/products', {
			templateUrl : 'app/products/products.template.htm',
			controller  : 'productsController'
		})


		// route for a product brand
		.when('/products/:categoryID/brands', {
			templateUrl : 'app/productbrand/productbrand.template.htm',
			controller  : 'productBrandController'
		})

		// route for a lists of product brand
		.when('/products/:categoryID/brands/:brandID', {
			templateUrl : 'app/product/product.template.htm',
			controller  : 'productController'
		})

		// route for a product detail
		.when('/products/:categoryID/brands/:brandID/:productID', {
			templateUrl : 'app/productdetail/productdetail.template.htm',
			controller  : 'productDetailController'
		})

		.when('/contact', {
			templateUrl : 'app/contact/contact.template.htm',
			controller  : 'contactController'
		})


		// default route
		.otherwise({
      redirectTo: '/'
    });
});

//create the controller and inject Angular's $scope
Intertec.controller('productsController', function productsController($scope, $http, $location, constants) {
  // retrieve slider listing from API
  $http.get(constants.API_URL + "product-category")
  .success(function(response) {
  	$scope.category = response.category;
  });
});

// create the controller and inject Angular's $scope
Intertec.controller('productBrandController', function productBrandController($scope, $http, $location, constants) {
	// retrieve slider listing from API
  $http.get(constants.API_URL + "product-category")
  .success(function(response) {
  	$scope.category = response.category;
  });

  $http.get(constants.API_URL + "category/home-router/brands")
  .success(function(response) {
  	$scope.brands = response.brands;
		console.log(response );
  });
});

// create the controller and inject Angular's $scope
Intertec.controller('contactController', function contactController($scope, $http, $location, constants) {
  // retrieve slider listing from API
  $http.get(constants.API_URL + "contact")
  .success(function(response) {
  	$scope.data = response.data;
  });
});

// create the controller and inject Angular's $scope
Intertec.controller('productController', function productController($scope, $http, $location, constants) {

  $http.get(constants.API_URL + "product-category")
  .success(function(response) {
  	$scope.categories = response.category;
  })

  $http.get(constants.API_URL + "brands/2/products")
  .success(function(response) {
  	$scope.products = response.products;
  	$scope.category = response.category;
  	$scope.brand = response.brand;
  });
});
