angular.module('pixelio', [])
    .constant('CONFIG', {
        API_URL: '/api/'
    }).config(['$httpProvider', function ($httpProvider) {
        delete $httpProvider.defaults.headers.common["X-Requested-With"];
    }]).value('$anchorScroll', angular.noop);