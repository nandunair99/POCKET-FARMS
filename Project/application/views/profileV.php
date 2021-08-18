<!DOCTYPE html>
 <style> 
            table { 
                border-collapse: collapse; 
            } 
            th { 
                background-color:green; 
                Color:white; 
            } 
            th, td { 
                width:150px; 
                text-align:center; 
                border:1px solid black; 
                padding:5px

              
            } 
            .geeks { 
                border-right:hidden; 
            } 
            
        </style>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:34:22 GMT -->
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Pocket - Farmer</title>

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
                    
                   <?php include_once("leftnavprofile.php");?>
                </div>
                <!-- end /.sidebar -->

                <div class="col-lg-8 col-md-12">
                    <?php include_once('farmerintro.php');?>
                    <div class="row"> 
                        <div class="col-md-12 col-sm-12">
                            <div class="product product--card">
                                <center>
                                <?php
                                foreach ($data as $dd )
                                 {
                                     
                                ?>
                               <table border="1 solid" bgcolor="lightyellow" width="100%">
                                   <tr>
                                       <td colspan="2"><img src="<?php echo base_url('resources/shared/farmerimg/'.$dd->profileimage);?>" height="400px" width="300px" ></td>
                                   </tr>
                                   <tr>
                                       <td  class = "geeks">Name</td>
                                       <td><?php echo $dd->fullname;?></td>
                                   </tr>
                                    <tr>
                                       <td  class = "geeks">Email</td>
                                       <td><?php echo $dd->emailid;?></td>
                                   </tr>
                                    <tr>
                                       <td  class = "geeks">Contact</td>
                                       <td><?php echo $dd->contactnumber;?></td>
                                   </tr>
                                    <tr>
                                       <td  class = "geeks">Bio</td>
                                       <td><?php echo $dd->bio;?></td>
                                   </tr>
                                   

                               </table>
                           <?php } ?> 

                           </center>

                                    <br>
                                    <center>
                                    <P ><b>My ALL Product</b></P>  
                                </center>
                                    <br>
                                 <?php
                                foreach ($data2 as $d) {
                                    
                                
                                ?>
                                <div class="product__thumbnail">
                                    <img src="<?php echo base_url('resources/shared/productimg/').$d->productimage;?>" alt="Product Image"style="border: solid;border-width: 2;">
                                     <div class="prod_btn">
                                    <a href="<?php echo site_url('Farmer/loadsingleproduct/'.$d->auctionid); ?>" class="transparent btn--sm btn--round">More Info</a>
                                    
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="#" class="product_title">
                                        <h4>  Auction Title:<?php echo $d->title; ?></h4>
                                    </a>
                                   

                                    <p> Description: <?php echo $d->description;?></p>

                                </div>
                            
                            <?php } ?>
                        </div>

                    </div>

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
