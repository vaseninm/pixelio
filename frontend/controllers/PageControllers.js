function PageController($scope, $routeParams, $rootScope) {
    $rootScope.bodyClass = 'one';
    $rootScope.selected = [];
    $rootScope.selected['page_' + $routeParams.pageCanonical] = true;

    $scope.pageCanonical = $routeParams.pageCanonical;
    $scope.templateUrl = 'views/page/'+$routeParams.pageCanonical+'.html';
}