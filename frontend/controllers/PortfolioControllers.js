function WorksController($scope, $routeParams, $rootScope) {
    $rootScope.bodyClass = 'one';
    $rootScope.selected = [];
    $rootScope.selected.main = true;

    $scope.page = $routeParams.page;
    $scope.tag = $routeParams.tag;
}

function WorkController($scope, $routeParams, $rootScope) {
    $rootScope.bodyClass = 'two';
    $rootScope.selected = [];
    $rootScope.selected.main = true;

    $scope.phoneId = $routeParams.phoneId;
}

function CostController($scope, $routeParams, $rootScope, $http) {
    $rootScope.bodyClass = 'one';
    $rootScope.selected = [];
    $rootScope.selected.cost = true;

    $http.post('http://api.pixelio.tld/portfolio/cost', {}).success(function(data) {
        $scope.tags = data.params.tags;
    });
}