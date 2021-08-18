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
                    <div class="row">
                        
                        <!-- end /.col-md-4 -->

                       
                        <!-- end /.col-md-4 -->

                       
                        <!-- end /.col-md-4 -->

                        <div class="col-md-12 col-sm-12">
                            <div class="product product--card">
                               <center>
                                
                               <table border="1 solid" bgcolor="lightyellow" width="100%">
                                   <tr>
                                       <td colspan="2"><img src="<?php echo base_url('resources/shared/customerimg/').$data->profilepic;?>" height="400px" width="300px"></td>
                                   </tr>
                                   <tr>
                                       <td  class = "geeks">Name</td>
                                       <td><?php echo $data->username;?></td>
                                   </tr>
                                    <tr>
                                       <td  class = "geeks">Email</td>
                                       <td><?php echo $data->emailid;?></td>
                                   </tr>
                                    <tr>
                                       <td  class = "geeks">Contact</td>
                                       <td><?php echo $data->contact;?></td>
                                   </tr>
                                    <tr>
                                       <td  class = "geeks">Bio</td>
                                       <td><?php echo $data->bio;?></td>
                                   </tr>
                                   

                               </table>
                         
                           </center>
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