angular.module('pxAnimate', [])
    .directive('pxSimpleAnimateShow', function () {
        return {
            link: function (scope, element, attrs) {
                /**
                 * pxSimpleAnimateShow
                 * true - медленно показать
                 * false - медленно скрыть
                 * undefined - мгновенно скрыть
                 */
                scope.$watch(attrs.pxSimpleAnimateShow, function (value) {
                   if (value === true) {
                       element.fadeIn('slow');
                   } else if (value === false) {
                       element.fadeOut('slow');
                   } else {
                       element.hide();
                   }
                });
            }
        }
    }).directive('pxAnimateShow', function () {
        return {
            link: function ($scope, element, attrs) {
                var varName = element.attr('px-animate-show');
                $scope.$watch(attrs.pxAnimateShow, function (value) {
                    if (value == 'start-show') {
                       element.fadeIn('slow', function(){
                           $scope[varName] = 'stop-show';
                           $scope.$apply();
                       });
                   } else if (value == 'start-hide') {
                       element.fadeOut('slow', function(){
                           $scope[varName] = 'stop-hide';
                           $scope.$apply();
                       });
                   } else if (value == 'hidden') {
                       element.hide();
                   }
                });
            }
        }
    });