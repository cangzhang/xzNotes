angular.module('Shell', [
	'ngMaterial'
]).config(function ($interpolateProvider) {
	$interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});

angular.module('Shell')
	.config(config);
function config($mdIconProvider) {
	$mdIconProvider
		.iconSet('actions', "/bundles/notes/img/icons/actions/defs/svg/sprite.defs.svg")
		.iconSet('alert', "/bundles/notes/img/icons/alert/defs/svg/sprite.defs.svg")
		.iconSet('av', "/bundles/notes/img/icons/av/defs/svg/sprite.defs.svg")
		.iconSet('communication', "/bundles/notes/img/icons/communication/defs/svg/sprite.defs.svg")
		.iconSet('content', "/bundles/notes/img/icons/content/defs/svg/sprite.defs.svg")
		.iconSet('device', "/bundles/notes/img/icons/device/defs/svg/sprite.defs.svg")
		.iconSet('editor', "/bundles/notes/img/icons/editor/defs/svg/sprite.defs.svg")
		.iconSet('file', "/bundles/notes/img/icons/file/defs/svg/sprite.defs.svg")
		.iconSet('hardware', "/bundles/notes/img/icons/hardware/defs/svg/sprite.defs.svg")
		.iconSet('image', "/bundles/notes/img/icons/image/defs/svg/sprite.defs.svg")
		.iconSet('maps', "/bundles/notes/img/icons/maps/defs/svg/sprite.defs.svg")
		.iconSet('navigation', "/bundles/notes/img/icons/navigation/defs/svg/sprite.defs.svg")
		.iconSet('notification', "/bundles/notes/img/icons/notification/defs/svg/sprite.defs.svg")
		.iconSet('social', "/bundles/notes/img/icons/social/defs/svg/sprite.defs.svg")
		.iconSet('toggle', "/bundles/notes/img/icons/toggle/defs/svg/sprite.defs.svg");
}

angular.module('Shell')
	.controller('ShellController', ShellController);

ShellController.$inject = ['$scope', 'NotesData', '$mdDialog', '$mdToast', '$mdSidenav'];

function ShellController($scope, NotesData, $mdDialog, $mdToast, $mdSidenav) {
	var shell = this;
	
	shell.toggleSideBar = buildToggler('left');
	
	function buildToggler(componentId) {
		return function () {
			$mdSidenav(componentId).toggle();
		}
	}
	
}

angular.module('Shell')
	.controller('LoginController', LoginController);

LoginController.$inject = ['$scope', 'NotesData', '$mdDialog', '$mdToast'];

function LoginController($scope, NotesData, $mdDialog, $mdToast) {
	var login = this;
	
	login.confirm = function () {
		login.form._csrf_token = $('.csrf_token').val();
		login.form.addr        = $('#loginForm').attr('action');
		console.log(login.form);
		NotesData.login(login.form)
			.success(function () {
				// window.location = '/note';
			}).error(function () {
			
		});
	};
}

angular.module('Shell')
	.controller('NoteListController', NoteListController);

NoteListController.$inject = ['$scope', 'NotesData', '$mdDialog', '$mdToast'];

function NoteListController($scope, NotesData, $mdDialog, $mdToast) {
	var list = this;
	
	list.removeNote = function (note) {
		NotesData.removeNote(note.id)
			.success(function (data) {
				$mdToast.show(
					$mdToast.simple()
						.parent(document.querySelectorAll('#editNote'))
						.position('bottom left')
						.textContent('Note \'' + note.title + '\' has been deleted.')
						.hideDelay(1500))
					.then(function () {
						var index = list.allNotes.indexOf(note);
						list.allNotes.splice(index, 1);
					});
			});
	};
	
	NotesData.getAllNotes()
		.success(function (data) {
			list.allNotes = data;
		});
}

angular.module('Shell')
	.controller('NoteEditController', NoteEditController);

NoteEditController.$inject = ['$scope', 'NotesData', '$compile', '$rootScope', '$mdDialog', '$mdToast'];

function NoteEditController($scope, NotesData, $compile, $rootScope, $mdDialog, $mdToast) {
	$scope.formData = {};
	$scope.noteId   = parseInt(window.location.href.split('/')[4]);
	if ($scope.noteId) {
		NotesData.getNote($scope.noteId)
			.success(function (data) {
				$scope.formData = angular.copy(data);
			});
	}
	$scope.createNote = function () {
		NotesData.createNote($scope.formData)
			.success(function () {
				$mdToast.show(
					$mdToast.simple()
						.parent(document.querySelectorAll('#editNote'))
						.position('top right')
						.textContent('Note \'' + $scope.formData.title + '\' has been created.')
						.hideDelay(1500))
					.then(function () {
						window.location = '/note';
					});
			});
	};
	$scope.updateNote = function () {
		var updateData = angular.copy($scope.formData);
		NotesData.updateNote($scope.noteId, updateData)
			.success(function (data) {
				$scope.formData = angular.copy(updateData);
				$mdToast.show(
					$mdToast.simple()
						.parent(document.querySelectorAll('#editNote'))
						.position('top right')
						.textContent('Note \'' + $scope.formData.title + '\' has been updated.')
						.hideDelay(1500))
					.then(function () {
						window.location = '/note';
					});
			});
	};
}


angular.module('Shell')
	.factory('NotesData', NotesData);

NotesData.$inject = ['$http'];

function NotesData($http) {
	return {
		getAllNotes: getAllNotes,
		createNote : createNote,
		getNote    : getNote,
		updateNote : updateNote,
		removeNote : removeNote,
		login      : login
	};
	
	function login(data) {
		return $http.post('/login_check', data);
	}
	
	function removeNote(noteId) {
		return $http({
			method: "delete",
			url   : '/api/notes/' + noteId + '/delete'
		});
	}
	
	function getAllNotes() {
		return $http.get('/api/notes');
	}
	
	function createNote(data) {
		return $http.post('/api/notes/create', data);
	}
	
	function getNote(noteId) {
		return $http.get('/api/notes/' + noteId + '/content');
	}
	
	function updateNote(noteId, data) {
		return $http.put('/api/notes/' + noteId + '/edit', data);
	}
}