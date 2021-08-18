<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:47:34 GMT -->
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Pocket Farm - Single Products Goes Here</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('resources/user/'); ?>css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo base_url('resources/user/'); ?>style.css">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('resources/user/'); ?>images/favicon.html">
</head>

<body class="preload home3">

    <!--================================
        START MENU AREA
    =================================-->
    <!-- start menu-area -->
    <?php include_once('headerV.php')?>
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
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="<?php echo site_url('Farmer/index');?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Farmer/loadallproducts');?>">All Products</a>
                            </li>
                            <li class="active">
                                <a href="#">Product Details</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title"><?php echo $auctiondet->ptitle?> -<?php echo $auctiondet->atitle?>  </h1>
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


    <!--============================================
        START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
    <section class="single-product-desc">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="item-preview">
                        <div class="item__preview-slider">
              <?php if(count($moreimages)>0)
                    {
                         foreach ($moreimages as $mi) 
                         {?>
         
                            <div class="prev-slide">
                                <img src="<?php echo base_url('resources/shared/auctionimg/'.$mi->imageurl); ?>" alt="Keep calm this isn't the end of the world, the preview is just missing." heigth="400px" width="100%">
                            </div>
                <?php    }
                    }
                    else
                    {?>
                            <div class="prev-slide">
                                <img src="<?php echo base_url('resources/shared/auctionimg/'.$auctiondet->productimage); ?>" alt="Keep calm this isn't the end of the world, the preview is just missing." heigth="400px" width="100%">
                            </div>
        <?php       }?>
                        </div>
                        <!-- end /.item--preview-slider -->
                         <div class="item__preview-thumb">
                            <div class="prev-thumb">
                                <div class="thumb-slider">
              <?php if(count($moreimages)>0)
                    {
                          foreach ($moreimages as $mi) 
                          {?>
                                    <div class="item-thumb">
                                        <img src="<?php echo base_url('resources/shared/auctionimg/'.$mi->imageurl); ?>" alt="This is the thumbnail of the item">
                                    </div>
     <?php                }
                          foreach ($moreimages as $mi)
                          {?>
                                    <div class="item-thumb">
                                        <img src="<?php echo base_url('resources/shared/auctionimg/'.$mi->imageurl); ?>" alt="This is the thumbnail of the item">
                                    </div>
     <?php                }     
                    }
                    else
                    {?>
                                    <div class="item-thumb">
                                        <img src="<?php echo base_url('resources/shared/auctionimg/'.$auctiondet->productimage); ?>" alt="This is the thumbnail of the item">
                                    </div>
             <?php  }
                    ?>
                                </div>
                                <!-- end /.thumb-slider -->

                                <div class="prev-nav thumb-nav">
                                    <span class="lnr nav-left lnr-arrow-left"></span>
                                    <span class="lnr nav-right lnr-arrow-right"></span>
                                </div>
                                <!-- end /.prev-nav -->
                            </div>
<!-- 
                            <div class="item-action">
                                <div class="action-btns">
                                    <a href="#" class="btn btn--round btn--lg">Live Preview</a>
                                    <a href="#" class="btn btn--round btn--lg btn--icon">
                                        <span class="lnr lnr-heart"></span>Add To Favorites</a>
                                </div>
                            </div> -->
                            <!-- end /.item__action -->
                        </div>
                        <!-- end /.item__preview-thumb-->

                    </div>
                    <!-- end /.item-preview-->

                    <div class="item-info">
                        <div class="item-navigation">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab">Product Description</a>
                                </li>
                               
                                <li>
                                    <a href="#product-faq" aria-controls="product-faq" role="tab" data-toggle="tab">Auction Description</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.item-navigation -->

                        <div class="tab-content">
                            <div class="fade show tab-pane product-tab active" id="product-details">
                                <div class="tab-content-wrapper">
                                    <h1>Product Details</h1>
                                    <p><?php echo $auctiondet->pdesc;?></p>
                                    
                                </div>
                            </div>
                            <!-- end /.tab-content -->

                            <div class="fade tab-pane product-tab" id="product-faq">
                                <div class="tab-content-wrapper">
                                    <h2>Auction Details</h2><br>
                                    <p><?php echo $auctiondet->adesc;?></p>
                                    
                                </div>

                            </div>
                            <!-- end /.product-faq -->
                        </div>
                        <!-- end /.tab-content -->
                    </div>
                    <!-- end /.item-info -->
                </div>
                <!-- end /.col-md-8 -->

                <div class="col-lg-4">
                    <aside class="sidebar sidebar--single-product">
                        <div class="sidebar-card card-pricing">
                            <div class="price">
                                <h1>
                                    <sup class="fa fa-inr"></sup><?php echo $auctiondet->askedprice?> /- Onwards...
                                    (per <?php echo $auctiondet->quantity?>Kg.)
                                    
                            </div>
                          
                            <div class="purchase-button">
                                <a href="<?php
                                   echo site_url('User/loadbidpage/'.$auctiondet->auctionid);
                                    ?>" class="btn btn--lg btn--round">View Bids</a>
                                <!-- <a href="#" class="btn btn--lg btn--round cart-btn">
                                    <span class="lnr lnr-cart"></span> Add To Cart</a -->
                            </div>
                            <!-- end /.purchase-button -->
                        </div>
                        <!-- end /.sidebar--card -->

                     

                        <div class="sidebar-card card--product-infos">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>

                            <ul class="infos">
                                <li>
                                    <p class="data-label">Released</p>
                                    <p class="info"><?php echo $auctiondet->addeddatetime?></p>
                                </li>
                                
                                <li>
                                    <p class="data-label">Auction Starts from</p>
                                    <p class="info"><?php echo $auctiondet->startdatetime?></p>
                                </li>
                                <li>
                                    <p class="data-label">Auction Ends on</p>
                                    <p class="info"><?php echo $auctiondet->enddatetime?></p>
                                </li>
                                <li>
                                    <p class="data-label">Category</p>
                                    <p class="info"><?php echo $auctiondet->categoryname?></p>
                                </li>
                                <li>
                                    <p class="data-label">Status</p>
                                    <p class="info"></p>
                                </li>
                                <li>
                                    <p class="data-label">Season</p>
                                    <p class="info"><?php echo $auctiondet->season?></p>
                                </li>
                                <li>
                                    <p class="data-label">Tags</p>
                                    <p class="info">
                                 <?php  
                                        foreach($tagdet as $td)
                                        {?>
                                          
                                    <div class="tags tags--round">
                                        <ul>
                                            <li>
                                                <a href="<?php echo base_url('resources/user/'); ?>#"><?php echo $td->tagname?></a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <!-- end /.tags -->
                               <?php     }?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.aside -->
                        

                        <div class="author-card sidebar-card ">
                            <div class="card-title">
                                <h4>Farmer Information</h4>
                            </div>

                            <div class="author-infos">
                                <div class="author_avatar">
                                    <img src="<?php echo base_url('resources/shared/farmerimg/'. $auctiondet->profileimage) ?>" alt="Presenting the broken author avatar :D">
                                </div>

                                <div class="author">
                                    <h4><?php echo $auctiondet->fullname ?></h4>
                                    <p>Registered Farmer</p>
                                </div>
                                <!-- end /.author -->

                                <div class="social social--color--filled">
                                   
                                </div>
                                <!-- end /.social -->

                                <div class="author-btn">
                                    <a href="<?php echo site_url('Farmer/loadviewfarmerprofile/'.$auctiondet->farmerid)?>" class="btn btn--sm btn--round">View Profile</a>
                                </div>
                                <!-- end /.author-btn -->
                            </div>
                            <!-- end /.author-infos -->


                        </div>
                        <!-- end /.author-card -->
                    </aside>
                    <!-- end /.aside -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->

   
    <?php include_once('footerV.php');?>
    <!--================================
        END FOOTER AREA
    =================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
    <!-- inject:js -->
    <script src="<?php echo base_url('resources/user/'); ?>js/plugins.min.js"></script>
    <script src="<?php echo base_url('resources/user/'); ?>js/script.min.js"></script>
    <!-- endinject -->
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:47:48 GMT -->
</html>