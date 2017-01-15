<!doctype html>
<html>
    <head>
        <title>Laratrack DemoApp</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    </head>
    <body ng-app="trackingApp" ng-controller="Tracking as ta">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Laratrack</a>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-lg-3"></div>
              <div class="col-lg-6">
              <form name="packageForm" ng-submit="search()" class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Go!</button>
              </span>
              <input type="text" class="form-control" placeholder="Enter package code..." ng-model="package.code">
            </form>
              </div><!-- /.col-lg-6 -->
          <div class="col-lg-3"></div>
        </div>

        <div class="row" style="padding: 10rem 0">
            <div class="col-lg-3"></div>
                <div class="col-lg-6">
                Estimated delivery time:
                    <div class="alert alert-success" role="alert">
                        Results: @{{ results }}
                    </div>
                </div>
            <div class="col-lg-3"></div>
        </div>
    </body>

    <!-- Application Dependencies -->
    <script type="text/javascript" src="bower_components/angular/angular.js"></script>
    <script type="text/javascript" src="bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
    <script type="text/javascript" src="bower_components/angular-resource/angular-resource.js"></script>

    <!-- Application Scripts -->
    <script type="text/javascript" src="js/tracking.js"></script>
</html>