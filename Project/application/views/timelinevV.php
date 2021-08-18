<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:34:22 GMT -->
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Pocketfarm -Timeline</title>
    <script type="text/javascript">
        function vali() {
            var date=document.getElementById('cc').value;
           // redirect("Farmer/timelinec");
            
          //  alert(date);
            window.location.href="<?php echo site_url('Farmer/timeline?data=');?>"+date;
        }
    </script>

    <?php include_once('topscriptsV.php');?>
</head>

<body class="preload">

    <?php include_once('headerV.php');?>
    

    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <h1 class="page-title">My Profile</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
        START AUTHOR AREA
    =================================-->
    <section class="author-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    
                <?php
                $fid=$fd;   
                include_once("farmerleftnavV.php");?>
                </div>
                <!-- end /.sidebar -->
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        
                        
                        <!-- end /.col-md-4 -->

                  


                        <div class="col-md-12 col-sm-12">
                            <div class="product product--card">
                                 <?php
                                foreach ($data as $d) {
                                    
                                
                                ?>
                                <div class="product__thumbnail">
                                    <img src="<?php echo base_url('resources/shared/productimg/').$d->productimage;?>" alt="Product Image" style="border:solid;border-width: 2">
                                    
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title">
                                        <h4>  <?php echo $d->title; ?></h4>
                                    </a>
                                   

                                    <p>  <?php echo $d->description;?></p>
                                     <p>  <?php echo $d->enddatetime;?></p>
                                </div>
                            
                             <?php } ?>
                        </div>
                    </div>
                    <!-- end /.row -->

                    
                    <!-- end /.row -->
                </div>
                <!-- end /.col-md-8 -->

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END AUTHOR AREA
    =================================-->


    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    <section class="call-to-action bgimage">
        <div class="bg_image_holder">
            <img src="images/calltobg.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-wrap">
                        <h1 class="text--white">Ready to Join Our Marketplace!</h1>
                        <h4 class="text--white">Over 25,000 designers and developers trust the MartPlace.</h4>
                        <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">Join Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        END CALL TO ACTION AREA
    =================================-->

    <!--================================
        START FOOTER AREA
    =================================-->
   <?php include_once('footerV.php');?>
    <!--================================
        END FOOTER AREA
    =================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

 <?php include_once('bottamscriptsV.php');?>
    <!-- endinject -->
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:34:25 GMT -->
</html>