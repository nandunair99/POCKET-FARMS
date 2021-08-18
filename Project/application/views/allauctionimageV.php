<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/all-products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:48:25 GMT -->
<head>
    
                           
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Pocketfarm - All Auction Image</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('resources/user/'); ?>bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('resources/user/'); ?>css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo base_url('resources/user/'); ?>style.css">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('resources/user/'); ?>images/favicon.html">
</head>

<body class="preload home3">

  <?php include_once('headerV.php');?>
    <!--================================
        START FILTER AREA
    =================================-->
    
    <!--================================
        END FILTER AREA
    =================================-->

    <!--================================
        START PRODUCTS AREA
    =================================-->
    <section class="products section--padding2">
        <!-- start container -->
        <div class="container">
   
            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-4 -->
                <div class="col-md-12" >
                <div class="col-md-6">
                    <!-- start .single-product -->
                     <?php 
                       foreach($info as $d)
                    {
                    ?>
                    <div class="product product--list">
       
                        <div class="product__thumbnail">
                            <img src="<?php echo base_url('resources/shared/auctionimg/').$d->imageurl;?>" alt="Product Image">
                            <div class="prod_btn">
                                <div class="prod_btn__wrap">
                                  
                                </div>
                              
                              
                            </div>

                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->
                    <form  method="post" action="<?php echo site_url('Farmer/editauctionimage?id=').$d->auctionimageid?>" enctype="multipart/form-data">
                        <div class="product__details">
                            <div class="product-desc">
                               
                                 
                                          
                                                    <input type="file"  name="ig">
                                                   
                                                
                                               
                                            
                                        
                                         <button type="submit" name="submit" class="btn btn--round btn--sm">Edit</button>
                            </div>
                            </form>
                            <br>
                            <br>
                          
                           </style>
                            
                           
                            <!-- end /.product-desc -->
           
                           
                            <!-- end product-meta -->

                           
                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                     <?php } ?>
                    <!-- end /.single-product -->

                    
                    <!-- end /.single-product -->

                </div>
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->

            
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRODUCTS AREA
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

 <script src="<?php echo base_url('resources/user/'); ?>https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
    <!-- inject:js -->
  
    <script src="<?php echo base_url('resources/user/'); ?>js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url('resources/user/'); ?>js/plugins.min.js"></script>
    <script src="<?php echo base_url('resources/user/'); ?>js/script.min.js"></script>
    <script src="<?php echo base_url('resources/user/'); ?>bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
       <script src="<?php echo base_url('resources/user/'); ?>js/custom.js"></script>
                 <script src="<?php echo base_url('resources/user/'); ?>js/sweetalert.min.js"></script>
                 
    <!-- endinject -->
    <!-- endinject -->
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/all-products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:48:29 GMT -->
</html>