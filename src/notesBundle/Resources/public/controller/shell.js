angular.module('Shell', [
    'ngMaterial'
]).config(function ( $interpolateProvider) {
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});

angular.module('Shell')
    .controller('ShellController', ShellController);

ShellController.$inject = ['$scope', 'NotesData', '$mdDialog', '$mdToast'];

function ShellController($scope, NotesData, $mdDialog, $mdToast, $mdMedia) {
    NotesData.getAllNotes()
        .success(function (data) {
            $scope.allNotes = data;
        });
}

angular.module('Shell')
    .controller('NoteEditController', NoteEditController);

NoteEditController.$inject = ['$scope', 'NotesData','$compile', '$rootScope', '$mdDialog', '$mdToast'];

function NoteEditController($scope, NotesData, $compile, $rootScope, $mdDialog, $mdToast) {
    $scope.formData = {};
}



angular.module('Shell')
    .factory('NotesData', NotesData);

NotesData.$inject = ['$http', '$mdDialog', '$mdToast'];

function NotesData($http, $mdDialog, $mdToast) {
    var service = {
        getAllNotes	: getAllNotes
    };

    return service;

    function getAllNotes() {
        return $http.get('/api/notes');
    }
}