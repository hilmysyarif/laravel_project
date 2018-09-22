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
