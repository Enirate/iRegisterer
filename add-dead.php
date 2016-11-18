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
        <script src='assets/js/upload-deceased.js'></script>
        
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
                        <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a class="active" href="add-dead.php">Add Dead Person</a></li>
                    </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                </nav>

             <!--End of Nav Bar-->


            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                
            
                        <form method="POST" id="deadForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Deceased Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Deceased bio</label>
                                <textarea name="bio" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Death date</label>
                                <input type="text" name="dod" class="form-control" placeholder="YYYY/MM/DD">
                            </div>

                            <div class="form-group">
                                <label for="">Deceased picture</label>
                                <input type="file" name="pic" id="pic" class="form-control">
                            </div>

                            <input type="submit" name="submit" value="Add deceased" class="btn btn-success" id="subButton">
                        </form>

                    </div>
                
                </div>
                
            </div>
    </body>
</html>