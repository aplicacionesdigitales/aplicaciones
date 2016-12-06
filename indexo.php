<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Angular-Laravel Authentication</title>
        <link rel="stylesheet" href="http://localhost/jot-angular/node_modules/bootstrap/dist/css/bootstrap.css">
           <link rel="stylesheet" href="http://localhost/jot-angular/css/style.css">
    </head>
    <body style="background:url('imagenes/backo.png') no-repeat fixed center; " ng-app="authApp">

        <div class="container">
            <div ui-view></div>
        </div>        

    </body>

    <!-- Application Dependencies -->
    <script src="node_modules/angular/angular.js"></script>
    <script src="node_modules/angular-ui-router/build/angular-ui-router.js"></script>
    <script src="node_modules/satellizer/satellizer.js"></script>

    <!-- Application Scripts -->
    <script src="scripts/app.js"></script>
    <script src="http://localhost/jot-angular/scripts/authController.js"></script>
    <script src="scripts/userController.js"></script>
</html>