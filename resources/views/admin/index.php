<!DOCTYPE html>
<html lang="en" ng-app="QuickmerchApp">
    <head>
        <meta charset="utf-8">
        <title>Quickmerch</title>

        <!-- Bootstrap core CSS -->
        <link href="/lib/css/bootstrap.min.css" rel="stylesheet">
        <link href="/lib/css/quickmerch.css" rel="stylesheet">
        <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="/lib/css/style.css" rel="stylesheet">
        <link href="/vendor/angularjs-toaster/toaster.css" rel="stylesheet">
        <link href="/lib/css/colorpicker.min.css" rel="stylesheet">
        <link href="/lib/css/sweet-alert.css" rel="stylesheet">

        <!-- Style for google fonts --->
        <link href='http://fonts.googleapis.com/css?family=Questrial|Source+Sans+Pro|Dosis|Abel|Fira+Sans|Domine|Droid+Sans|Cantata+One|Lato|Antic+Slab|Cabin|Fauna+One|BenchNine|Neuton|News+Cycle|Michroma|Lora|PT+Sans|Poiret+One|Armata|Syncopate|PT+Sans+Narrow|Ropa+Sans|Tinos|Istok+Web|Arimo|Quicksand|Paytone+One|Oleo+Script|Ubuntu|Gudea|Marck+Script|Droid+Sans+Mono|Josefin+Sans|Bitter|Lobster|Monda|Anton|Josefin+Slab|Libre+Baskerville|Copse|Source+Code+Pro|Exo|Asap|Cantarell|Muli|Alegreya+Sans|Ubuntu+Condensed|Droid+Serif|Inconsolata|Pacifico|Molengo|Jura|Allerta|Julius+Sans+One|Signika|Cuprum|Dancing+Script|Courgette|Play|Open+Sans|Open+Sans+Condensed:300|Noticia+Text|Merriweather|Varela|Indie+Flower|Alegreya|Yanone+Kaffeesatz|Comfortaa|Titillium+Web|Sintony|Roboto+Condensed|Ruda|Merriweather+Sans|Playball|Roboto+Slab|Sanchez|Trocchi|Karla|Playfair+Display+SC|Enriqueta|Changa+One|Oswald|Alice|Oxygen|Maven+Pro|Satisfy|Hind|Archivo+Black|Bree+Serif|Nobile|Basic|Passion+One|Patua+One|Amaranth|Pontano+Sans|Varela+Round|Hammersmith+One|Telex|Marmelad|Nunito|Fjalla+One|Crimson+Text|Voltaire|Sacramento|Boogaloo|Exo+2|Gentium+Book+Basic|Raleway|Vidaloka|Lobster+Two|Slabo+27px|Kaushan+Script|Cinzel|Roboto' rel='stylesheet' type='text/css'>

        <!--  js/javascript files -->
        <script src="/lib/js/sweet-alert.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="/lib/js/ckeditor/ckeditor.js"></script>
        <script src="/lib/js/ckeditor/styles.js"></script>
        <!--  angularjs vendors  -->         
        <script src="/vendor/angular.js"></script>
        <script src="/vendor/angular-route.js"></script>
        <script src="/vendor/angular-ui-router.js"></script>
        <script src="/vendor/angular-messages.js"></script>
        <script src="/vendor/angularjs-toaster/toaster.js"></script>
        <script src="/vendor/angular-base64.js"></script>
        <script src="/vendor/angular-resource.js"></script>
        <script src="/vendor/angular-cookies.js"></script>
        <script src="/vendor/ng-file-upload-shim.min.js"></script>
        <script src="/vendor/ng-file-upload.min.js"></script>
        <script src="/vendor/bootstrap-colorpicker-module.js"></script>
        <script src="/vendor/ngStorage.min.js"></script>
        <script src="/backend/crossApp.js"></script>
        <script src="/vendor/ui-bootstrap-tpls-0.13.0.min.js"></script>
        <script src="/vendor/dirPagination.js"></script>
<!--        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.18/angular.min.js"></script>-->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-google-chart/0.1.0/ng-google-chart.min.js" type="text/javascript"></script>
<!--
        <script src="/vendor/ng-google-chart.js"></script>
        <script src="/vendor/ng-google-chart.min.js"></script>-->
        <!-- main app scripts -->
        <script src="/backend/app.js"></script>
        <script src="/backend/constants.js"></script>
        <!-- App controllers -->
        <script src="/backend/controllers/logout.js"></script>
        <script src="/backend/controllers/DashboardController.js"></script>
        <script src="/backend/controllers/OrderController.js"></script> 
        <script src="/backend/controllers/ProductController.js"></script> 
        <script src="/backend/controllers/SettingController.js"></script> 
        <script src="/backend/controllers/PaymentController.js"></script>
        <script src="/backend/controllers/AppController.js"></script> 
        <script src="/backend/controllers/DesignController.js"></script>
        <script src="/backend/controllers/ThemesController.js"></script>
        <script src="/backend/controllers/PagesController.js"></script>
        <script src="/backend/controllers/SociallinksController.js"></script>
        <script src="/backend/controllers/PromoteController.js"></script>
        <script src="/siteadmin/controllers/DomainController.js"></script>
        <script src="/backend/controllers/CategoryController.js"></script>
        <!-- app services -->
        <script src="/backend/services/AuthenticationService.js"></script>
        <script src="/backend/services/CommonService.js"></script>
        <!-- app directives -->
        <script src="/backend/directives/passwordMatch.js"></script>
        <script src="/backend/directives/template.js"></script>
        <script src="/backend/directives/commonDirectives.js"></script>
        
        <!-- social share scripts -->
        <script src='/vendor/angular-socialshare.js'></script> 
        <script src="http://platform.twitter.com/widgets.js"></script>
        <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js" data-pin-build='parsePins'></script>
        <script src="http://platform.tumblr.com/v1/share.js"></script>
        <link href="/lib/css/social-share.css" rel="stylesheet">

    </head>

    <body ng-controller="AppCtrl" ng-init="getCurrentUser();" ng-switch="layout">
        <div ui-view></div> <!-- middle view -->


        <!-- load scripts -->
        <script src="/lib/js/bootstrap.min.js"></script>

        <script type="text/ng-template" id="themeinstalled.html">
            <div class="modal-body">
            <h4>Theme Installation Complete</h4>
            <a ng-click="backToManageTheme()" class="btn btn-success">Go Back</a>

            </div>
        </script>

        <script type="text/ng-template" id="themeinstallprogress.html">
            <div class="modal-body">
            <h4>Downloading And installing</h4>
            <progressbar class="progress-striped active" max="200" value="200" type="success"></progressbar>

            </div>
        </script>
    </body>
</html>

