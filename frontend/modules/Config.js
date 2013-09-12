angular.module('pixelio', ['spasticNav', 'ngRoute', 'ngAnimate', 'pxAnimate']).
    config(['$routeProvider', function ($routeProvider) {
        $routeProvider.
            when('/works', {templateUrl: 'views/portfolio/works.html', controller: WorksController, reloadOnSearch: false}).
            when('/works/:tag', {templateUrl: 'views/portfolio/works.html', controller: WorksController, reloadOnSearch: false}).
            when('/work/:work', {templateUrl: 'views/portfolio/work.html', controller: WorkController, reloadOnSearch: false}).
            when('/cost', {templateUrl: 'views/portfolio/cost.html', controller: CostController}).
            when('/feedback', {templateUrl: 'views/feedback/feedback.html', controller: FeedbackController, reloadOnSearch: false}).
            when('/page/:pageCanonical', {templateUrl: 'views/page/route.html', controller: PageController}).
            otherwise({redirectTo: '/works'});
    }]).config(['$httpProvider', function ($httpProvider) {
        delete $httpProvider.defaults.headers.common["X-Requested-With"];
//    }]).config(['$locationProvider', function ($locationProvider) {
//        $locationProvider.html5Mode(true).hashPrefix('!');
    }]);