<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/author-reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:48:46 GMT -->
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Pocektfarm - Reviwes</title>
<?php
    include_once('topscriptsV.php');?>
</head>

<body class="preload author-reviews">

    <!--================================
        START MENU AREA
    =================================-->
    <!-- start menu-area -->
    <?php
    include_once('headerV.php');?>
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
                                <a href="<?php echo site_url('Farmer/');?>">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">Customer Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Customer Reviews</h1>
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
                <div class="col-lg-4">
                    <?php   
                      $fid=$farmid;
                      if(isset($_SESSION['farmerid']))
                      {
                        if($_SESSION['farmerid']==$farmid)
                        {
                            include_once('leftnavprofile.php');
                        }
                        else
                        {
                            include_once('farmerleftnavV.php');
                        }

                       
                      }
                      else
                      {
                        
                        include_once('farmerleftnavV.php');
                      }
                    ?>
                </div>
                <!-- end /.sidebar -->

                <div class="col-lg-8">
                    <?php include_once('farmerintro.php');?>

        <div class="row">
            <div class="col-md-12">
              <?php
                    if(isset($_SESSION['userid']))
                    { ?>
                        <form method="post">
                            <div class="product-title-area">
                            <?php if(!empty($ratings)) {?>  
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Your Previous Rating</h2>
                                </div>
                                <div class="col-md-6">
                                        <div class="rating product--rating">
                                            <h1>   
                                                <ul>
                                                                
                                      <?php   for($count=0;$count<5;$count++)
                                              { ?>
                                                    <li>
                                                      <i class="fa fa-star ratstar"  data-index="0" style="color:<?php 
                                                      if($count<=$ratings->rating)
                                                      {
                                                       echo '#ffcc00';
                                                      }
                                                      else
                                                      {
                                                       echo '#ccc';
                                                      }?>">
                                                          
                                                      </i>
                                                    </li>
                                                  
                                                  
                                        <?php } ?>
                                                                
                                                </ul>
                                            </h1>
                                        </div>
                                </div>
                               
                                
                            </div></br><?php }
                               ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Rate the Farmer</h2>
                                </div>
                                <div class="col-md-6">
                                    <div class="rating product--rating">
                                                     <h1> 
                                                         <ul>
                                                                <li>
                                                                    <i class="fa fa-star ratestar"  data-index="0"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-star ratestar" data-index="1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-star ratestar"  data-index="2"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-star ratestar"  data-index="3"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-star ratestar"  data-index="4"></i>
                                                                </li>
                                                       </ul>
                                                     </h1>
                                    </div>
                                </div>
                                <textarea name="reviewtxt" id="review_desc" class="text_field" placeholder="Describe your Experience here..."></textarea>
                                <button type="submit" class="btn btn--round btn--fullwidth btn--lg btn-secondary" name="uploadreviewbtn" id="uploadreviewbtn">Submit Your Review</button>
                            </div>
                                                
                            </div>
                        </form>
                  <?php } ?>
                            <div class="product-title-area">
                                <div class="product__title">
                                    <h2>
                                         Customer Reviews</h2>
                                </div>
                            </div>
                            <!-- end /.product-title-area -->

                            <div class="thread thread_review thread_review2" >
                                <ul class="media-list thread-list" id="reviewlist">
                                    
                                    <!-- end single comment thread /.comment-->

                                </ul>
                                <!-- end /.media-list -->

                                
                                    </nav>
                                </div>
                                <!-- end /.comment pagination area -->
                            </div>
                            <!-- end /.comments -->
                        </div>
                        <!-- end /.col-md-12 -->
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
        START FOOTER AREA
    =================================-->
   <?php include_once('footerV.php')?>
    <!--================================
        END FOOTER AREA
    =================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->
<?php include_once('bottamscriptsV.php');?>
    <!-- endinject -->
<script>
     var rate=-1;
 $(document).ready(function()
    {
        resetcolors();
       
        var fid=<?php echo $fid?>;
        load_reviews(fid);
        
        function load_reviews(fid)
        {
            $.ajax({
                url:"<?php echo site_url('Farmer/fetchreviews/')?>"+fid,
                method:"POST",
                success:function(result)
                {
                  $('#reviewlist').html(result);
                }
            })
        }
        // if(localStorage.getItem('Rate')!=null)
        // {
        //     setstars(parseInt(localStorage.getItem('Rate')));
        // }
        $('.ratestar').on('click',function()
        {
           rate=parseInt($(this).data('index'));
           localStorage.setItem('Rate',rate);

        });

        $('#uploadreviewbtn').on('click',function()
            {
                var review=$('#review_desc').val();
                 $.ajax({
                    url:"<?php echo site_url('Farmer/addreview')?>",
                    method:"POST",
                    data:{farmerid:fid,rating:rate,reviewt:review},
                    success:function(data)
                    {alert('successful review');}
                 })
            });

        $(document).on('mouseover','.ratestar',function()
        {
         resetcolors();
         var currentindex=parseInt($(this).data('index'));
         setstars(currentindex);
        });


        $(document).on('mouseleave','.ratestar',function()
        {
          resetcolors();
          if(rate!=-1)
          {
            setstars(rate);
          }
        });
    });   
 function setstars(max)
 {
   for(var i=0;i<=max;i++)
   {
    $('.ratestar:eq('+i+')').css('color','gold');
   }
 }
 function resetcolors()
 {
    $('.ratestar').css('color','#ccc');
 }
</script>
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/author-reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:48:46 GMT -->
</html>