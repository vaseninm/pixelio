function FeedbackController($scope, $routeParams, $rootScope, $http, $location, $route, CONFIG) {
    $rootScope.bodyClass = 'one';
    $rootScope.animate = 'animate-view';
    $rootScope.setActiveMenu('feedback');

    $scope.isFirst = true;
    $scope.isLast = true;

    $scope.page = $routeParams.page ? parseInt($routeParams.page) : 1;
    getFeedBack($scope.page);
    $scope.prevPage = function (event) {
        $scope.page = $scope.page - 1;
        $location.search({page: $scope.page});
    }
    $scope.nextPage = function (event) {
        $scope.page = $scope.page + 1;
        $location.search({page: $scope.page});
    }

    $scope.newFeedback = {};
    $scope.submitNewFeedback = function () {
        $http.post(CONFIG.API_URL + 'feedback/add', $scope.newFeedback).success(function (data) {
            if (data.params.result) {
                $scope.isOpenDialog = false;
                $route.reload();
            } else {
                alert('Ошибка на сервере');
            }
        });
    }

    $scope.switchDialog = function ($event) {
        $event.preventDefault();
        $scope.animate="animate-show";
        $scope.isOpenDialog = !$scope.isOpenDialog;
    }


    function getFeedBack(page) {
        $http.post(CONFIG.API_URL + 'feedback/list', {
            page: page
        }).success(function (data) {
                $scope.items = data.params.items;
                $scope.pages = data.params.pages;
                $scope.isFirst = (page <= 1);
                $scope.isLast = (page >= $scope.pages);
            });
    }
}