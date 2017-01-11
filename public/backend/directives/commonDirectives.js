app.directive('opensubmenu', ['$location', function (location) {

        return {
            restrict: 'A',
            replace: false,
            transclude: false,
            link: function ($scope, $element) {
                $scope.$location = location;
                $scope.$watch('$location.path()', function (locationPath, $scope) {

                    if (locationPath.match(/^\/design\/theme\/edit\/[\d-]{0,20}$/)) {
                        $element.siblings('ul.dropdown-menu').show();
                        $element.siblings('ul.dropdown-menu').find('li#menus_pan').show();
                    } else {
                        $element.siblings('ul.dropdown-menu').hide();
                        $element.siblings('ul.dropdown-menu ').find('li#menus_pan').hide();
                    }
                });

            }
        };
    }]);

app.directive('closesubmenu', ['$location', function (location) {

        return {
            restrict: 'A',
            replace: false,
            transclude: false,
            link: function ($scope, $element) {
                $element.bind('click', function () {
                    $element.parents('ul.dropdown-menu').hide();
                });

            }
        };
    }]);

app.directive('activemenu', ['$location', function (location) {

        return {
            restrict: 'C',
            link: function ($scope, $element, $attrs) {//console.log($attrs); return false;
                var elementPath = $attrs.uiSref.substring(1);

                $scope.$location = location;
                $scope.$watch('$location.path()', function (locationPath) {

                    (elementPath === locationPath) ? $element.parents().addClass("active") : $element.parents().removeClass("active");
                });
            }
        };
    }]);

app.directive('iframeOnload', [function () {
        return {
            scope: {
                callBack: '&iframeOnload'
            },
            link: function (scope, element, attrs) {
                element.on('load', function () {
                    return scope.callBack();
                })
            }
        }
    }]);

app.directive("ngFileSelect", function () {

    return {
        link: function ($scope, el) {

            el.bind("change", function (e) {
                var file = (e.srcElement || e.target).files[0];
                var selectedFile = el.attr('rel');
                $scope.getFile(file, selectedFile);
            });
        }
    }
});

app.directive('updateModel', ['$location', function (location) {

        return {
            restrict: 'A',
            require: 'ngModel',
            link: function ($scope, $element, $attrs) {
                $scope.$on('colorpicker-selected', function (event, colorObject) {
                    //console.log(event);
                    //console.log(colorObject);
                    var property = (colorObject.name).split('.')[1];
                    var val = colorObject.value;
                    $scope.setPropertyVal(val, property);
                });


            }
        };
    }]);

app.directive('goBack', ['$window', '$location', function ($window, $location) {
        return {
            restrict: 'A',
            link: function (scope, elem, attrs) {
                elem.bind('click', function () {
                    window.location = "http://yoshopper.quickmerch.local/admin#/themes/store";
                });
            }
        };
    }]);

//=======check special character in add product field============
app.directive('noSpecialChar', function() { 
        return {
      require: 'ngModel',
      restrict: 'A',
      link: function(scope, element, attrs, modelCtrl) {
        modelCtrl.$parsers.push(function(inputValue) {
          if (inputValue == undefined)
            return ''
          cleanInputValue = inputValue.replace(/[^\w\s]/gi, '');
          if (cleanInputValue != inputValue) {
            modelCtrl.$setViewValue(cleanInputValue);
            modelCtrl.$render();
          }
          return cleanInputValue;
        });
      }
    }
    });

app.directive('getcss', ['$http', function ($http) {
        return {
            restrict: 'A',
            require: 'ngModel',
            scope: {
                file: '@',
            },
            link: function (scope, elem, attrs, ngModel) {
                console.log(scope.file);
                if (scope.file != '') {
                    $http.get(scope.file).success(function (data) {
                        elem.val(data);

                    });
                }


            }
        };
    }]);
