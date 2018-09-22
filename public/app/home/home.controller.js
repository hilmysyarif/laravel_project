// create the controller and inject Angular's $scope
Intertec.controller('homeController', function homeController($scope, $http, $location, constants) {
    $scope.active = function($event) {
      angular.forEach(angular.element(document.querySelector('.menu-links')).children(), function(value, key) {
        angular.element(value).removeClass('active');
      });

      var myEl = angular.element( $event.currentTarget.parentNode );
      myEl.addClass('active');
    }

    // $('.owl-carousel').owlCarousel({
    //   navigation: true, pagination: false, rewindNav : false
    // });

    $('#rev_slider_7_1').revolution(
         {
           delay:9000,
           startwidth:1170,
           startheight:500,
           hideThumbs:10
         });

		// retrieve slider listing from API
		$http.get(constants.API_URL + "sliders")
			.success(function(response) {
				$scope.sliders = response.sliders;
			});

    $http.get(constants.API_URL + "about")
			.success(function(response) {
				$scope.about = response.about;
			});

    $http.get(constants.API_URL + "brands")
			.success(function(response) {
				$scope.brands = response.brands;
			});

    $http.get(constants.API_URL + "enterprisebox")
			.success(function(response) {
				$scope.enterprisebox = response.enterprisebox;
			});
    $http.get(constants.API_URL + "news")
			.success(function(response) {
				$scope.news = response.news;
			});
	}).directive('wrapOwlcarousel', function () {
    return {
        restrict: 'E',
        link: function (scope, element, attrs) {
            var options = scope.$eval($(element).attr('data-options'));
            $(element).owlCarousel(options);
        }
    };
});
