<?php
    session_start();
    if(!isset($_SESSION['current_session'])){
        header("Location: http://localhost/e_commerce/view/login.php");
    }
?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.css">

    <link rel="stylesheet" href="bootstrap/css/admin.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <!-- User Image -->
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <!-- The message -->
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                    </ul><!-- /.menu -->
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li><!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li><!-- end notification -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks Menu -->
              <li class="dropdown tasks-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- Inner menu: contains the tasks -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <!-- Task title and progress text -->
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <!-- The progress bar -->
                          <div class="progress xs">
                            <!-- Change the css width attribute to simulate progress -->
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="http://localhost/e_commerce/controller/admin_controller.php?cmd=3" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
            <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Wine Inventory Dashboard
            <small>Admin Page</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">



          <!-- Your Page Content Here -->
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">

                <div class="box-tools pull-left">
                  <div class="has-feedback">
                    <input type="text" class="form-control input-sm" placeholder="Search Inventory"
                           onkeyup="searchWines()" id="search_input">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  </div>
                </div><!-- /.box-tools -->
                  <div class="pull-left center-block">
                  <div class="btn-group">
                      <button type="button" class="btn btn-default">Search by</button>
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu" id="search_option">
                          <li><a href="javascript: setSearchOption(1)">name</a></li>
                          <li><a href="javascript: setSearchOption(2)">type</a></li>
                          <li><a href="javascript: setSearchOption(3)">winnery</a></li>
                          <li><a href="javascript: setSearchOption(4)">price</a></li>

                      </ul>
                  </div>
                  </div>
              </div><!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="mailbox-controls">
                  <!-- Check all button -->
                  <div class="btn-group">
                    <button class="btn btn-default btn-sm" onclick="showAddForm()"><i class="fa fa-plus"></i> New Wine</button>
                    <button class="btn btn-default btn-sm"><i class="fa fa-trash"></i> </button>
                  </div><!-- /.btn-group -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">View by</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu" id="wine_category">
                            <li><a href="javascript: alert(All);">All</a></li>
                            <li><a href="javascript: getWineCategories(Fortified);">Fortified</a></li>
                            <li><a href="javascript: getWineCategories(Red);">Red</a></li>
                            <li><a href="javascript: getWineCategories(Sparkling);">Sparkling</a></li>
                            <li><a href="javascript: getWineCategories(Sweet);">Sweet</a></li>
                            <li><a href="javascript: getWineCategories(White);">White</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Sort By</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu" >
                            <li><a href="javascript: sort(5);">Name</a></li>
                            <li><a href="javascript: sort(6);">Price</a></li>
                        </ul>
                    </div>

                  <button class="btn btn-default btn-sm" onclick="showWines()"><i class="fa fa-refresh"></i></button>
                </div>
                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                    <tbody id="wine_collection2">

                    </tbody>
                  </table><!-- /.table -->
                </div><!-- /.mail-box-messages -->
              </div><!-- /.box-body -->
              <div class="box-footer no-padding">
                <div class="mailbox-controls">
                  <div class="pull-right">
                    <span id="pageNumber">1</span>/<span id="pageLimit">500</span>
                    <div class="btn-group" id="pageBtn">
                      <button class="btn btn-default btn-sm" onclick="previous()"><i class="fa fa-chevron-left"></i></button>
                    </div><!-- /.btn-group -->
                      <div class="btn-group" id="numberedPagination">

                      </div>
                      <div class="btn-group" id="pageBtn">
                          <button class="btn btn-default btn-sm" onclick="next()"><i class="fa fa-chevron-right"></i></button>
                      </div>
                  </div><!-- /.pull-right -->
                </div>
              </div>
            </div><!-- /. box -->
          </div><!-- /.col -->

            <div class="col-md-6" id="content_area">

                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li><a href="#activity" data-toggle="tab">Modify</a></li>
                        <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
                    </ul>
                    <div class="tab-content">

                        <div class="active tab-pane" id="details">
                            <div class="box box-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title" >Details</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Wine Name</label>
                                            <input type="text" class="form-control" placeholder="Enter wine name" id="detailsWineName" disabled>
                                        </div>

                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter description" id="detailsWineDesc" disabled></textarea>
                                        </div>

                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Region</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter description" id="detailsWineRegion" disabled></textarea>
                                        </div>

                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Wine Year</label>
                                            <input type="text" class="form-control" placeholder="Enter year" id="detailsWineYear" disabled>
                                        </div>

                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Wine Type</label>
                                            <input type="text" class="form-control" id="detailsWineType" disabled>
                                        </div>

                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Price</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter description" id="detailsWinePrice" disabled></textarea>
                                        </div>


                                        <div class="form-group">
                                            <label>Winery</label>
                                            <input type="text" class="form-control" id="detailsWineryName" disabled>
                                        </div>

                                        <div class="form-group">
                                            <img id="detailsWineImage">
                                        </div>

                                    </form>
                                </div><!-- /.box-body -->
                            </div>
                        </div>
                        <div class="tab-pane" id="activity">
                            <div class="box box-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title" id="form_title">Add Form</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Wine Name</label>
                                            <input type="text" class="form-control" placeholder="Enter wine name" id="inputWineName">
                                        </div>

                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter description" id="wineDesc"></textarea>
                                        </div>

                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Wine Year</label>
                                            <input type="number" class="form-control" placeholder="Enter year" id="inputWineYear">
                                        </div>

                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Select Wine Type</label>
                                            <select class="form-control" id="wineType">

                                            </select>
                                        </div>

                                        <!-- Select multiple-->
                                        <div class="form-group">
                                            <label>Winery</label>
                                            <select class="form-control" id="wineryName">
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="wineImage">File input</label>
                                            <input type="file" id="wineImage">
                                            <p class="help-block">Select Image</p>
                                        </div>

                                        <div class="box-footer">
                                            <button type="button" class="btn btn-primary" id="formSubmit">Add Wine</button>
                                            <button type="reset" class="btn btn-primary">Cancel</button>
                                        </div>


                                    </form>
                                </div><!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>



                    </div><!-- /.tab-content -->
                </div><!-- /.nav-tabs-custom -->
            </div>



        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>

    <script src="bootstrap/js/admin.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
