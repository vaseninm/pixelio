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
                if (element.attr('id') === undefined) element.attr('id', 'flashElem_' + Math.floor(Math.random() * (10000)) + 1000);
                swfobject.embedSWF(element.attr('px-flash'), element.attr('id'), element.attr('width'), element.attr('height'), "9.0.0", null, {}, {
                    wmode: "transparent",
                    menu: "false"
                });
            }
        }
    }).directive('pxLoader', function () {
        return {
            link: function ($scope, element, attrs) {
                if (element.context.nodeName !== 'IMG') return false;
                attrs.$observe('ngSrc', function (value) {
                    element.attr('src', attrs.pxLoader);
                    $('<img />').attr('src', value).load(function() {
                        element.attr('src', value);
                    });
                });
            },
            restrict: 'A'
        }
    });