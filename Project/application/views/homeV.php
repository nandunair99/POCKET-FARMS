<script type="text/javascript">
    function sa() {
      
        <?php if(isset($_SESSION['userid'])  )
       {
        if( empty($_SESSION['sw']))
            {?>
                       swal({
                      title: "Welcome To Pocket Farm!",
                      text: "<?php echo $_SESSION['username']?> Have a Nice Day!",
                      icon: "success",
                      button: "OH! yes",
                          });
                    <?php  $_SESSION['sw']='srat'; } } ?>
                     <?php if(isset($_SESSION['farmerid']) )
       {
        if( empty($_SESSION['sw']))
            {?>
                       swal({
                      title: "Welcome To Pocket Farm!",
                      text: "<?php echo $_SESSION['farmername']?> Have a Nice Day!",
                      icon: "success",
                      button: "OH! yes",
                          });
                    <?php  $_SESSION['sw']='srat'; } } ?>
                   }
               </script>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:46:07 GMT -->
<head>
    <meta charset="UTF-8">
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">


    <title>Pocketfarm - Home</title>
    <link rel="stylesheet" href="<?php echo base_url('resources/user/'); ?>bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('resources/user/'); ?>css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo base_url('resources/user/'); ?>style.css">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('resources/user/'); ?>images/favicon.html">


    <script >
        function choosecat(catid)
    {
    
     $.ajax({
             url:"<?php echo site_url('Farmer/loadproductby/cat.categoryid/')?>"+catid,
             success: function(result)
             {
                 document.getElementById('result').innerHTML=result;
             }

         });
    }

    function choosetag(tagname)
    {
    
     $.ajax({
             url:"<?php echo site_url('Farmer/loadproductbytags/')?>"+tagname,
             success: function(result)
             {
                 document.getElementById('result').innerHTML=result;
             }

         });
    }
    </script>
</head>

<body class="preload home1 mutlti-vendor"  onload="sa()">

    <!-- ================================
    START MENU AREA
================================= -->
    <!-- start menu-area -->
    <?php include_once('headerV.php') ?>
    <!-- end /.menu-area -->
    <!--================================
    END MENU AREA
=================================-->

    <!--================================
    START HERO AREA
=================================-->
    <section class="hero-area">
        <div class="bg_image_holder">
            <img src="<?php echo base_url('resources/user/'); ?>images/bg1.jpg" alt="background-image">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>
                                    <span class="light">Create Your Own</span>
                                    <span class="bold">Digital Market place</span>
                                </h1>
                                <p class="tagline">We bring you closer than ever before...</p>
                            </div>

                            <!-- start .hero__btn-area-->
                            
                            <!-- end .hero__btn-area-->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->

        <!--start search-area -->
        <div class="search-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .container -->
                <div class="row">
                    <!-- start .col-sm-12 -->
                    <div class="col-sm-12">
                        <!-- start .search_box -->
                        <div class="search_box">
                            <form action="#">
                                <input type="text" class="text_field" name="searchtxt" id="searchtxt" placeholder="Search your products...">
                                <div class="search__select select-wrap">
                                    <select name="categorytxt" class="select--field" id="categorytxt" onchange="choosecat(this.value)">
                                        <option value="-1">All Categories</option>
                                        <option value="1">Vegetables</option>
                                        <option value="2">Fruits</option>
                                        <option value="3">Nuts</option>
                                        <option value="4">Grains</option>
                                        
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                <!-- </div>
                                <button type="submit" class="search-btn btn--lg">Search Now</button> -->
                            </form>
                        </div>
                        <!-- end ./search_box -->
                    </div>
                    <!-- end /.col-sm-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!--start /.search-area -->
    </section>
    <!--================================
    END HERO AREA
=================================-->


 <!--================================
    START PRODUCTS AREA
=================================-->
    <section class="products section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area">
                        <div class="product__title">
                            <h2>Latest Active Auctions</h2>
                        </div>

                        
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
            <div class="row">
                <!-- start .col-md-12 -->
                <div class="col-md-12">
                    <div class="sorting">
                        <ul>
                 <?php      foreach($tags as $t)
                            {?>
                                <li>
                                <a href="#" onclick="choosetag('<?php echo $t->tagname?>')"><?php echo $t->tagname?></a>
                                </li>
                 <?php      }?>
                                <li>
                                <a href="#" onclick="window.location.reload();">All</a>
                                </li>
                        </ul>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
            <!-- start .row -->
            <div class="row" id="result">
               <!-- products diplayed here ajax -->
            </div>
            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="more-product">
                        <a href="<?php echo site_url('Farmer/loadallproducts'); ?>" class="btn btn--lg btn--round">All Products</a>
                    </div>
                </div>
                <!-- end ./col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END PRODUCTS AREA
=================================-->

    <!--================================
    START FEATURE AREA
=================================-->
    
    <!--================================
    END FEATURE AREA
=================================-->


    <!--================================
    START FEATURED PRODUCT AREA
=================================-->
    <section class="featured-products bgcolor  section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area ">
                        <div class="product__title">
                            <h2>Upcoming Auctions</h2>
                        </div>

                        <div class="product__slider-nav rounded">
                            <span class="lnr lnr-chevron-left nav_left"></span>
                            <span class="lnr lnr-chevron-right nav_right"></span>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>

        <!-- start .featured-product-slider -->



        <div class="container">
            <div class="row">
                <div class="col-md-12 no0-padding">
                    <div class="featured-product-slider prod-slider1">
                 <?php  foreach($futureauctions as $fa)
                        {?>
                            <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="<?php echo base_url('resources/shared/auctionimg/'.$fa->featuredimage); ?>" alt="Featured products">
                                <div class="prod_btn">
                                    <a href="<?php echo site_url('Farmer/loadsingleproduct/'.$fa->auctionid); ?>" class="transparent btn--sm btn--round">More Info</a>
                                    
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="<?php echo base_url('resources/user/'); ?>single-product.html" class="product_title">
                                        <h4><?php echo $fa->ptitle?> - <?php echo $fa->atitle?></h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="<?php echo base_url('resources/shared/farmerimg/'.$fa->profileimage); ?>" alt="author image">
                                            <p>
                                              <a href="<?php echo site_url('Farmer/loadviewfarmerprofile/'.$fa->farmerid);?>"><?php echo $fa->fullname?></a>
                                            </p>
                                        </li>
                                        <li class="product_cat">
                                            <a href="#">
                                                <span class="lnr lnr-book"></span> <?php echo $fa->categoryname ?></a>
                                        </li>
                                    </ul>
                                    <!-- end /.titlebtm -->
                                    <b>Product Details</b>
                                    <p><?php echo $fa->pdesc?></p>
                                    <b>Auction Details</b>
                                    <p><?php echo $fa->adesc?></p>
                                    <b>Quantity</b>
                                    <p><?php echo $fa->quantity?> Kgs</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">
                                    
                                    <div class="product-purchase featured--product-purchase">
                                        <div class="price_love">
                                            <span><i class="fa fa-inr"></i><?php echo $fa->askedprice?></span>
                                            
                                        </div>
                                       

                                        <div class="rating product--rating">
                                            <p>
                                       <b><?php echo $fa->status?></b>
                                    </p>
                                        </div>
                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->
              <?php     }   ?>                     

                    </div>
                </div>
            </div>
            <!-- end /.featured__preview-img -->
        </div>
        <!-- end /.featured-product-slider -->
    </section>
    <!--================================
    END FEATURED PRODUCT AREA
=================================-->


   


    <!--================================
    START FOLLOWERS FEED AREA
=================================-->
    <section class="followers-feed section--padding">
        <!-- start .container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area">
                        <div class="product__title">
                            <h2>Past Auctions</h2>
                        </div>

                        <div class="product__slider-nav follow_feed_nav rounded">
                            <span class="lnr lnr-chevron-left nav_left"></span>
                            <span class="lnr lnr-chevron-right nav_right"></span>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="product_slider">
                        <!-- start .single-product -->
                <?php   foreach($pastauctions as $pa)
                        {?>
                             <div class="product product--card">

                            <div class="product__thumbnail">
                                <img src="<?php echo base_url('resources/shared/auctionimg/'.$pa->featuredimage); ?>" alt="Product Image">
                                <div class="prod_btn">
                                    <a href="<?php echo site_url('Farmer/loadsingleproduct/'.$pa->auctionid); ?>" class="transparent btn--sm btn--round">More Info</a>
                                </div>
                                <!-- end /.prod_btn -->
                            </div>
                            <!-- end /.product__thumbnail -->

                            <div class="product-desc">
                                <a href="<?php echo base_url('resources/user/'); ?>#" class="product_title">
                                    <h4><?php echo $pa->atitle?></h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="<?php echo base_url('resources/shared/farmerimg/'.$pa->profileimage); ?>" alt="author image">
                                        <p>
                                            <a href="<?php echo site_url('Farmer/loadviewfarmerprofile/'.$pa->farmerid);?>"><?php echo $pa->fullname?></a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="<?php echo base_url('resources/user/'); ?>#">
                                            <span class="lnr lnr-book"></span><?php echo $pa->categoryname?></a>
                                    </li>
                                </ul>

                                <span><b>Product Name: </b><?php echo $pa->ptitle?><br/>
                                  <b>Auction Name: </b><?php echo $pa->atitle?>'<br/>
                                  <b>Minimum Quantity: </b><?php echo $pa->quantity?> kgs<br/>
                                  <b>City: </b><?php echo $pa->cityname?><br/>
                            </span>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span><i class="fa fa-inr"></i><?php echo $pa->askedprice?> Onwards</span>
                                    <p>
                                       
                                </div>
                                <div class="sell">
                                    <p>
                                       <b><?php echo $pa->status?></b>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                        <!-- end /.single-product -->
        <?php           }?>
                       
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- start /.container -->
    </section>
    <!--================================
    END FOLLOWERS FEED AREA
=================================-->

    <!--================================
    START COUNTER UP AREA
=================================-->
    <section class="counter-up-area bgimage">
        <div class="bg_image_holder">
            <img src="<?php echo base_url('resources/user/'); ?>images/countbg.jpg" alt="">
        </div>
        <!-- start .container -->
        <div class="container content_above">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="counter-up">
                    <div class="counter mcolor2">
                        <span class="lnr lnr-briefcase"></span>
                        <span class="count"><?php echo $totalcurrentauctions->totcurauctions?></span>
                        
                        <p>items for sale</p>
                    </div>
                    <div class="counter mcolor3">
                        <span class="lnr lnr-cloud-download"></span>
                        <span class="count"><?php echo $totalauctions->totauctions?></span>
                        <p>total Sales</p>
                    </div>
                    <div class="counter mcolor1">
                        <span class="lnr lnr-smile"></span>
                        <span class="count"><?php echo $totalcustomers->totcustomers?></span>
                        <p>Happy customers</p>
                    </div>
                    <div class="counter mcolor4">
                        <span class="lnr lnr-users"></span>
                        <span class="count"><?php echo $totalfarmers->totfarmers?></span>
                        <p>Happy Farmers</p>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END COUNTER UP AREA
=================================-->


    <section class="why_choose section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Why Choose
                            <span class="highlighted">Pocket Farm</span>
                        </h1>
                        <p>We bring you face to face with your demands.</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
            <div class="row">
                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .reason -->
                    <div class="feature2">
                        <span class="feature2__count">01</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-license pcolor"></span>
                            <h3 class="feature2-title">Transparency</h3>
                            <p>Our main goal is to cut down all the third party agents between our farmers and customers and bring you closer.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">02</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-magic-wand scolor"></span>
                            <h3 class="feature2-title">Quality Products</h3>
                            <p>We bring you Farm fresh products directly from our efficient farmers.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">03</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-lock mcolor1"></span>
                            <h3 class="feature2-title">100% Secure Payment</h3>
                            <p>You can trust on our payment methods ,We have efficient team to safe guard your investment .</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">04</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-chart-bars mcolor2"></span>
                            <h3 class="feature2-title">Easy to Use</h3>
                            <p>We have tried our best to bring your needs to you with minimal complexity.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">05</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-leaf mcolor3"></span>
                            <h3 class="feature2-title">Efficient Review System</h3>
                            <p>You can decide to buy the products based on our fair and efficient review system.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">06</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-phone mcolor4"></span>
                            <h3 class="feature2-title">Fast and Friendly Support</h3>
                            <p>We are here for you to serve you with your needs. You can contact our support team 24 X 7.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>


    <section class="features section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="<?php echo base_url('resources/user/'); ?>images/feature1.png" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>Best UX Research</h3>
                        </div>
                        <div class="feature__desc">
                            <p></p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->

                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="<?php echo base_url('resources/user/'); ?>images/feature2.png" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>Fully Responsive</h3>
                        </div>
                        <div class="feature__desc">
                            <p></p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->

                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="<?php echo base_url('resources/user/'); ?>images/feature3.png" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>Buy & Sell Easily</h3>
                        </div>
                        <div class="feature__desc">
                            <p></p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>

    <section class="features section--padding">
        <!-- start container -->
        <div class="container" align="center">
            <!-- start row -->
            <iframe width="700" height="400" src="https://www.youtube.com/embed/CSrjQWJzjsE" allowfullscreen></iframe>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>


   
  
    <?php include_once('footerV.php')?>
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
     <script src="<?php echo base_url('resources/user/'); ?>js/sweetalert.min.js"></script>
    <!-- endinject -->
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:47:15 GMT -->
</html>
<script>
  $(document).ready(function()
  {
    load_data();//all records
     function load_data(query)
     {

       $.ajax({
         url:"<?php echo site_url('Farmer/fetch')?>",
         method:"POST",
         data:{query:query},
         success:function(data)
         {
            
            document.getElementById('result').innerHTML=data;
         }

       })
     }
     $('#searchtxt').keyup(function()
        {
            
            var search=$(this).val();

            if(search != '')
            {
                load_data(search);
            }
            else
            {
                load_data();
            }
        });
     // $('#categorytxt').change(function()
     //    {
     //       var where=$(this).val();
     //       if(where != '')
     //       {

     //       }
     //    });
  });
</script>




