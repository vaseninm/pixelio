function WorksController($scope, $routeParams, $rootScope, $http, $location) {
    $rootScope.bodyClass = 'one';
    $rootScope.selected = [];
    $rootScope.selected.main = true;

    $scope.currentTag = $routeParams.tag ? $routeParams.tag : 0;
    $scope.page = $routeParams.page ? $routeParams.page : 1;

    getItems($scope.page);
    $scope.prevPage = function (event) {
        var page = $scope.page - 1;
        getItems(page);
        $location.search({page: page}).replace();
    }
    $scope.nextPage = function (event) {
        var page = $scope.page + 1;
        getItems(page);
        $location.search({page: page}).replace();
    }

    function getItems(page) {
        $http.post('http://api.pixelio.tld/portfolio/works', {
            page: page,
            tag: $scope.currentTag
        }).success(function (data) {
                $scope.works = data.params.works;
                $scope.tags = data.params.tags;
                $scope.pages = data.params.pages;
                $scope.countWorks = data.params.countWorks;
                if (page <= 1) $scope.isFirst = true;
                if (page >= $scope.pages) $scope.isLast = true;
            });
    }

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