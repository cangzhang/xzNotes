angular.module('shell',['ngMaterial'])
    .controller('ShellController', ShellController);

function ShellController( $scope ) {
    $scope.test= '';
}