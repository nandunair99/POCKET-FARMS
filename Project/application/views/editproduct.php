<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/dashboard-upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:48:12 GMT -->
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Edit farmer product</title>

    <?php include_once('topscriptsV.php')?>
      <script type="text/javascript">
    function sw() {
            
        var cate=document.getElementById('category').value;
        var sea=document.getElementById('season').value;
        var pname=document.getElementById('product_name').value;
        var pdesc=document.getElementById('product_desc').value;
        //var thum=document.getElementById('thumbnail').value;
        // var ai=document.getElementById('auctionimg').value;
        var aname=document.getElementById('auction_name').value;
        var adesc=document.getElementById('auction_desc').value;
        var quan=document.getElementById('quantity').value;
        var sp=document.getElementById('startprice').value;
        var ed=document.getElementById('end_date').value;
        var sd=document.getElementById('start_date').value;
        if(cate=="" || sea=="" ||pname=="" ||pdesc=="" ||aname=="" ||adesc=="" ||quan=="" ||sp=="" ||ed=="" ||sd=="" )
        {
                       swal({
                            
                      title: "E-Fareming",
                      text: "Some field is Missing !",
                      icon: "warning",
                      button: "okk!",


                          });
                       return false;
                   }
                      
 // window.location.href = "Farmer/loadupload";


 }
  function sdd()
 {
    var sd=document.getElementById('start_date').value;
    var cd=document.getElementById('added_date').value;
   // alert(sd);
    if(sd < cd)
    {
         swal({
                            
                      title: "E-Farming",
                      text: "Starting date is not less than Current date !",
                      icon: "warning",
                      button: false,
                      timer:4000,


                          });
         document.getElementById('start_date').focus();
    }
 }
 function val()
 {
    var sd=document.getElementById('start_date').value;
    var ed=document.getElementById('end_date').value;
     if(ed < sd)
    {
         swal({
                            
                      title: "E-Fareming",
                      text: "end date is not less than starting date !",
                      icon: "warning",
                      button: false,
                      timer:4000,


                          });
         document.getElementById('end_date').focus();
    }
 }
 function digi()
 {
     var sp=document.getElementById('startprice').value;

                             if(sp>0  )
                     {
                               
                              }
                              
                              
                              else 
                              {
                                 swal({
                            
                      title: "E-Fareming",
                      text: "Price is not valid",
                      icon: "warning",
                      buttons: false,
                      timer:2000,


                          });
                                  document.getElementById("startprice").focus();
                                 return false;
                              }

 }
</script>
    <script>
        var q;
        
        function decqnty()
        {

              q=parseInt(document.getElementById('quantity').value);
              if(q==0)
                document.getElementById('quantity').value=q;
              else
              document.getElementById('quantity').value=q-1;
        }
        function incqnty()
        {
           q=parseInt(document.getElementById('quantity').value);
           document.getElementById('quantity').value=q+1;
        }
        function loaddate()
        {
          var sd=document.getElementById('start_date').value;
          var cd=document.getElementById('added_date').value;
          if(cd>=sd)
          {
            document.getElementById('startprice').readOnly=true;
           document.getElementById('start_date').disabled=true;
          }
        }
        
    </script>
</head>

<body class="preload dashboard-upload" onload='loaddate()'>

    <!--================================
        START MENU AREA
    =================================-->
    <!-- start menu-area -->
    <?php include_once('headerV.php'); ?>
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
                                <a href="<?php echo site_url('farmer/');?>">Home</a>
                            </li>
                            
                            <li class="active">
                                <a href="#">Edit Item</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Edit Item</h1>
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
    <section class="dashboard-area">
       
        <!-- end /.dashboard_menu_area -->

        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="pull-left">
                                <div class="dashboard__title">
                                    <h3>Edit Your Item</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
                   <?php 
                   foreach($data as $d)
                   {
                     foreach ($da as $ad) {
                         foreach ($c as $cc) {
                            
                     
                    ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form action="<?php echo site_url('Farmer/updateproduct?pid='.$ad->productid.'&aid='.$d->auctionid) ;?>" method="post" enctype="multipart/form-data" id="upload-form" onload="loaddate()">
                              <div class="upload_modules">
                                <div class="modules__title">
                                    <h3>Item Name & Description</h3>
                                </div>
                                <!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="form-group">
                                        <label for="category">Select Category</label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="categorytxt" id="category" class="text_field">
                                                <option value="<?php echo $cc->categoryid;?>"><?php echo $cc->categoryname ?></option>
                                     <?php      foreach($category as $c)
                                                {?>
                                                   <option value="<?php echo $c->categoryid;?>"><?php echo $c->categoryname;?></option>
                                            <?php  }?>
                                              
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="season">Select Season</label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="seasontxt" id="season" class="text_field">
                                                <option value="<?php echo $ad->season?>"><?php echo $ad->season?></option>
                                                <option value="kharif">Kharif(July to October)</option>
                                                <option value="rabi">Rabi(October to March)</option>
                                                <option value="zaid">Zaid(March to July)</option>
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="product_name">Product Name
                                            <span>(Max 30 characters)</span>
                                        </label>
                                        <input type="text" id="product_name" class="text_field" placeholder="Enter your product name here..." name="prodnametxt" value="<?php echo $ad->title ?>">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="product_desc">Product Description
                                            <span>(Max 100 characters)</span>
                                        </label>
                                        <textarea name="proddesctxt" id="product_desc" class="text_field" placeholder="Describe your product here..." ><?php echo $ad->description; ?></textarea>
                                    </div>
                                </div>
                                <!-- end /.modules__content -->
                              </div>
                            <!-- end /.upload_modules -->
                           

                <div class="upload_modules module--upload">
                                <div class="modules__title">
                                    <h3>Upload Files</h3>
                                </div>
                                <!-- end /.module_title -->

                    <div class="modules__content">
                        <div class="form-group">
                            <div class="upload_wrapper">
                                            <p>Upload Product Image
                                                <span>(JPEG or PNG 100x100px)</span>
                                            </p>
                                <div class="row">
                                            <div class="col-md-3">
                                            <div class="custom_upload">
                                                <label for="thumbnail">
                                                    <input type="file" id="thumbnail" class="files" name="files">
                                                    <span class="btn btn--round btn--sm">Choose File</span>
                                                </label>
                                            </div>
                                            <!-- end /.custom_upload -->
                                            </div>

                                            <div class="col-md-6 progress_wrapper"> 
                                            <!-- <div class="progress_wrapper"> -->
                                                <div class="labels clearfix">
                                                   
                                                    
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="progress-bar">
                                                        <span id="plabel">100%</span>
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end /.progress_wrapper -->
                                            <div class="col-md-3">
                                              <a href="#" name="uploadprodimg" id="uploadprodimg" class="btn btn--round btn--sm" onclick="profocus()">Upload image</a>
                                            </div>
                                            
                                </div>
                            </div>    
                                        <!-- end /.upload_wrapper -->
                        </div>
                                    <!-- end /.form-group -->

                    </div>
                                <!-- end /.modules_content -->
                </div>
                            <!-- end /.upload_modules -->

                <div class="upload_modules">
                                <div class="modules__title">
                                    <h3>Auction Information</h3>
                                </div>
                                <!-- end /.module_title -->

                    <div class="modules__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="auction_name">Auction Title
                                            <span>(Max 30 characters)</span>
                                          </label>
                                            <input type="text" id="auction_name" class="text_field"  value="<?php echo $d->title; ?>" placeholder="Enter your Auction title here..." name="auctnametxt">
                                        </div>
                                            <!-- end /.form-group -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <label for="start price">Starting Price</label>
                                             <div class="row">
                                                <div class="col-md-2"><h4>Rs.</h4>
                                                </div>
                                                <div class="col-md-10"><input type="text" id="startprice" class="text_field" placeholder="Starting price..." name="startpricetxt" value="<?php echo $d->askedprice;?>" onblur="digi()"></div>
                                             </div>
                                        </div>
                                    </div>
                                    <div  class="col-md-6">
                                        <div class="form-group">
                                             <label for="product_name">Quantity (Kgs.)</label>
                                             <div class="row">
                                                <div class="col-md-8">
                                                    <input type="text" id="quantity" class="text_field text-center" name="quantity" value="<?php echo $d->quantity;?>" >
                                                </div>
                                                
                                                <div class="col-md-2">
                                                <button type="button" onclick="decqnty()" id="decqty" name="decqty" class="btn-primary btn--round btn--xs">
                                                    <span class="lnr lnr-chevron-down"></span>
                                                </button>
                                                </div>
                                                <div  class="col-md-2" >
                                                    <button type="button" onclick="incqnty()" id="incqty" name="incqty" class="btn-primary btn--round btn--xs">
                                                        <span class="lnr lnr-chevron-up"></span></button>
                                                </div>
                                                
                                             </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                        <div class="form-group col-md-12">
                                        <label for="auction_desc">Auction Description
                                            <span>(Max 100 characters)</span>
                                        </label>
                                        <textarea name="auctdesctxt" id="auction_desc" class="text_field" placeholder="Describe your auction here..."><?php echo $d->description;?></textarea>
                                        </div>
                                </div>
                            <div class="form-group">
                                <div class="upload_wrapper">
                                            <p>Upload Featured Image
                                                <span>(JPEG or PNG 100x100px)</span>
                                            </p>
                                    <div class="row">
                                        
                                            <!-- end /.custom_upload -->
                                        <div class="col-md-6 progress_wrapper"> 
                                            <!-- <div class="progress_wrapper"> -->
                                                <div class="labels clearfix">
                                                   
                                                    
                                                </div>
                                                

                                           <!--  </div>
 -->                                    </div>
                                            <!-- end /.progress_wrapper -->
                                        <div class="col-md-12">
                                              <a href="<?php echo site_url('Farmer/allauctionimg?id='.$d->auctionid);?>" name="uploadauctimg" id="uploadauctimg" class="btn btn--round btn--fullwidth btn--lg" > Edit Auction image</a>
                                        </div>
                                           
                                    </div>
                                </div>
                                        <!-- end /.upload_wrapper -->
                            </div>
                                    <!-- end /.form-group -->

                            <!-- <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                                <label for="start_date">Auction Starts From</label>
                                                <div class="input-group">
                                                    
                                                    <input type="date" name="startdatetxt" id="start_date" class="text_field" placeholder="choose date..." value="<?php echo $d->startdatetime;?>" 
                                                    onblur="sdd()">
                                                </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label for="end_date">Auction Ends on</label>
                                                <div class="input-group">
                                                    
                                                    <input type="date" name="enddatetxt" id="end_date" class="text_field" placeholder="choose date..." value="<?php echo $d->enddatetime;?>" onblur="val()">
                                                </div>
                                     </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                                <label for="added_date">Current Date</label>
                                                <div class="input-group">
                                                   
                                                    <input type="date" name="addeddatetxt" id="added_date" class="text_field" placeholder="choose date..." readonly>
                                                </div>
                                    </div>
                                </div>
                            </div> -->
                             <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                                <label for="start_date">Auction Starts From</label>
                                                <div class="input-group">
                                                    
                                                    <input type="datetime-local" name="startdatetxt" id="start_date" class="text_field" placeholder="choose date..." value="<?php 
                                                      $d1=strtotime($d->startdatetime);
                                                      $date1=date("Y-m-d",$d1);
                                                       $date2=date("H:i:s",$d1);
                                                       $date3=$date1.'T'.$date2;
                                                      echo $date3;
                                                    ?>" onblur="sdd()">
                                                     
                                                </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label for="end_date">Auction Ends on</label>
                                                <div class="input-group">
                                                    
                                                    <input type="datetime-local" name="enddatetxt" id="end_date" class="text_field" placeholder="choose date..." value="<?php 
                                                      $d1=strtotime($d->enddatetime);
                                                      $date1=date("Y-m-d",$d1);
                                                       $date2=date("H:i:s",$d1);
                                                       $date3=$date1.'T'.$date2;
                                                      echo $date3;
                                                    ?>" onblur="val()">
                                                </div>
                                     </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                                <label for="added_date">Current Date</label>
                                                <div class="input-group">
                                                   
                                                    <input type="datetime-local" name="addeddatetxt" id="added_date" class="text_field" placeholder="choose date..." value="<?php 
                                                      $d1=time();
                                                      $date1=date("Y-m-d",$d1);
                                                       $date2=date("H:i:s",$d1);
                                                       $date3=$date1.'T'.$date2;
                                                      echo $date3;
                                                    ?>" readonly>
                                                </div>
                                    </div>
                                </div>
                            </div>
                                

                           
                               
                    </div>
                            <!-- end /modules_content-->

                           
                            <!-- submit button -->
                            <button type="submit" class="btn btn--round btn--fullwidth btn--lg" name="uploadprodbtn" id="uploadprodbtn" onclick="return(sw())">Submit Your Item</button>
                </div>
                    <!-- end /upload modules-->
                        </form>
                    </div>
                    <!-- end /.col-md-8 -->
                       <?php }} } ?>
                   
                    <!-- end /.col-md-4 -->
                </div>
                <!-- end /.row -->
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
  <?php include_once('footerV.php');?>
    <!--================================
        END FOOTER AREA
    =================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->
 <?php include_once('bottamscriptsV.php');?>
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/dashboard-upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:48:12 GMT -->
</html>