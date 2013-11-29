function SiteController($scope, $rootScope, $http, CONFIG) {
    $http.post(CONFIG.API_URL + 'clients/register', {
        referrer: document.referrer,
        url: document.location.href
    }).success(function (data) {
        if (data.params.error) {
            console.error('Ошибка. Пользователь не добавлен.')
        } else {
            if (data.params.isNew) {
                console.log('Вы успешно добавлены в базу клиентов.')
            } else {
                console.log('Вы зашли к нам уже ' + data.params.visits + ' раз.')
            }
        }
    });
}

function PortfolioController($scope, $rootScope, $http, CONFIG) {
    $scope.isFirst = true;
    $scope.isLast = true;
    $scope.page = 1;

    $scope.prevPage = function ($event) {
        $event.preventDefault();
        $scope.isFirst || ( $scope.page = $scope.page - 1);
    }
    $scope.nextPage = function ($event) {
        $event.preventDefault();
        $scope.isLast || ($scope.page = $scope.page + 1);
    }

    $scope.$watch('page', function (value) {
        $http.post(CONFIG.API_URL + 'simplePortfolio/list', {page: $scope.page}).success(function (data) {
            $scope.items = data.params.items;
            $scope.isFirst = ($scope.page <= 1);
            $scope.isLast = ($scope.page >= data.params.pages);
        });
    });
}
function TeamController($scope, $rootScope, $http, CONFIG) {
    $scope.isFirst = true;
    $scope.isLast = true;
    $scope.page = 1;

    $scope.prevPage = function ($event) {
        $event.preventDefault();
        $scope.isFirst || ( $scope.page = $scope.page - 1);
    }
    $scope.nextPage = function ($event) {
        $event.preventDefault();
        $scope.isLast || ($scope.page = $scope.page + 1);
    }

    $scope.$watch('page', function (value) {
        $http.post(CONFIG.API_URL + 'team/list', {page: $scope.page}).success(function (data) {
            $scope.items = data.params.items;
            $scope.isFirst = ($scope.page <= 1);
            $scope.isLast = ($scope.page >= data.params.pages);
        });
    });
}
function ContactController($scope, $rootScope, $http, CONFIG) {
    $scope.leftContactModel = {};
    $scope.sended = false;
    $scope.leftContact = function ($event) {
        $event.preventDefault();
        $http.post(CONFIG.API_URL + 'clients/leftContact', $scope.leftContactModel).success(function (data) {
            if (data.params.error) {
                alert('Ошибка на сервере');
                console.error(data.params.errors);
            } else {
                $scope.leftContactModel = {};
                $scope.sended = true;
            }
        });
    }
}