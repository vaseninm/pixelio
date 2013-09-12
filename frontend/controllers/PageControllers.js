function PageController($scope, $routeParams, $rootScope) {
    $rootScope.bodyClass = 'one';
    $rootScope.animate = 'animate-view';
    $rootScope.setActiveMenu('page_' + $routeParams.pageCanonical);

    $scope.templateUrl = 'views/page/'+$routeParams.pageCanonical+'.html';
}