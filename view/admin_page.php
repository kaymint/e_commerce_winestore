<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Heaven's Vineyard</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- bootstrap 3.0.2 -->
    <!--    -->

    <link href="css/bootstrap.min2.css" rel="stylesheet" type="text/css">

    <link href="css/admin.css" rel="stylesheet" type="text/css" />

    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />

</head>
<body data-spy="scroll" data-target="#sidebar" data-offset="20">

<!-- Nav Bar -->
<nav class="navbar navbar-default navbar-fixed-top accent">
    <div class="container">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <span class="fa fa-dribbble fa-spin"></span> Heaven's Vineyard

                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <?php
                    if(isset($_SESSION['username'])){
                        echo '<li class="pull-right"><a href="http://localhost/e_commerce/controller/admin_controller.php?cmd=3"><span class="fa fa-power-off"></span> Logout</a></li>
                                  <li class="pull-right"><a href="#">Hi '.
                            $_SESSION['username'].'</a></li>';
                    }else{
                        echo '<li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Sign In<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="login.php">Administrator</a></li>
                            <li><a href="login.php">Customer</a></li>
                            </ul>
                            </li>
                            <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Sign Up<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="javascript:">Administrator</a></li>
                                <li><a href="#">Customer</a></li>
                            </ul>
                            </li>
                            ';
                    }

                    ?>

                </ul>
            </div>
        </div>
    </div>
</nav>

<ul id="sidebar" class="nav nav-pills nav-stacked col-sm-3"">
    <li class="active"><a href="#">Home</a></li>

<div class="form-group">

    <div class="input-group">
        <span class="input-group-addon">$</span>
        <input type="text" class="form-control">
    <span class="input-group-btn">
      <button class="btn btn-default" type="button">Button</button>
    </span>
    </div>
</div>

    <li>
        <input type="text" placeholder="search wines" onkeyup="searchWines()" id="search_input">
    </li>
    <li class="disabled"><a href="#">Disabled</a></li>
    <li class="">
        <a class="dropdown-toggle" data-toggle="collapse" href="#test" aria-expanded="false">
            Dropdown <span class="caret"></span>
        </a>
        <ul id="test" class="collapse dropdown">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </li>
    <li class="">
        <a class="dropdown-toggle" data-toggle="collapse" href="#test1" aria-expanded="false">
            Dropdown <span class="caret"></span>
        </a>
        <ul id="test1" class="collapse dropdown">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </li>
</ul>


<!--    <div class="col-sm-3">-->
<!--        <div class="collapse navbar-collapse">-->


            <ul id="sidebar" class="nav nav-pills nav-stacked list-group panel col-sm-3">
                <li>





            </ul>
<!--        </div>-->

<div class="col-sm-3">
    sth
</div>


    <div class="col-sm-6">
        <h1>Wines</h1>

        <hr>

        <div id="wine_collection">

        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Wine Name</h4>
                </div>
                <div class="modal-body">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="row">
                            <img src="img/edited/sweet.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="row">
                            <br>
                            <br>
                            <div><h4>Wine Type: </h4><span id="modal-wine-type"></span></div>
                            <br>
                            <div><h4>Year: </h4><span id="modal-wine-year"></span></div>
                            <br>
                            <div><h4>Winnery Name: </h4><span id="modal-winnery-name"></span></div>
                            <br>
                            <div><h4>Price: </h4><span id="modal-wine-price"></span></div>
                            <br>
                            <div><h4>Region: </h4><span id="modal-wine-region"></span></div>
                            <br>
                            <div>
                                <h4>Variety: </h4>
                                <div id="modal-wine-variety">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <!-- Add Wine Modal -->
    <div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Wine Details</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" id="loginForm">
                        <fieldset>
                            <legend>Add A Wine</legend>
                            <div class="form-group">
                                <label for="wineName" class="col-lg-2 control-label">Wine Name</label>
                                <div class="col-lg-10">
                                    <input name="wineName" type="text" class="form-control" id="inputWineName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="wineYear" class="col-lg-2 control-label">Year</label>
                                <div class="col-lg-10">
                                    <input name="wineYear" type="number" class="form-control" id="inputWineYear">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" id="wineDesc"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Winery</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="wineryName">
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Wine Type</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="wineType">
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Variety</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="wineVariety">
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="adminLogin">Add Wine</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div>



<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/admin.js"></script>
</body>