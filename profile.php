<?php
    $id = $_GET['id'];
    $slug = $_GET['name'];
    //echo $id."<br>".$slug;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!--Scripts-->
        <script src='assets/js/jquery.min.js'></script>
        <script src='assets/js/bootstrap.js'></script>
        
        <script>
            var ID = "<?php echo $id; ?>";
            ID = parseInt(ID,10);
            var SLUG = "<?php echo $slug; ?>";
        </script>

        <script src="assets/js/displayDeadPerson.js"></script>
        <script src="assets/js/get-all-comment.js"></script>
    </head>
    <body>

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

        <div class="container"></div>

        <div class="ruler"></div>

        <div id="commentList">
            <center><h4>Condolences</h4></center>

            <div class='media move-this'>
                    <!--<div class='media-left'>
                        <img src='img_avatar1.png' class='media-object' style='width:60px'>
                        </div>
                        <div class='media-body'>
                        <h4 class='media-heading'>Left-aligned</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>-->
        </div>
            
           
            
    
    </body>
</html>