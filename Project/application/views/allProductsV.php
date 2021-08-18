<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/all-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:48:30 GMT -->
<head>
<?php include_once('allProductsH.php');?>
<script>
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
    function chooseseason(season)
    {
    
     $.ajax({
             url:"<?php echo site_url('Farmer/loadproductby/p.season/')?>"+season,
             success: function(result)
             {
                 document.getElementById('result').innerHTML=result;
             }

         });
    }
     function chooseprice(price)
    {
    
     $.ajax({
             url:"<?php echo site_url('Farmer/loadproductbyprice/')?>"+price,
             success: function(result)
             {
                 document.getElementById('result').innerHTML=result;
             }

         });
    }
    function chooserate(rate)
    {
    
     $.ajax({
             url:"<?php echo site_url('Farmer/loadproductbyrate/')?>"+rate,
             success: function(result)
             {
                 document.getElementById('result').innerHTML=result;
             }

         });
    }
</script>

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
        START SEARCH AREA
    =================================-->
    <section class="search-wrapper">
        <div class="search-area2 bgimage">
            <div class="bg_image_holder">
                <img src="<?php echo base_url('resources/user/'); ?>images/search.jpg" alt="">
            </div>
            <div class="container content_above">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="search">
                            
                            <div class="search__field">
                                <form action="#">
                                    <div class="field-wrapper">
                                        <input class="relative-field rounded" type="text" placeholder="Search your products" id="searchtxt">
                                       
                                    </div>
                                </form>
                            </div>
                            <div class="breadcrumb">
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('Farmer/index')?>">Home</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">All Products</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                    <div class="filter-bar">
                        <div class="filter__option filter--select">
                           <div class="search__select select-wrap">
                                    <select name="categorytxt" class="select--field" id="categorytxt" onchange="choosecat(this.value)">
                                        <option value="-1">All Categories</option>
                                        <option value="1">Vegetables</option>
                                        <option value="2">Fruits</option>
                                        <option value="3">Nuts</option>
                                        <option value="4">Grains</option>
                                        
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                           </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--select">
                           <div class="search__select select-wrap">
                                    <select name="seasontxt" class="select--field" id="seasontxt" onchange="chooseseason(this.value)">
                                        <option value="-1">All Seasons</option>
                                        <option value="Kharif">Kharif</option>
                                        <option value="zaid">Zaid</option>
                                        <option value="rabi">Rabi</option>

                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                           </div>
                        </div>
                       

                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <select name="price" class="select--field" id="pricetxt" onchange="chooseprice(this.value)">
                                    <option value="low">Price : Low to High</option>
                                    <option value="high">Price : High to low</option>
                                </select>
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <select name="rate" class="select--field" id="ratetxt" onchange="chooserate(this.value)">
                                    <option value="low">Rate : Low to High</option>
                                    <option value="high">Rate : High to low</option>
                                </select>
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                        </div>

                        <!-- end /.filter__option -->

                        
                        <!-- end /.filter__option -->
                    </div>
                    <!-- end /.filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end filter-bar -->
        </div>
    </div>
    <!-- end /.filter-area -->
    <!--================================
        END FILTER AREA
    =================================-->


    <!--================================
        START PRODUCTS AREA
    =================================-->
    <section class="products">
        <!-- start container -->
        <div class="container">

            <!-- start .row -->
            <div class="row" id="result">
                <!-- all products diplayed by ajax -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-area">
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#">
                                    <span class="lnr lnr-arrow-left"></span>
                                </a>
                                <a class="page-numbers current" href="#">1</a>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="next page-numbers" href="#">
                                    <span class="lnr lnr-arrow-right"></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
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
    <footer class="footer-area">
        <div class="footer-big section--padding">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="info-footer">
                            <div class="info__logo">
                                <img src="images/flogo.png" alt="footer logo">
                            </div>
                            <p class="info--text">Nunc placerat mi id nisi interdum they mollis. Praesent pharetra, justo ut scel erisque the mattis,
                                leo quam.</p>
                            <ul class="info-contact">
                                <li>
                                    <span class="lnr lnr-phone info-icon"></span>
                                    <span class="info">Phone: +6789-875-2235</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-envelope info-icon"></span>
                                    <span class="info">support@aazztech.com</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-map-marker info-icon"></span>
                                    <span class="info">202 New Hampshire Avenue Northwest #100, New York-2573</span>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.info-footer -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-5 col-md-6">
                        <div class="footer-menu">
                            <h4 class="footer-widget-title text--white">Our Company</h4>
                            <ul>
                                <li>
                                    <a href="#">How to Join Us</a>
                                </li>
                                <li>
                                    <a href="#">How It Work</a>
                                </li>
                                <li>
                                    <a href="#">Buying and Selling</a>
                                </li>
                                <li>
                                    <a href="#">Testimonials</a>
                                </li>
                                <li>
                                    <a href="#">Copyright Notice</a>
                                </li>
                                <li>
                                    <a href="#">Refund Policy</a>
                                </li>
                                <li>
                                    <a href="#">Affiliates</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.footer-menu -->

                        <div class="footer-menu">
                            <h4 class="footer-widget-title text--white">Help and FAQs</h4>
                            <ul>
                                <li>
                                    <a href="#">How to Join Us</a>
                                </li>
                                <li>
                                    <a href="#">How It Work</a>
                                </li>
                                <li>
                                    <a href="#">Buying and Selling</a>
                                </li>
                                <li>
                                    <a href="#">Testimonials</a>
                                </li>
                                <li>
                                    <a href="#">Copyright Notice</a>
                                </li>
                                <li>
                                    <a href="#">Refund Policy</a>
                                </li>
                                <li>
                                    <a href="#">Affiliates</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- end /.col-md-5 -->

                    <div class="col-lg-4 col-md-12">
                        <div class="newsletter">
                            <h4 class="footer-widget-title text--white">Newsletter</h4>
                            <p>Subscribe to get the latest news, update and offer information. Don't worry, we won't send spam!</p>
                            <div class="newsletter__form">
                                <form action="#">
                                    <div class="field-wrapper">
                                        <input class="relative-field rounded" type="text" placeholder="Enter email">
                                        <button class="btn btn--round" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>

                            <!-- start .social -->
                            <div class="social social--color--filled">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-pinterest"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-linkedin"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.social -->
                        </div>
                        <!-- end /.newsletter -->
                    </div>
                    <!-- end /.col-md-4 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.footer-big -->

        <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>&copy; 2018
                                <a href="#">MartPlace</a>. All rights reserved. Created by
                                <a href="#">AazzTech</a>
                            </p>
                        </div>

                        <div class="go_top">
                            <span class="lnr lnr-chevron-up"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--================================
        END FOOTER AREA
    =================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
    <!-- inject:js -->
     <script src="<?php echo base_url('resources/user/'); ?>js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url('resources/user/'); ?>js/plugins.min.js"></script>
    <script src="<?php echo base_url('resources/user/'); ?>js/script.min.js"></script>
     <script src="<?php echo base_url('resources/user/'); ?>bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <!-- endinject -->
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/all-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:48:30 GMT -->
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
