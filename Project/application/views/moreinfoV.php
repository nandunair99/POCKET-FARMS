
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/dashboard-purchase.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:34:56 GMT -->
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Martplace - Dashboard Purchasing</title>

    <!-- inject:css -->
       <?php include_once('topscriptsV.php')?>
</head>

<body class="preload dashboard-purchase">

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
                 
                    <h1 class="page-title">Product More Information </h1>
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
            START DASHBOARD AREA
    =================================-->
    <section class="dashboard-area dashboard_purchase">
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                   
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->

        <div class="dashboard_contents">
            <div class="container">
                
                <!-- end /.row -->

                <div class="product_archive">
                    <div class="title_area">
                        <div class="row">
                            <div class="col-md-5">
                                <h4>Product Details</h4>
                            </div>
                            <div class="col-md-3">
                                <h4 class="add_info">Additional Info</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Price</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Bid</h4>
                            </div>
                        </div>
                    </div>
                    <?php 
                       foreach($data as $a)
                       {

                        ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single_product clearfix">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="product__description">
                                            <img src="<?php echo base_url('resources/shared/productimg/').$a->productimage;?>" alt="Purchase image" height=90 width=90>
                                            <div class="short_desc">
                                                <h4><?php echo $a->title ;?></h4>
                                                <p><?php echo $a->description ;?></p>
                                            </div>
                                        </div>
                                        <!-- end /.product__description -->
                                    </div>
                                    <!-- end /.col-md-5 -->

                                    <div class="col-lg-3 col-md-3 col-6 xs-fullwidth">
                                        <div class="product__additional_info">
                                            <ul>
                                                <li>
                                                    <p>
                                                        <span>Biding End: </span> <?php echo $a->enddatetime; ?></p>
                                                </li>
                                                <li class="license">
                                                    <p>
                                                        <span>Licence:</span> Regular</p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span>Farmer:</span> <?php echo $a->fullname  ?></p>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="images/catword.png" alt="">Wordpress</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end /.product__additional_info -->
                                    </div>
                                    <!-- end /.col-md-3 -->

                                    <div class="col-lg-4 col-md-4 col-6 xs-fullwidth">
                                        <div class="product__price_download">
                                            <div class="item_price v_middle">
                                                <span><?php echo "₹".$a->askedprice ?></span>
                                            </div>
                                            <?php 
                                                if(isset($_POST['sbt']))
                                                {
                                                     $_SESSION['bid']="start";     
                                                      $_SESSION['last_action'] = time();
                                                }
                                            ?>
                                            
                                            <div class="item_action v_middle">
                                               <?php 
                                               if(!empty($_SESSION['userid']))
                                               {
                                                if(!isset($_SESSION['bid']))
                                                {
                                               ?>
                                                <form method="post">
                                    <a href="<?php echo site_url('Farmer/bid');?>" class="btn btn--md btn--round" name="sbt">Bid Now</a>
                                </form>
                                <?php }
                                      }
                                      else
                                      {


                                ?>
                                <script type="text/javascript">
                                    alert("login first");
                                </script>
                                <?php
                            }
                                ?>
                                               
                                                <!-- end /.rating_btn -->
                                            </div>
                                            <!-- end /.item_action -->
                                        </div>
                                        <!-- end /.product__price_download -->
                                    </div>
                                    <!-- end /.col-md-4 -->
                                </div>
                            </div>
                            <!-- end /.single_product -->
                        </div>
                       <?php } ?>
                       

                       
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.product_archive2 -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->

    <!--================================
        START FOOTER AREA
    =================================-->
    <?php include_once('footerV.php') ?>
    <!--================================
        END FOOTER AREA
    =================================-->

    <!-- Modals -->
    <div class="modal fade rating_modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="rating_modal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="rating_modal">Rating this Item</h3>
                    <h4>Product Enquiry Extension</h4>
                    <p>by
                        <a href="author.html">AazzTech</a>
                    </p>
                </div>
                <!-- end /.modal-header -->

                <div class="modal-body">
                    <form action="#">
                        <ul>
                            <li>
                                <p>Your Rating</p>
                                <div class="right_content btn btn--round btn--white btn--md">
                                    <select name="rating" class="give_rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </li>

                            <li>
                                <p>Rating Causes</p>
                                <div class="right_content">
                                    <div class="select-wrap">
                                        <select name="review_reason">
                                            <option value="design">Design Quality</option>
                                            <option value="customization">Customization</option>
                                            <option value="support">Support</option>
                                            <option value="performance">Performance</option>
                                            <option value="documentation">Well Documented</option>
                                        </select>

                                        <span class="lnr lnr-chevron-down"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="rating_field">
                            <label for="rating_field">Comments</label>
                            <textarea name="rating_field" id="rating_field" class="text_field" placeholder="Please enter your rating reason to help the author"></textarea>
                            <p class="notice">Your review will be ​publicly visible​ and the author may reply to your comments. </p>
                        </div>
                        <button type="submit" class="btn btn--round btn--default">Submit Rating</button>
                        <button class="btn btn--round modal_close" data-dismiss="modal">Close</button>
                    </form>
                    <!-- end /.form -->
                </div>
                <!-- end /.modal-body -->
            </div>
        </div>
    </div>

    <!--//////////////////// JS GOES HERE ////////////////-->
   <?php include_once('bottamscriptsV.php')?>
    <!-- endinject -->
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/dashboard-purchase.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:34:57 GMT -->
</html>