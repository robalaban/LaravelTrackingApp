angular.module('trackingApp', [])

// Set Angluars headers to identify AjaxCall
.config(['$httpProvider', function($httpProvider) {
      $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
}])

.controller('Tracking', ['$scope', '$http', '$location', function ($scope, $http, $location) {

  $scope.package = {};
  $scope.results = [];

  $scope.search = function () {

    $http({
      method: 'GET',
      url: $location.path() + '/api/package/' + $scope.package.code
    }).then(function successCallback(response) {

        // console.log(response);

        // Getting the arrivalDate from DB
        $scope.results = response.data.arrivalDate;

        // console.log($scope.results); 

      }, function errorCallback(response) {

      });
  }
}]);