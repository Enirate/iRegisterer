<?php
    $id = $_GET['id'];
    $slug = $_GET['name']
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign Condolence</title>
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
        <script src='assets/js/add-comment.js'></script>
        
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


            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                
            
                        <form method="POST" id="cForm" >
                            <div class="form-group">
                                <label for="">Your Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Your Message</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Your Phone number</label>
                                <input type="text" name="phone" class="form-control">
                            </div>

                            <input type="text" name="id" value="<?php echo $id; ?>" hidden>

                            <div class="form-group">
                                <label for="">Your picture</label>
                                <input type="file" name="pic" class="form-control">
                            </div>

                             <input type="submit" name="submit" value="Add condolence" class="btn btn-success" id="subButton">
                        </form>

                    </div>
                
                </div>
                
            </div>
    </body>
</html>