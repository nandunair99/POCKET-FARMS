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


    <title>Martplace - Farmer</title>

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
                    
                    <h1 class="page-title">Edit Profile Image</h1>
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
                   <div class="row">
                       
                      <div class="login--form">
                        
                             <form method="post" enctype="multipart/form-data" action="<?php if(empty($_SESSION['userid']))
                                            {echo site_url('Farmer/updateprofileimage');}else
                                            {echo site_url('User/updateprofileimage');}?>" >

                                
                                <div class="form-group">
                                    <label for="profileimage">Profile Image</label>
                                    <input id="profileimage" type="file"  name="image" value="">
                                </div>
                                 <button class="btn btn--md btn--round register_btn" type="submit" name="submit">Update Profile Image</button>

                              </form>
                              
                              
                            </div>
                       
                   </div>
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