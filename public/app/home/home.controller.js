// create the controller and inject Angular's $scope
    Intertec.controller('homeController', function homeController($scope, $http, $location, constants) {

    $scope.active = function($event) {
      angular.forEach(angular.element(document.querySelector('.menu-links')).children(), function(value, key) {
        angular.element(value).removeClass('active');
      });

      var myEl = angular.element( $event.currentTarget.parentNode );
      myEl.addClass('active');
    }

		// retrieve slider listing from API
		$http.get(constants.API_URL + "sliders")
			.success(function(response) {
				$scope.data = response.data;
			});

    $http.get(constants.API_URL + "about")
			.success(function(response) {
				$scope.data = response.data;
			});


		// adding a burger
		$scope.addBurger = function() {

			//add the new hamburger to our listing
			$http.post(constants.API_URL + "hamburgers", $scope.hamburger)
				.success(function(response) {

					console.log(response);

					// close the modal
					$scope.closeModal();

					// load the page for our newly created burger
					$scope.loadBurgerPage(response.id);


				})
				.error(function(response, status, headers, config) {
					// alert and log the response
					alert('Failed to add the burger: [Server response: '+status + '] - ' +response.name[0]);
					console.log(response);

				});

		}

		// load the page for an individual burger
		$scope.loadBurgerPage = function(id){
			 $location.path("hamburger/"+id);
		}

		// display the modal form
		$scope.showModal = function() {
			$('#addBurgerModal').modal('show');
		}

		// display the modal form
		$scope.closeModal = function() {
			$('#addBurgerModal').modal('hide');
		}
	});
