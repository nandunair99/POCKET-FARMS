<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/all-products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:34:38 GMT -->
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Martplace - All Products</title>

     <?php include_once('topscriptsV.php'); ?>
</head>

<body class="preload home3">

   <?php include_once('headerV.php'); ?>
    <section class="search-wrapper">
        <div class="search-area2 bgimage">
            <div class="bg_image_holder">
                <img src="images/search.jpg" alt="">
            </div>
            <div class="container content_above">
                <div class="row">
                    
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.search-area2 -->
    </section>
    <!--================================
        END SEARCH AREA
    =================================-->

    <!--================================
        START FILTER AREA
    =================================-->
    <div class="filter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                    <!-- end /.filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end filter-bar -->
        </div>
    </div>
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
                <div class="col-md-12">
                    <!-- start .single-product -->
                     <?php foreach($data as $d)
                          {
                            ?>
                    <div class="product product--list">
                         
                        <div class="product__thumbnail">
                            <img src="<?php echo base_url('resources/shared/productimg/').$d->productimage;?>" alt="Product Image">
                            <div class="prod_btn">
                                <div class="prod_btn__wrap">
                                    <a href="<?php echo site_url('Farmer/loadsingleproduct/'.$d->auctionid) ?>" class="transparent btn--sm btn--round">More Info</a>
                                </div>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4><?php echo $d->title?></h4>
                                </a>
                                <p><?php echo $d->description ?></p>

                                
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    
                                </div>

                                <div class="love-comments">
                                 
                                </div>

                                <div class="product-tags">
                                    
                                </div>

                                <div class="rating product--rating">
                                    
                                </div>
                            </div>
                            <!-- end product-meta -->

                            <div class="product-purchase">
                                <div class="">
                                     <?php 
                                    $c=0;
                                    foreach($daa as $d1)
                                    {
                                        if($d->productid == $d1->productid)
                                        {
                                            $c=1;
                                        }
                                    }
                                    if($c==0)
                                    {

                                    ?>
                                    <span><a  href="<?php echo site_url("Farmer/deleteeditproduct/$d->auctionid/$d->productid")?>"><button class="btn btn-primary">Delete</button></a></span>
                                </div>
                               <div class="">
                                   
                                    <span><a  href="<?php echo site_url('Farmer/editproduct?id=').$d->auctionid;?>"><button class="btn btn-primary">Edit</button></a></span>
                               <?php } ?>
                                </div>


                                <div class="sell">
                                    <p>
                                        
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>

                    </div>
               
                  <?php } ?>  <!-- end /.single-product -->

                    <!-- start .single-product -->
                   
                
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
        START CALL TO ACTION AREA
    =================================-->
   
       <?php include_once('footerV.php'); ?>
   <?php include_once('bottamscriptsV.php'); ?>
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/all-products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:34:41 GMT -->
</html>