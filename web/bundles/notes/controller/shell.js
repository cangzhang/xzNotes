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

	$scope.saveNote = function() {
	    var requestData = angular.copy($scope.formData);
	    NotesData.createNote(requestData)
            .success(function(data) {
                $mdToast.show('New Note ' + $scope.formData.Title + ' has been created.');
        });
    }
}



angular.module('Shell')
    .factory('NotesData', NotesData);

NotesData.$inject = ['$http', '$mdDialog', '$mdToast'];

function NotesData($http, $mdDialog, $mdToast) {
    var service = {
        getAllNotes	: getAllNotes,
        createNote  : createNote
    };

    return service;

    function getAllNotes() {
        return $http.get('/api/notes');
    }

    function createNote(data) {
        return $http.post('/api/notes/create', data);
    }
}