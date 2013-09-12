angular.module('pxAnimate', [])
    .directive('fancyBox', function () {
        return {
            link: function ($scope, element, attrs) {
                var config = attrs.fancybox ? $scope.$eval(attrs.fancyBox) : {};
                element.fancybox(config);
            }
        }
    });