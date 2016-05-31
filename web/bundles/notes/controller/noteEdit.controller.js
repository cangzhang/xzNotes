angular.module('Shell', ['ngMaterial'])
    .config(function ( $interpolateProvider, $mdIconProvider) {
        $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
    })
    .controller('NoteEditController', NoteEditController);

NoteEditController.$inject = ['$scope', '$compile', '$rootScope', '$mdDialog', '$mdToast'];

function NoteEditController($scope, $compile, $rootScope, $mdDialog, $mdToast) {
    $scope.formData = {};
}
