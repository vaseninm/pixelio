function FeedbackController($scope, $routeParams, $rootScope) {
    $rootScope.bodyClass = 'one';
    $rootScope.selected = [];
    $rootScope.selected.feedback = true;

    $scope.page = $routeParams.page;
}