angular.module('spasticNav', [])
    .directive('spasticNav', function () {
        return {
            link: function (scope, element, attrs) {
                scope.el = $(element).find('.menuArrow');

                scope.$watch(attrs.spasticNav, function (value) {
                    scope.current = $(element).find('.selected');
                    if (scope.el.length == 0 || scope.current.length == 0) return;
                    scope.el.css({
                        width: scope.current.outerWidth(),
                        left: scope.current.position().left
                    });
                });

                $(window).load(function(e) {
                    var current = ($(element).find('.selected'));
                        scope.el.css({
                        width: current.outerWidth(),
                        left: current.position().left
                    } );
                });

                var timeout;
                $.each($(element).find('li.nav'), function (i, el) {
                    $(el).bind('mouseenter', function (e) {
                        clearTimeout(timeout);
                        scope.el.stop(true, false).animate({
                            width: $(this).outerWidth(),
                            left: $(this).position().left
                        }, 1200);
                    });
                    $(el).bind('mouseleave', function (e) {
                        timeout = setTimeout(function() {
                            scope.el.animate({
                                width: scope.current.outerWidth(),
                                left: scope.current.position().left
                            }, 600);
                        }, 500);

                    });
                });
            },
            terminal: false,
            priority: 1
        };
    });