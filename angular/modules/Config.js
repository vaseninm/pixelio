angular.module('pixelio', ['spasticNav', 'ngRoute', 'ngAnimate', 'pxAnimate'])
    .constant('CONFIG', {
        API_URL: '/api/'
    })
    .config(['$routeProvider', function ($routeProvider) {
        $routeProvider.
            when('/works', {templateUrl: 'angular/views/portfolio/works.html', controller: WorksController}).
            when('/works/:tag', {templateUrl: 'angular/views/portfolio/works.html', controller: WorksController}).
            when('/work/:work', {templateUrl: 'angular/views/portfolio/work.html', controller: WorkController}).
            when('/cost', {templateUrl: 'angular/views/portfolio/cost.html', controller: CostController}).
            when('/feedback', {templateUrl: 'angular/views/feedback/feedback.html', controller: FeedbackController}).
            when('/page/:pageCanonical', {templateUrl: 'angular/views/page/route.html', controller: PageController}).
            otherwise({redirectTo: '/works'});
    }]).config(['$httpProvider', function ($httpProvider) {
        delete $httpProvider.defaults.headers.common["X-Requested-With"];
//    }]).config(['$locationProvider', function ($locationProvider) {
//        $locationProvider.html5Mode(true).hashPrefix('!');
    }]).value('$anchorScroll', angular.noop);