angular.module('Shell', ['ngMaterial'])
    .config(function ( $interpolateProvider, $mdIconProvider) {
        $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
        $mdIconProvider.defaultIconSet('bundles/notes/img/mdi.svg');
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