var model = 'http://plnkr.co/img/plunker.png';
var todoApp = angular.module("generatorApp", []);
todoApp.controller("PaginationCtrl", PaginationController);

PaginationController.$injec = ['$scope', '$http'];

function PaginationController($scope, $http) {

    $scope.currentPage = 1;

    $scope.NextPage = function () {
        $scope.currentPage++;
        if ($scope.currentPage == 5) {
            $scope.currentPage = 1;
        }
    };

    $scope.BackPage = function () {
        $scope.currentPage--;
    }
}
