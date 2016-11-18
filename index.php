<?php
require_once 'modelsDB/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>iRegister</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!--Scripts-->
        <script src='assets/js/jquery.min.js'></script>
        <script src='assets/js/bootstrap.js'></script>
        <script src="assets/js/displayDeadList.js"></script>
    </head>
    <body>
      <div id="bodily">

    <!--Nav Bar-->

            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php">iCondolence</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="add-dead.php">Add Dead Person</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>

    <!--End of Nav Bar-->

        <div class="add-more" id="add-more">
                
        </div>
      </div>


        <footer id="footer">
          <div class="row">
            <div class="col-sm-3 col-sm-offset-3">
              <p>iCondolence inc</p>
            </div>

            <div class="col-sm-3">
              <p>Made by Projaro</p>
            </div>

            <div class="col-sm-3">
              <p> &copy; 2016</p>
            </div>
            
          </div>
        </footer>
  </body>
</html>