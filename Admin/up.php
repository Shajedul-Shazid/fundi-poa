<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fundi-poa Admin || Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/fundiAdmin.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/fundiTable.css">
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul style="background-color: yellow; " class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="indexAdmin.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i  style="color: black" class="fas fa-laugh-wink"></i>
            </div>
            <div style="color: black" class="sidebar-brand-text mx-3">Fundi-poa Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="indexAdmin.php">
                <i  style="color: black" class="fas fa-fw fa-tachometer-alt"></i>
                <span  style="color: black">Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div  style="color: black" class="sidebar-heading">
            Interface
        </div>


        <!-- Divider -->
        <hr class="sidebar-divider">



        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i  style="color: black" class="fas fa-fw fa-folder"></i>
                <span  style="color: black">Pages</span>

            <div id="collapsePages"  class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item"  href="fundiPage.php">Fundi Page</a>
                    <a class="collapse-item"  href="advertisement.php">Advertisement Page</a>
                    <a class="collapse-item"  href="professional.php">Professional Page</a>
                    <a class="collapse-item"  href="jobs.php">jobs Page</a>
                    <a class="collapse-item"  href="hardware.php">Hardware Supplies Page</a>
                    <a class="collapse-item"  href="user.php">Singup user Page</a>
                </div>
            </div>
            </a>
        </li>





        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                 <?php
                    if(isset($_SESSION['User'])){
                        echo"<form action='includesLogin/logout.inc.php' method='post' class=\"nav-item\">
                        <button type=\"submit\" name=\"logout-submit\"><i class=\"fas fa-power-off text-center\"></i>Logout</button>
                    </form>";
                    }
               ?>



            </nav>
            <!-- End of Topbar -->
