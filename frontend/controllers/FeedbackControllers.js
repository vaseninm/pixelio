function FeedbackController($scope, $routeParams, $rootScope, $http, $location) {
    $rootScope.bodyClass = 'one';
    $rootScope.setActiveMenu('feedback');

    $scope.page = $routeParams.page ? parseInt($routeParams.page) : 1;
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
                    $scope.isOpenDialog = false;
                    getFeedBack($scope.page)
                } else {
                    alert('Ошибка на сервере');
                }
            });
    }

    $scope.switchDialog = function($event){
        $event.preventDefault();
        $scope.isOpenDialog = !$scope.isOpenDialog;
    }


    function getFeedBack(page) {
        $scope.visible = 'start-hide';
        $http.post('http://api.pixelio.tld/feedback/list', {
            page: page
        }).success(function (data) {
                var stop = $scope.$watch('visible', function (value) {
                    console.log(value);
                    if (value == 'stop-hide') {
                        $scope.items = data.params.items;
                        $scope.pages = data.params.pages;
                        $scope.isFirst = (page <= 1);
                        $scope.isLast = (page >= $scope.pages);
                        $scope.visible = 'start-show';
                        stop();
                    }
                });
            });
    }
}