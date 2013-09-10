function FeedbackController($scope, $routeParams, $rootScope, $http, $location) {
    $rootScope.bodyClass = 'one';
    $rootScope.selected = [];
    $rootScope.selected.feedback = true;

    $scope.page = $routeParams.page ? $routeParams.page : 1;
    getFeedBack($scope.page);
    $scope.prevPage = function (event) {
        $scope.page = $scope.page - 1;
        getFeedBack($scope.page);
        $location.search({page: $scope.page});
    }
    $scope.nextPage = function (event) {
        $scope.page = $scope.page + 1;
        getFeedBack($scope.page);
        $location.search({page: $scope.page});
    }


    $scope.newFeedback = {};
    $scope.submitNewFeedback = function(){
        $http.post('http://api.pixelio.tld/feedback/add', $scope.newFeedback).success(function (data) {
                if (data.params.result) {
                    $scope.closeDialog();
                    getFeedBack($scope.page)
                } else {
                    alert('Ошибка на сервере');
                }
            });
    }

    $scope.openDialog = function ($event) {
        if ($event) $event.preventDefault();
        $('.open').hide();
        $('.close').show();
        $('.popUp').show();
    }
    $scope.closeDialog = function ($event) {
        if ($event) $event.preventDefault();
        $('.open').show();
        $('.close').hide();
        $('.popUp').hide();
    }


    function getFeedBack(page) {
        $http.post('http://api.pixelio.tld/feedback/list', {
            page: page
        }).success(function (data) {
                $scope.items = data.params.items;
                $scope.pages = data.params.pages;
                $scope.isFirst = (page <= 1);
                $scope.isLast = (page >= $scope.pages);
            });
    }
}