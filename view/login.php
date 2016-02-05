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

    <link href="css/login.css" rel="stylesheet" type="text/css" />

    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div class="jumbotron">
    <h1>Heaven's Vineyard</h1>
    <p>Buy and drink wine made from heaven by angels.</p>
</div>
<div class="container">
    <div class="col-sm-3">

    </div>
    <div class="col-sm-6">
        <form class="form-horizontal" id="loginForm">
            <fieldset>
                <legend>Login</legend>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputUsername">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" id="inputPassword" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="button" class="btn btn-primary" id="adminLogin">Sign In As Admin</button>
                        <button type="button" class="btn btn-primary" id="custLogin">Sign In As Customer</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="col-sm-3">

    </div>

</div>

<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</body>
</html>
