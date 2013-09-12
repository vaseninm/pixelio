function WorksController($scope, $routeParams, $rootScope, $http, $location) {
    $rootScope.bodyClass = 'one';
    $rootScope.animate = 'animate-view';
    $rootScope.setActiveMenu('main');


    $scope.currentTag = $routeParams.tag ? $routeParams.tag : 0;
    $scope.page = $routeParams.page ? parseInt($routeParams.page) : 1;

    getItems($scope.page);
    $scope.prevPage = function (event) {
        $scope.page = $scope.page - 1;
        getItems($scope.page);
        $location.search({page: $scope.page});
    }
    $scope.nextPage = function (event) {
        var page = $scope.page + 1;
        getItems($scope.page);
        $location.search({page: $scope.page});
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
                $scope.isFirst = (page <= 1);
                $scope.isLast = (page >= $scope.pages);
            });
    }

}

function WorkController($scope, $routeParams, $rootScope, $http, $location) {
    $rootScope.bodyClass = 'two';
    $rootScope.animate = 'animate-view';
    $rootScope.setActiveMenu('main');


    $scope.workId = $routeParams.work;

    $http.post('http://api.pixelio.tld/portfolio/work', {
        'work': $scope.workId
    }).success(function (data) {
            $scope.work = data.params.work;
            $scope.pages = data.params.pages;
            $scope.tags = data.params.tags;
            $scope.next = data.params.next;
            $scope.prev = data.params.prev;

            $scope.first = $scope.pages[0];
            $scope.last = $scope.pages[$scope.pages.length - 1];
            $scope.current = $scope.first;
            if ($routeParams.page) {
                for (var page in $scope.pages) {
                    if ($scope.pages[page].id == $routeParams.page) {
                        $scope.current = $scope.pages[page];
                    }
                }
            }
        });

    $scope.nextPage = function ($event) {
        $event.preventDefault();
        var pageId;
        for (var page in $scope.pages) {
            if ($scope.pages[page] == $scope.current) {
//                $scope.current = $scope.pages[parseInt(page) + 1];
                pageId = $scope.pages[parseInt(page) + 1].id;
                break;
            }
        }
        $location.search({page: pageId});
    }

    $scope.prevPage = function ($event) {
        $event.preventDefault();
        var pageId;
        for (var page in $scope.pages) {
            if ($scope.pages[page] == $scope.current) {
//                $scope.current = $scope.pages[parseInt(page) - 1];
                pageId = $scope.pages[parseInt(page) - 1].id;
                break;
            }
        }
        $location.search({page: pageId});
    }

    $scope.setPage = function (pageId, $event) {
        if ($event) $event.preventDefault();
//        for (var page in $scope.pages) {
//            if ($scope.pages[page].id == pageId) {
//                $scope.current = $scope.pages[page];
//                break;
//            }
//        }
        $location.search({page: pageId});
    }
}

function CostController($scope, $routeParams, $rootScope, $http) {
    $rootScope.bodyClass = 'one';
    $rootScope.animate = 'animate-view';
    $rootScope.setActiveMenu('cost');


    $http.post('http://api.pixelio.tld/portfolio/cost', {}).success(function (data) {
        $scope.tags = data.params.tags;
    });
}