<?php
include'Admin/phpAction/controller.php';
include'Admin/phpAction/model.php';
$msg="";
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}

$msgInsertFundi="<div class='alert alert-danger' role='alert'> Registration Successfully !</div>";
if(isset($_POST['submitFundi'])){
    $modelObjForFundiInsert=new model();
    $resultFundiInsert=$modelObjForFundiInsert->fundiPageInsert();
    if($resultFundiInsert==true){
        header("location:fundis.php?msg=$msgInsertFundi");
    }
    else{
        echo"Failed ! Please Try Again";
    }
}
$advertisementInsertMessage="<div class='alert alert-danger' role='alert'> Uploaded Picture Successfully  Please Wait For Approved !</div>";
if(isset($_POST['submitphoto'])){
    $modelObjForAdvertisement=new model();
    $resultAdvertisementInsert=$modelObjForAdvertisement->advertisementInsert($getID);
    if($resultAdvertisementInsert==true){
        header("location:advertisements.php?msg=$advertisementInsertMessage");
    }else{
        echo "Failed ! Please Try Again";
    }
}

$msgHardware="<div class='alert alert-danger' role='alert'> Registration Successfully !</div>";
if(isset($_POST['submitHardware'])){
    $modelObjForInsertHardware=new model();
    $resultHardwareData=$modelObjForInsertHardware->hardwareSuppliesInsert();
    if($resultHardwareData==true){
        header("location:hardwareSupplies.php?msg=$msgHardware");
    }else{
        echo "Failed ! Please Try Again";
    }

}

$msgProfessionalService="<div class='alert alert-danger' role='alert'> Registration Successfully !</div>";
if(isset($_POST['submitProfessional'])){
    $modelObjForProfessionInsert=new model();
    $resultProfessionalData=$modelObjForProfessionInsert->professionalServiceInsert();
    if($resultProfessionalData==true){
        header("location:professionalServices.php?msg=$msgProfessionalService");
    }else{
        echo "Failed ! Please Try Again";
    }

}
$msgForJobsInsert="<div class='alert alert-danger' role='alert'> Registration Successfully !</div>";
if(isset($_POST['submitJobs'])){
    $modelObjForJobsInsert=new model();
    $resultData=$modelObjForJobsInsert->jobsInsert();
    if($resultData==true){
        header("location:jobs.php?msg=$msgForJobsInsert");
    }else{
        return false;
    }
}





?>

<!doctype html>
<html lang="" class="page-home01">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - Fundi Poa</title>
    <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Icon font 7 Stroke -->
    <link rel="stylesheet" href="fonts/icon-7/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="fonts/icon-7/css/helper.css">

    <!-- Icon font Renovation -->
    <link rel="stylesheet" href="fonts/renovation/icon-font-renovation.css">

    <!-- Google font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Menu Mobile: mmenu -->
    <link type="text/css" rel="stylesheet" href="components/mmenu/jquery.mmenu.all.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="components/font-awesome/css/font-awesome.css" />

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="components/owl.carousel/assets/owl.carousel.css" />

    <!-- Light Gallery -->
    <link rel="stylesheet" href="components/lightgallery/css/lightgallery.css" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="components/bootstrap/css/bootstrap.css" />

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="components/slider/slider.css">

    <!-- THEME STYLE -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/form.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">



</head>
<body>
<div class="site">

    <div class="site-top style-01">
        <div class="container">
            <div class="row row-sm-center">

                <div class="col-sm-5 col-md-6">
                    <div class="site-top-left text-xs-center text-sm-left">
                        <a href="#">Your Trusted 24 Hours Service Provider!</a>
                    </div>
                </div>

                <div class="col-sm-7 col-md-6">
                    <div class="site-top-right text-xs-center text-sm-right">
                        <nav id="top-right-menu">
                            <ul class="menu">
                                <li class="menu-item"><a href="#">Infomation</a></li>
                                <li class="menu-item">
                                    <a href="#">Extras</a>
                                    <ul class="sub-menu text-left">
                                        <li class="menu-item"><a href="#">FAQ</a></li>
                                        <li class="menu-item"><a href="#">Site Maintenance</a></li>
                                        <li class="menu-item"><a href="#">404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="#">Alternative Pages</a></li>
                                <li class="menu-item"><a href="signup.php">Sign up</a></li>
                                <li class="menu-item"><a href="login.php">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.site-top .style-01 -->

    <header class="site-header style-01">
        <div class="container">
            <div class="row row-xs-center">

                <div class="col-xs-10 col-lg-2 site-branding">
                    <a href="index.php">
                        <img src="images/logo.png" width="50" length="50" alt="Fundi-Poa">
                    </a>
                </div>

                <div class="col-xs-2 hidden-lg-up text-right">
                    <a id="menu-button" href="#primary-menu-mobile"><i id="open-left" class="fa fa-bars"></i></a>
                    <nav id="primary-menu-mobile">
                        <ul>
                            <li>
                                <a href="index.php">Home</a>

                            </li>
                            <li>
                                <a href="fundis.php">Fundis</a>
                                <ul>
                                    <li class="text-center"><img src="images/page-home/mega.jpg" alt=""></li>

                                    <li><a href="#"><i class="fa fa-cubes"></i> Plumbers</a></li>
                                    <li><a href="#"><i class="fa fa-image"></i> Electricians</a></li>
                                    <li><a href="#"><i class="fa fa-th-large"></i> Carpenters</a></li>
                                    <li><a href="#"><i class="fa fa-puzzle-piece"></i> Painters</a></li>
                                    <li><a href="#"><i class="fa fa-rocket"></i> Home/Office Movers</a></li>
                                    <li><a href="#"><i class="fa fa-hand-o-up"></i> Home/Officer Cleaners</a></li>
                                    <li><a href="#"><i class="fa fa-laptop"></i> Gardeners</a></li>



                                </ul>
                            </li>
                            <li><a href="professionalServices.php">Professional Services</a>
                                <ul>

                                </ul>
                            </li>
                            <li><a href="hardwareSupplies.php">Hardware Suppliers</a>
                                <ul>

                                </ul>
                            </li>
                            <li><a href="jobs.php">Jobs</a>
                                <ul>
                                    <li class="menu-item menu-item-has-children"><a href="about-01.html">About us</a>
                                        <ul>
                                            <li><a href="about-01.html">Layout 01</a></li>
                                            <li><a href="about-02.html">Layout 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="our-team.html">Our team</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="site-maintenance.html">Site Maintenance</a></li>
                                    <li class="menu-item menu-item-has-children"><a href="#">Page title</a>
                                        <ul>
                                            <li><a href="single-color-background.html">Single color background</a></li>
                                            <li><a href="image-background.html">Image background</a></li>
                                            <li><a href="big-image-background.html">Big Image background</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="worker.php">Worker</a>
                                <ul>

                                </ul>
                            </li>
                            <li><a href="images.php">Images</a>
                                <ul>

                                </ul>
                            </li>
                            <li><a href="viewServicesProfile.php">ServicesProfile</a>
                                <ul>

                                </ul>
                            </li>
                            <li><a href="viewJobs.php">viewJobs</a>
                                <ul>

                                </ul>
                            </li>
                            <li><a href="hardwareSuppliesPage.php">Hardware Suppliers</a>
                                <ul>

                                </ul>
                            </li>


                            <li><a href="blog/blog-list-layout.html">Blog</a>
                                <ul>
                                    <li><a href="blog-list.html">List layout</a></li>
                                    <li><a href="blog-grid.html">Grid layout</a></li>
                                    <li><a href="blog-simple.html">Simple layout</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Shop</a>
                                <ul>
                                    <li><a href="shop.html">Full Width Shop Layout</a></li>
                                    <li><a href="shop-cart.html">cart</a></li>
                                    <li><a href="shop-checkout.html">Check out</a></li>
                                    <li><a href="my-account.html">My account</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a>
                                <ul>
                                    <li><a href="contact.html">Layout 01</a></li>
                                    <li><a href="contact-layout-02.html">Layout 02</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- / Menu Mobile -->

                <div class="col-xs-12 col-sm-9 col-lg-8 extra-info">
                    <div class="row">
                        <div class="col-sm-5">
                            <i class="fa fa-phone"></i>
                            <div class="phone">
                                <h3>+254796296546</h3>
                                <span>info@fundipoa.com</span>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-6">
                            <i class="fa fa-home"></i>
                            <div class="address">
                                <h3>Nairobi Metropolitan Area</h3>
                                <span>Kenya</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.extra-info -->

                <div class="col-xs-12 col-sm-3 col-lg-2 text-xs-center text-sm-right search-cart">
                    <div class="search-box">
                        <form action="#" class="search-form">
                            <input type="search" placeholder="Search" class="search-field">
                            <input type="submit" class="search-submit" value="search">
                        </form>
                        <span class="search-box-icon"><i class="fa fa-search"></i></span>
                    </div>
                    <!-- /.search-box -->


                    <!-- .mini-cart -->
                </div>
                <!-- / .search-cart -->

            </div>
        </div>

        <div class="social-menu social-menu_right-arrow hidden-md-down">
            <ul class="menu">
                <li class="menu-item"><a href="https://www.facebook.com/">facebook</a></li>
                <li class="menu-item"><a href="https://www.plus.google.com/">google+</a></li>
                <li class="menu-item"><a href="https://www.twitter.com/">twitter</a></li>
                <li class="menu-item"><a href="https://www.youtube.com/">youtube</a></li>
            </ul>
        </div>
        <!-- /.social-menu -->

    </header>
    <!-- /.site-header .style-01 -->

    <nav id="primary-menu" class="primary-menu_style-01 hidden-md-down">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="menu">
                        <li class="menu-item active">
                            <a href="index.php">Home</a>

                        </li>
                        <li class="menu-item mega-menu">
                            <a href="fundis.php">Fundis</a>
                            <ul class="sub-menu">
                                <li>
                                    <div class="row r">
                                        <div class="col-md-3">
                                            <img src="images/page-home/lady-fundi.jpeg" alt="">
                                        </div>
                                        <div class="col-md-3">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-cubes"></i> Plumbers</a></li>
                                                <li><a href="#"><i class="fa fa-image"></i> Electricians</a></li>
                                                <li><a href="#"><i class="fa fa-th-large"></i> Carpenters</a></li>
                                                <li><a href="#"><i class="fa fa-puzzle-piece"></i> Painters</a></li>
                                                <li><a href="#"><i class="fa fa-rocket"></i> Home/Office Movers</a></li>
                                                <li><a href="#"><i class="fa fa-hand-o-up"></i> Home/Officer Cleaners</a></li>
                                                <li><a href="#"><i class="fa fa-laptop"></i> Gardeners</a></li>

                                            </ul>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="professionalServices.php">Professional Services</a>
                            <ul class="sub-menu">

                            </ul>
                        </li>
                        <li class="menu-item"><a href="hardwareSupplies.php">Hardware Supplies</a>

                        </li>
                        <li class="menu-item  menu-item-has-children"><a href="jobs.php">Jobs</a>

                        </li>

                        <li class="menu-item menu-item-has-children">
                            <a href="advertisements.php">Advertisements</a>
                        </li>
                        <li class="menu-item"><a href="services-list.html">Contact Us</a></li>
                        <li class="menu-item"><a href="worker.php">Worker</a></li>
                        <li class="menu-item"><a href="images.php">Images</a></li>
                        <li class="menu-item"><a href="viewServicesProfile.php">ServicesProfile</a></li>
                        <li class="menu-item"><a href="viewJobs.php">viewJobs</a></li>
                        <li class="menu-item"><a href="hardwareSuppliesPage.php">Hardware Suppliers</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- /.primary-menu -->