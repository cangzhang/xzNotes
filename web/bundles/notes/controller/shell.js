angular.module('Shell', ['ngMaterial'])
    .config(function ( $interpolateProvider, $mdIconProvider) {
        $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
    })
    .controller('ShellController', ShellController);

ShellController$inject = ['$scope', '$http', '$compile', '$rootScope', '$mdDialog', '$mdToast'];

function ShellController($scope, $http, $compile, $rootScope, $mdDialog, $mdToast) {
    $http.get('/api/notes')
        .success(function(data, status) {
            $scope.allNotes = data;
        });
}