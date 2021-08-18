
<?php

    if((time()-$_SESSION['last_action'])>30)
    {
     //  $_SESSION['bid']="";
       $_SESSION['last_action'] ="";
    }
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:35:09 GMT -->
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Martplace - Pricing</title>

    <!-- inject:css -->
     <?php include_once('topscriptsV.php'); ?>
</head>

<body class="preload pricing-page">

    <!--================================
        START MENU AREA
    =================================-->
    <!-- start menu-area -->
      <?php include_once('headerV.php'); ?>
    <!-- end /.menu-area -->
    <!--================================
        END MENU AREA
    =================================-->

    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <h1 class="page-title">Biding Now</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <p id="demo"></p>

    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
        START PRICING AREA
    =================================-->
    <section class="pricing_area section--padding">
        <div class="container">
            
            <!-- end /.row -->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    
                    <!-- end /.pricing -->
                </div>
                <!-- end /.col-md-4 -->

                <div class="col-lg-4 col-md-6">
                    <div class="pricing red">
                        <h4 class="pricing--title">Business</h4>
                        <p class="pricing--price">
                            <sup>$</sup>
                            <span class="ammount">99.00</span>/month</p>

                        <div class="pricing--features">
                            <ul>
                                <li>
                                    <strong>3 Months</strong> Membership
                                </li>
                                <li>
                                    <strong>All Wordpress Templates</strong>
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats."></span>
                                </li>
                                <li>Forum Support</li>
                                <li>Unlimited Domain Usage</li>
                                <li>
                                    <strong>1 Domain</strong> Tech Support
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats."></span>
                                </li>
                                <li>Copyright Removal</li>
                                <li>
                                    <strong>Demos</strong> Included
                                    <span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats."></span>
                                </li>
                                <li>Demo Pagebuilder</li>
                            </ul>
                        </div>
                        <!-- end /.pricing--features -->

                        <a href="#" class="pricing--btn">Get Started Plan</a>
                        <!-- end /.pricing--btn -->
                    </div>
                    <!-- end /.pricing -->
                </div>
                <!-- end /.col-md-4 -->

               
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRICING AREA
    =================================-->


    <!--================================
        START FOOTER AREA
    =================================-->
      <?php include_once('footerV.php'); ?>
    <!--================================
        END FOOTER AREA
    =================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

   <?php include_once('bottamscriptsV.php'); ?>
    <!-- endinject -->
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:35:09 GMT -->
</html>
<?php

header("Refresh:35,url=main");

 ?>
