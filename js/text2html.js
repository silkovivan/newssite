    angular.module("textAngularTest", ['textAngular']);
	function wysiwygeditor($scope) {
		$scope.orightml = 'Введите текст';
		$scope.htmlcontent = $scope.orightml;
		$scope.disabled = false;
	};
