angular.module('pxAnimate', [])
    .directive('fancyBox', function () {
        return {
            link: function ($scope, element, attrs) {
                var config = attrs.fancybox ? $scope.$eval(attrs.fancyBox) : {};
                element.fancybox(config);
            }
        }
    }).directive('pxFlash', function () {
        return {
            link: function ($scope, element, attrs) {
                if (element.attr('id') === undefined) element.attr('id', Math.floor(Math.random() * (10000)) + 1000)
                swfobject.embedSWF("myContent.swf", element.attr('id'), element.width(), element.height(), "9.0.0");
            }
        }
    });