function MenuController($scope, $routeParams, $rootScope) {
    $rootScope.setActiveMenu = function(menu){
        $rootScope.selected = [];
        $rootScope.selected[menu] = true;

        $rootScope.currentYear =  (new Date()).getFullYear();
    }
}