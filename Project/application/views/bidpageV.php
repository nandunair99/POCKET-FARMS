   <?php
                            $aa=array();
                            foreach ($biddet as $k) {
                             $aa[]=$k->offerprice;    
                             } 
                          
                            ?>
  <script type="text/javascript">
                       
      function vali()

 {
   var price=document.getElementById('offerpricetxt').value;
   
   
   if(price < <?php echo $auctiondet->askedprice ?> )
         {
             swal({
                     title: "E-Fareming",
                      text: "Bid Price is Not less than Farmer Price !",
                      icon: "warning",
                      button: false,
                      timer:2000,
                  });
             document.getElementById('offerpricetxt').focus();
              
            
          } 
           document.getElementById('biddesctxt').focus();
        
    
        
}
                 
        
  </script>
  <script type="text/javascript">
     function vali1()

 {
   var price=document.getElementById('offerpricetxt').value;
   
   
   if(price < <?php echo end($aa) ?> )
         {
             swal({
                     title: "E-Fareming",
                      text: "Bid Price is Not less than buyer Price !",
                      icon: "warning",
                      button: false,
                      timer:2000,
                  });
             document.getElementById('offerpricetxt').focus();
              return false;
            
          } 
        
    
        
}
          
      
  </script>
  
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/author-followers.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:48:46 GMT -->
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Martplace - Author Followers</title>
    <link rel="stylesheet" href="<?php echo base_url('resources/user/'); ?>bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('resources/user/'); ?>css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo base_url('resources/user/'); ?>style.css">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('resources/user/'); ?>images/favicon.html">
    <script>

    	function loadamount()
    	{
           $('#togglediv').show();
            document.getElementById('offerpricetxt').focus();
    	}
    	function hideamount()
    	{
           $('#togglediv').hide();
      	}
      	function loading()
      	{
      		$('#togglediv').hide();


      	}

    </script>

</head>

<body class="preload author-followers" onload='loading()'>

    <!--================================
        START MENU AREA
    =================================-->
    <!-- start menu-area -->
   <?php include_once('headerV.php') ?>
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
                                <a href="<?php echo site_url('Farmer/index')?>">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">Auction Board</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Auction Board</h1>
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
                    <aside class="sidebar sidebar_author">
                        <div class="author-card sidebar-card">
                            <div class="author-infos">
                                <div class="author_avatar">
                                    <img src="<?php echo base_url('resources/shared/productimg/'.$auctiondet->productimage); ?>" alt="Product image">
                                </div>

                                <div class="author">
                                    <h4><?php echo $auctiondet->atitle;?></h4>
                                    
                                </div>
                                <!-- end /.author -->
     
                            </div>
                            <!-- end /.author-infos -->
                        </div>
                        <!-- end /.author-card -->
                       
                    </aside>
                    <aside class="sidebar sidebar--single-product">
                        <div class="sidebar-card card-pricing">
                            <div class="price">
                                <h1>
                                    <sup class="fa fa-inr"></sup><?php echo $auctiondet->askedprice?> /- Onwards...
                                    (per <?php echo $auctiondet->quantity?>Kg.)
                                    
                            </div>
                           
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
                                    <p class="data-label">Updated Price</p>
                                    <p class="info">28 July 2016 </p>
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
                                        {
                                          
                                            echo $td->tagname.",";
                                        }?>
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
                </div>
                <!-- end /.sidebar -->

                <div class="col-lg-8 col-md-12">
                    
                    
     <?php        
            $d1=time();
             $date=date("Y-m-d H:i:s",$d1);
             //only if auction is pending i.e. enddatetime>today>startdatetime
               if(($date<$auctiondet->enddatetime)&&($date>$auctiondet->startdatetime))
                            {?>
                    <div class="product_archive">
                       <div class="title_area">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Bidder</h4>
                            </div>
                            <div class="col-md-4">
                                <h4 class="add_info">Additional Info</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Price</h4>
                            </div>
                        </div>
                       </div>
<?php foreach($biddet as $bid){
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single_product clearfix">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="product__description">
                                            <img src="<?php echo base_url('resources/shared/customerimg/'.$bid->profilepic);?>" alt="Purchase image" height="200px" width="140px">
                                            <div class="short_desc">
                                                <h4><a href="<?php echo site_url('User/loadviewuserprofile/'.$bid->userid)?>"><?php echo $bid->username;?></a></h4>
                                                <p><?php echo $bid->emailid;?></p>
                                            </div>
                                        </div>
                                        <!-- end /.product__description -->
                                    </div>
                                    <!-- end /.col-md-5 -->

                                    <div class="col-lg-4 col-md-4 col-6 xs-fullwidth">
                                        <div class="product__additional_info">
                                            <ul>
                                                <li>
                                                    <p>
                                                        <span>Date: </span><?php echo $bid->addeddatetime;?></p>
                                                </li>
                                                <li class="license">
                                                    <p>
                                                        <span>Description:</span><?php echo $bid->description;?></p>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <!-- end /.product__additional_info -->
                                    </div>
                                    <!-- end /.col-md-3 -->

                                    <div class="col-lg-2 col-md-2 col-6 xs-fullwidth">
                                        <div class="product__price_download">
                                            <div class="item_price v_middle">
                                                <span><i class="fa fa-inr"> </i><?php echo $bid->offerprice;?></span>
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

                    </div><?php
               }?>

                       <!-- end /.row -->
                    </div>
                    <?php
                    if(isset($_SESSION['userid']))
                    {?>
                    <div class="row">
                        <div class="col-md-12">
                                    <button type="button" class="btn btn-lg btn-dark btn-block btn--round" id="bidnowbtn" name="bidnowbtn" onclick="loadamount()"><i class="fa fa-gavel"></i>  Bid Now  <i class="fa fa-gavel"></i></button>

                        </div>
                          
                    </div> 
            <?php   }?>

                    <div class="row" id="togglediv">
                        <div class="col-md-12">
                            <div class="product-title-area" id="bidformdiv">
                                <form method="post" action="<?php echo site_url('User/addbid/'.$auctiondet->auctionid); ?>" >
                                    <p class="subtitle">Enter your Bid ( <i class="fa fa-inr"></i> )</p>

                                    <div class="custom_amount">
                                        <div class="input-group">
                                            <input type="text" id="offerpricetxt" class="text_field" placeholder="eg: 250" name="offerpricetxt" onblur ="vali()">
                                        </div><br>
                                        <div class="form-group col-md-12">
                                        <label for="bid_desc">Bid Description
                                            <span>(Max 100 characters)</span>
                                        </label>
                                        <textarea name="biddesctxt" id="bid_desc" class="text_field" placeholder="Describe your product here..." ></textarea>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-4">
                                             <input type="submit" onclick="return(vali1())" value="Submit Bid" class="btn btn-dark btn-lg " >
                                            </div> 

                                            <div class="col-md-4">
                                            <!-- <input type="date" name="addeddatetxt" id="added_date" class="text_field" placeholder="choose date..." readonly> -->
                                            </div>

                                            <div class="col-md-4 text-left">
                                              <input type="button" value="Cancel" class="btn btn-dark btn-lg" onclick="hideamount()">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
         <?php    }
         else if(($date>=$auctiondet->enddatetime)&&($winnerdet!=null))//past auctions
         {?>        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-title-area">
                                <div class="product__title">
                                    <h2>
                                        <span class="bold">The Auction Winner </span></h2>
                                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single_product clearfix">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="product__description">
                                            <img src="<?php echo base_url('resources/shared/customerimg/'.$winnerdet->profilepic);?>" alt="Purchase image" height="200px" width="140px">
                                            <div class="short_desc">
                                                <h4><a href="<?php echo site_url('User/loadviewuserprofile/'.$winnerdet->userid)?>"><?php echo $winnerdet->username;?></a></h4>
                                                <p><?php echo $winnerdet->emailid;?></p>
                                            </div>
                                        </div>
                                        <!-- end /.product__description -->
                                    </div>
                                    <!-- end /.col-md-5 -->

                                    <div class="col-lg-4 col-md-4 col-6 xs-fullwidth">
                                        <div class="product__additional_info">
                                            <ul>
                                                <li>
                                                    <p>
                                                        <span>Date: </span><?php echo $winnerdet->addeddatetime;?></p>
                                                </li>
                                                <li class="license">
                                                    <p>
                                                        <span>Description:</span><?php echo $winnerdet->description;?></p>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <!-- end /.product__additional_info -->
                                    </div>
                                    <!-- end /.col-md-3 -->

                                    <div class="col-lg-2 col-md-2 col-6 xs-fullwidth">
                                        <div class="product__price_download">
                                            <div class="item_price v_middle">
                                                <span><i class="fa fa-inr"> </i><?php echo $winnerdet->offerprice;?></span>
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

                    </div>
                       <!-- end /.row -->
                       </div>
                            </div>
                        </div>
                    </div>  
                   
<?php    }
else{echo "Auction Not Started yet...";}

         ?>
                </div>    
                        <!-- end /.col-md-12 -->
               

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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
    <script src="<?php echo base_url('resources/user/'); ?>js/jquery-3.5.1.min.js"></script>
    <!-- inject:js -->
    <script src="<?php echo base_url('resources/user/'); ?>js/plugins.min.js"></script>
    <script src="<?php echo base_url('resources/user/'); ?>js/script.min.js"></script>
    <script src="<?php echo base_url('resources/user/'); ?>bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url('resources/user/'); ?>js/sweetalert.min.js"></script>
    <!-- endinject -->
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/author-followers.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:48:46 GMT -->
</html>