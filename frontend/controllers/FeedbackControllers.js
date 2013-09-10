function FeedbackController($scope, $routeParams, $rootScope, $http, $location) {
    $rootScope.bodyClass = 'one';
    $rootScope.selected = [];
    $rootScope.selected.feedback = true;

    $scope.page = $routeParams.page ? $routeParams.page : 1;
    getFeedBack($scope.page);
    $scope.prevPage = function (event) {
        var page = $scope.page - 1;
        getFeedBack(page);
        $location.search({page: page}).replace();
    }
    $scope.nextPage = function (event) {
        var page = $scope.page + 1;
        getFeedBack(page);
        $location.search({page: page}).replace();
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
                if (page <= 1) {
                    $('span.prevImg').hide();
                    if ($scope.pages > 1) $('span.nextImg').show();
                }
                if (page >= $scope.pages) {
                    $('span.nextImg').hide();
                    if ($scope.pages > 1) $('span.prevImg').show();
                }
            });
    }
}