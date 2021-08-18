<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/dashboard-upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:48:12 GMT -->
<head>
    <?php include_once('uploadProductsHeader.php')?>
     <script type="text/javascript">
    function sw() {
            
        var cate=document.getElementById('category').value;
        var sea=document.getElementById('season').value;
        var pname=document.getElementById('product_name').value;
        var pdesc=document.getElementById('product_desc').value;
        var thum=document.getElementById('thumbnail').value;
        var ai=document.getElementById('auctionimg').value;
        var aname=document.getElementById('auction_name').value;
        var adesc=document.getElementById('auction_desc').value;
        var quan=document.getElementById('quantity').value;
        // var sp=document.getElementById('startprice').value;
        // var ed=document.getElementById('end_date').value;
        // var sd=document.getElementById('start_date').value;
        if(cate=="" || sea=="" ||pname=="" ||pdesc=="" ||thum=="" ||ai=="" ||aname=="" ||adesc=="" ||quan==""  )
        {
                       swal({
                            
                      title: "E-Farming",
                      text: "All Fields are Mandatory !",
                      icon: "warning",
                      button: "Okay!",


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
                            
                      title: "E-Fareming",
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
        function profocus()
        {
            document.getElementById('progress-bar').focus();
        }
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
        
        function filltags(cid)
        {
            $.ajax({
                url:"<?php echo site_url('Farmer/loadtags/')?>"+cid,
                success:function(result)
                {
                    document.getElementById('tags').innerHTML=result;
                }
            });
            
        }
        
    </script>
</head>

<body class="preload dashboard-upload" >

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
                                <a href="<?php echo site_url('Farmer/');?>">Home</a>
                            </li>
                            
                            <li class="active">
                                <a href="#">Upload Item</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Upload Item</h1>
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
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <!-- end /.dashboard_menu -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->

        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="pull-left">
                                <div class="dashboard__title">
                                    <h3>Upload Your Item</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form action="<?php echo site_url('Farmer/addproduct') ;?>" method="post" enctype="multipart/form-data" id="upload-form">
                              <div class="upload_modules">
                                <div class="modules__title">
                                    <h3>Item Name & Description</h3>
                                </div>
                                <!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="form-group">
                                        <label for="category">Select Category</label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="categorytxt" id="category" class="text_field" onchange="filltags(this.value)">
                                                <option value=-1>--Select Category--</option>
                                     <?php      foreach($category as $c)
                                                {?>
                                                   <option value="<?php echo $c->categoryid;?>"><?php echo $c->categoryname;?></option>
                                            <?php  }?>
                                              
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>
                                     <div class="form-group tags row" id="tags">
                                     <span class="custom-label"><strong>Tags </strong></span>

                        
                                    </div>
                                    <div class="form-group">
                                        <label for="season">Select Season</label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="seasontxt" id="season" class="text_field">
                                                <option value=-1>--Select Season--</option>
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
                                        <input type="text" id="product_name" class="text_field" placeholder="Enter your product name here..." name="prodnametxt">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="product_desc">Product Description
                                            <span>(Max 100 characters)</span>
                                        </label>
                                        <textarea name="proddesctxt" id="product_desc" class="text_field" placeholder="Describe your product here..."></textarea>
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
                                                    <p></p>
                                                    
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="progress-bar">
                                                        <span id="plabel">100%</span>
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end /.progress_wrapper -->
                                            <div class="col-md-3">
                                              <a href="#" name="uploadprodimg" id="uploadprodimg" class="btn btn--round btn--sm" action="<?php echo site_url('Farmer/uploadproductimg')?>">Upload image</a>
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
                                            <input type="text" id="auction_name" class="text_field" placeholder="Enter your Auction title here..." name="auctnametxt">
                                        </div>
                                            <!-- end /.form-group -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <label for="start price">Starting Price   <span class="fa fa-inr"></span></label>
                                             <div class="row">
                                                <div class="col-md-2"><h4 ><span class="fa fa-inr"></span></h4>
                                                </div>
                                                <div class="col-md-10"><input type="text" id="startprice" class="text_field" placeholder="Starting price..." name="startpricetxt" onblur="digi()"></div>
                                             </div>
                                        </div>
                                    </div>
                                    <div  class="col-md-6">
                                        <div class="form-group">
                                             <label for="product_name">Quantity (Kgs.)  <span class="fa fa-balance-scale"></span></label>
                                             <div class="row">
                                                <div class="col-md-8">
                                                    <input type="text" id="quantity" class="text_field text-center" name="quantity" value="0">
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
                                        <textarea name="auctdesctxt" id="auction_desc" class="text_field" placeholder="Describe your auction here..."></textarea>
                                        </div>
                                </div>
           <!--  <div class="upload_modules module--upload"> -->
                                <div class="modules__title">
                                    <h3>Upload Auction Images</h3>
                                </div>
                                <!-- end /.module_title -->

                    <div class="modules__content">
                            <div class="form-group">
                                <div class="upload_wrapper">
                                            <p>Upload Featured Image
                                                <span>(JPEG or PNG 100x100px)</span>
                                            </p>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="custom_upload">
                                                <label for="auctionimg">
                                                    <input type="file" id="auctionimg" class="files2" name="files2">
                                                    <span class="btn btn--round btn--sm">Choose File</span>
                                                </label>
                                            </div>
                                        </div>
                                            <!-- end /.custom_upload -->
                                        <div class="col-md-6 progress_wrapper"> 
                                            <!-- <div class="progress_wrapper"> -->
                                                <div class="labels clearfix">
                                                    <p></p>
                                                    
                                                </div>
                                                 <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="progress-bar2">
                                                        <span id="plabel">100%</span>
                                                        
                                                    </div>
                                                </div>

                                           <!--  </div>
 -->                                    </div>
                                            <!-- end /.progress_wrapper -->
                                        <div class="col-md-3">
                                              <a href="#" name="uploadauctimg" id="uploadauctimg" class="btn btn--round btn--sm" action="<?php echo site_url('Farmer/uploadauctionimg')?>" >Upload</a>
                                        </div>
                                           
                                    </div>
                                </div>
                                        <!-- end /.upload_wrapper -->
                            </div>
                                    <!-- end /.form-group -->
                    </div>
                                <!-- end /.modules_content -->
               <!--  </div> -->
                            <!-- end /.upload_modules -->
                            

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                                <label for="start_date">Auction Starts From</label>
                                                <div class="input-group">
                                                    
                                                    <input type="datetime-local" name="startdatetxt" id="start_date" class="text_field" placeholder="choose date..." value="<?php 
                                                      $d1=time();
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
                                                    
                                                    <input type="datetime-local" name="enddatetxt" id="end_date" class="text_field" placeholder="choose date..." onblur="val()">
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
                                

                            <div class="row">
                               <div class="col-md-6">
                                            <div class="form-group radio-group">
                                                <p class="label">Added by Admin ?</p>
                                                <div class="custom-radio">
                                                    <input type="radio" id="ryes" class=""  name="byadmin" value="yes">
                                                    <label for="ryes">
                                                        <span class="circle"></span>Yes</label>
                                                </div>

                                                <div class="custom-radio">
                                                    <input type="radio" id="rno" class=""  name="byadmin" value="no">
                                                    <label for="rno">
                                                        <span class="circle"></span>no</label>
                                                </div>
                                            </div>
                                        </div>
    
                            </div>

                <div class="upload_modules module--upload">
                                <div class="modules__title">
                                    <h3>Upload more Auction Images</h3>
                                </div>
                                <!-- end /.module_title -->

                    <div class="modules__content">
                        <div class="form-group">
                            <div class="upload_wrapper">
                                            <p>Upload Image
                                                <span>(JPEG or PNG 100x100px)</span>
                                            </p>
                                <div class="row">
                                            <div class="col-md-12">
                                            <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="files3" name="files3[]" multiple>
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
                                            <!-- end /.custom_upload -->
                                            </div>

                                            <div class="col-md-9 progress_wrapper"> 
                                            <!-- <div class="progress_wrapper"> -->
                                                <div class="labels clearfix">
                                                    <p></p>
                                                    
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="progress-bar3">
                                                        <span id="plabel">100%</span>
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end /.progress_wrapper -->
                                            <div class="col-md-3">
                                              <a action="<?php echo site_url('Farmer/addmoreimages')?>" name="uploadmoreauctimg" id="uploadmoreauctimg" class="btn btn--round btn--sm">Upload</a>
                                            </div>
                                            
                                </div>
                                <div class ="row" name="op" id="op"></div>
                            </div>    
                                        <!-- end /.upload_wrapper -->
                        </div>
                                    <!-- end /.form-group -->

                    </div>
                                <!-- end /.modules_content -->
                </div>
                            <!-- end /.upload_modules -->
                           
        </div>
                            <!-- end /modules_content-->

                           
                            <!-- submit button -->
                            <button type="submit" class="btn btn--round btn--fullwidth btn--lg" name="uploadprodbtn" id="uploadprodbtn">Submit Your Item</button>
                </div>
                    <!-- end /upload modules-->
                        </form>
            
                    </div>
                    <!-- end /.col-md-8 -->

                   
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
    <?php include_once('footerV.php')?>
    <!--================================
        END FOOTER AREA
    =================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
    <!-- inject:js -->
        <script src="<?php echo base_url('resources/user/')?>js/jquery-3.5.1.min.js"></script>

    <script src="<?php echo base_url('resources/user/')?>js/custom2.js"></script>
    <script src="<?php echo base_url('resources/user/')?>js/plugins.min.js"></script>
    <script src="<?php echo base_url('resources/user/')?>js/script.min.js"></script>
         <script src="<?php echo base_url('resources/user/'); ?>js/sweetalert.min.js"></script>

    <!-- endinject -->
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/dashboard-upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 18:48:12 GMT -->
</html>