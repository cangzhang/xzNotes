angular.module('Shell',['ngMaterial'])
    .config(function($interpolateProvider){
        $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
})
    .controller('ShellController', ShellController);

ShellController.$inject = ['$scope'];

function ShellController( $scope ) {
    $scope.currentTitle= "test";
}