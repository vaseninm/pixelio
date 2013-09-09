angular.module('pixelio', []).
    config(['$routeProvider', function ($routeProvider) {
        $routeProvider.
            when('/works', {templateUrl: 'views/portfolio/works.html', controller: WorksController}).
            when('/works/:categoryId', {templateUrl: 'views/portfolio/works.html', controller: WorksController}).
            when('/work/:workId', {templateUrl: 'views/portfolio/work.html', controller: WorkController}).
            when('/cost', {templateUrl: 'views/portfolio/cost.html', controller: CostController}).
            when('/feedback', {templateUrl: 'views/feedback/feedback.html', controller: FeedbackController}).
            when('/page/:pageCanonical', {templateUrl: 'views/page/route.html', controller: PageController}).
            otherwise({redirectTo: '/works'});
    }]).config(['$httpProvider', function ($httpProvider) {
        delete $httpProvider.defaults.headers.common["X-Requested-With"]
    }]);
;