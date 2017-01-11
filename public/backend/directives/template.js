app.directive('sidebar', function (Config) {
    return {
        templateUrl: Config.layoutElementPath + '/sidebar.html',
        restrict: 'E',
    };
});

app.directive('topMenu', function (Config) {
    return {
        templateUrl: Config.layoutElementPath + '/topmenu.html',
        restrict: 'E',
    };
});




