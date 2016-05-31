angular.module('Shell', ['ngMaterial'])
    .config(function ( $interpolateProvider, $mdIconProvider) {
        $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
    })
    .controller('ShellController', ShellController);

ShellController.$inject = ['$scope', '$http'];

function ShellController($scope, $http) {

    $http.get('/api/notes')
        .success(function(data, status) {
            console.log(data);
            $scope.allNotes = data;
        });
}