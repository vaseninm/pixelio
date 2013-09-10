function MenuController($scope, $routeParams, $rootScope) {
    var config = {
        speed : 800,
        reset : 500,
        easing : 'swim' //easeOutElastic easeOutExpo
    };
    $rootScope.setActiveMenu = function(menu){
        $rootScope.selected = [];
        $rootScope.selected[menu] = true;
    }
//    $scope.
}