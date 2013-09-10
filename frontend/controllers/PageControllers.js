function PageController($scope, $routeParams, $rootScope) {
    $rootScope.bodyClass = 'one';
    $rootScope.setActiveMenu('page_' + $routeParams.pageCanonical);

    $scope.templateUrl = 'views/page/'+$routeParams.pageCanonical+'.html';
}