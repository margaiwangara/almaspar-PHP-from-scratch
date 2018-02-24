<?php

if(session_status() == PHP_SESSION_NONE)
    //start session
    session_start();

if(!isset($_COOKIE['ADMIN_USERNAME']) || !isset($_SESSION['ADMIN_ID']))
    //redirect to login page
    header("Location: /../almas-parlour/admin/auth/view/login-view.php");

//include user info page
include_once __DIR__.'/../back-end/admin-info.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Margai W.">

    <!--Bootstrap files start here-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!--Bootstrap ends here-->

    <!--Admin LTE borrowed template styles &adminlte-->
    <link rel="stylesheet" href="/../almas-parlour/admin/styles/AdminLTE.css">

    <!--Custom styles start here-->
    <link rel="stylesheet" href="/../almas-parlour/admin/styles/open-style.css">

    <!--Custom scripts-->
    <script src="/../almas-parlour/admin/js/navbar-js.js" type="text/javascript"></script>
    <script src="/../almas-parlour/admin/js/form-image-disp.js" type="text/javascript"></script>
    <script src="/../almas-parlour/admin/js/slideshow.js" type="text/javascript"></script>

    <!-- Admin LTE borrowed scripts-->
    <script src="/../almas-parlour/admin/js/adminlte.js" type="text/javascript"></script>
    <script src="/../almas-parlour/admin/js/demo.js" type="text/javascript"></script>
    <script src="/../almas-parlour/admin/js/pages/dashboard2.js" type="text/javascript"></script>

</head>
<body>
<div id="admin-wrapper">
    <nav class="nav navbar-inverse">
        <div class="navbar-header">
            <a href="#" class="fa fa-bars fa-2x pull-left sidebar-toggler"></a>
            <a href="#" class="navbar-brand">alma's parlour</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-tasks fa-1.5x"></i>
                    <span class="badge">0</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a href="#">
                            <div class="navbar-ddheader">
                                <strong>Task Header</strong>
                                <span class="pull-right text-muted">Just Now</span>
                            </div>
                            <div class="navbar-ddbody">
                                <p>This is a sample message.This is a sample message.This is a sample message</p>
                            </div>
                        </a>
                    </li>
                    <li class=""></li>
                    <li class=""></li>
                    <li class=""></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i>
                    <span class="badge">0</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a  href="#">
                            <div class="navbar-ddheader">
                                <strong>Username</strong>
                                <span class="pull-right text-muted">Just Now</span>
                            </div>
                            <div class="navbar-ddbody">
                                <p>
                                    This is a sample message.This is a sample messageThis is a sample messageThis is a sample message
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i>
                    <span class="badge">0</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">
                            <div class="navbar-ddheader">
                                <strong>Notification header</strong>
                                <span class="pull-right text-muted">Just Now</span>
                            </div>
                            <div class="navbar-ddbody">
                                <p>This is a sample messageThis is a sample messageThis is a sample messageThis is a sample message</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle"></i>
                    <span class="badge">0</span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">User Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Sign Out</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="sidebar-nav" class="nav navbar-inverse">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/../almas-parlour/icons/male-avatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $admin_name;?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="/../almas-parlour/admin/index.php"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Users Management</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/../almas-parlour/admin/view/add-users.php"><i class="fa fa-user-plus"></i> Add Users</a></li>
                    <li><a href="/../almas-parlour/admin/view/view-users.php"><i class="fa fa-user-times"></i> Delete Users</a></li>
                    <li><a href="/../almas-parlour/admin/view/edit-users.php"><i class="fa fa-edit"></i> Edit Users</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tags"></i>
                    <span>Products Management</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/../almas-parlour/admin/view/add-items.php"><i class="fa fa-user-plus"></i> Add Products</a></li>
                    <li><a href="/../almas-parlour/admin/view/edit-items.php"><i class="fa fa-circle-o"></i> Edit Products</a></li>
                    <li><a href="/../almas-parlour/admin/view/view-products.php"><i class="fa fa-circle-o"></i> Delete Products</a></li>
                    <li><a href="/../almas-parlour/admin/view/view-products.php"><i class="fa fa-circle-o"></i> View Products</a></li>
                </ul>
            </li>
            <li>
                <a href="/../almas-parlour/admin/view/manage-images.php">
                    <i class="fa fa-image"></i> <span>Images Management</span>
                </a>
            </li>
            <li>
                <a href="pages/widgets.html">
                    <i class="fa fa-compass"></i> <span>Location Management</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tags"></i>
                    <span>Orders Management</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/chartjs.html"><i class="fa fa-user-plus"></i> View Orders</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Edit Products</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Delete Products</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> View Products</a></li>
                </ul>
            </li>
            <li>
                <a href="/../almas-parlour/admin/view/newsletters.php">
                    <i class="fa fa-th"></i> <span>Newsletters</span>
                </a>
            </li>
        </ul>
    </div>
    <div id="main-content-wrapper">
        <div class="container-fluid">
