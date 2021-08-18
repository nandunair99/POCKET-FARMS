<?php 
if(empty($_SESSION['userid']))
{
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:34:22 GMT -->
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Martplace - Farmer</title>
      <script type="text/javascript">
                                   function validae()
                              {
                             var name=document.getElementById("fullname").value;
                             var emailid=document.getElementById("emailid").value;
                             var username=document.getElementById("username").value;
                             var address=document.getElementById("address").value;
                             var city=document.getElementById("city").value;
                             var aadharnumber=document.getElementById("aadharnumber").value;
                             var contactnumber=document.getElementById("contactnumber").value;
                             var optionalnumber=document.getElementById("optionalnumber").value;
                             var password=document.getElementById("password").value;
                             var con_pass=document.getElementById("con_pass").value;
                             var bio=document.getElementById("bio").value;
                         //    var profileimage=document.getElementById("profileimage").value;
                             if(name==""||emailid==""||username==""||address==""||aadharnumber==""||contactnumber==""||optionalnumber==""||password==""||con_pass==""||bio=="")
                             {
                              swal({
                            
                              title: "Pocket Farm",
                              text: "all filed is require",
                           icon: "warning",
                            button: "okk!",


                          });
                                  return false;
                              }
                             
                              
                          
                             
                        
                   }
                   function passval()
                   {
                    var pass=document.getElementById("password").value;
                             var con=document.getElementById("con_pass").value;
                       if(con!=pass)
                                {
                                     swal({
                            
                      title: "Pocket Farm",
                      text: "Password and Confirm Password is not same",
                      icon: "warning",
                      button: false,
                      timer:2000,


                          });
                     document.getElementById("con_pass").focus();
                                 return false; 
                                }
                                else
                                {
                                    return true;
                                }
                   }
                   function contactnumval()
                   {
                     var contact=document.getElementById("contactnumber").value;
                      var phoneno = /^\d{10}$/;
                             if(contact.match(phoneno)  )
                     {
                               
                              }
                              
                              
                              else 
                              {
                                 swal({
                            
                      title: "Pocket Farm",
                      text: "Phone Number is not validate",
                      icon: "warning",
                      buttons: false,
                      timer:2000,


                          });
                                  document.getElementById("contactnumber").focus();
                                 return false;
                              }
                   }
                    function optinalnumval()
                   {
                     var contact=document.getElementById("contactnumber").value;
                     var optional=document.getElementById("optionalnumber").value;
                      var phoneno = /^\d{10}$/;
                             if(optional.match(phoneno)  )
                     {
                               if(contact==optional)
                               {
                                 swal({
                            
                                   title: "Pocket Farm",
                                  text: "Phone Number and optional number is not same",
                                   icon: "warning",
                                   buttons: false,
                      timer:2000,
                               });
                                  document.getElementById("optionalnumber").focus();
                                 return false;
                               }
                               else
                               {
                                return true;
                               }
                              }
                              
                              
                              else 
                              {
                                 swal({
                            
                      title: "Pocket Farm",
                      text: "Optinal Number is not validate",
                      icon: "warning",
                      buttons: false,
                      timer:2000,


                          });
                                  document.getElementById("optionalnumber").focus();
                                 return false;
                              }
                   }
                        function emailval()
                        {
                             var email=document.getElementById("emailid").value;
                             var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                             if(!email.match(mailformat))
                              {
                               swal({
                            
                      title: "Pocket Farm",
                      text: "Email is not validate",
                      icon: "warning",
                      buttons: false,
                      timer:2000,

                          });
                                document.getElementById("emailid").focus();
                                 return false;
                              }
                              else 
                              {
                                return true;
                              }
                        }    
                        function adharnumval()
                        {
                              var adhar=document.getElementById("aadharnumber").value;
                      var aadhar = /^\d{12}$/;
                             if(adhar.match(aadhar)  )
                     {
                               
                              }
                              
                              
                              else 
                              {
                                 swal({
                            
                      title: "Pocket Farm",
                      text: "Aadharcard Number is not validate",
                      icon: "warning",
                      buttons: false,
                      timer:2000,


                          });
                                  document.getElementById("aadharnumber").focus();
                                 return false;
                              }
                        }
                                 </script>

    <?php include_once('topscriptsV.php');?>
</head>

<body class="preload">

    <?php include_once('headerV.php');?>
    

    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <h1 class="page-title">Edit Profile</h1>
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
                   
                   <?php include_once("leftnavprofile.php");?>
                </div>
                <!-- end /.sidebar -->
                            <?php 
                                 foreach($info as $i)
                                   {
                                    ?>
                <div class="col-lg-8 col-md-12">
                   <div class="row">
                       
                      <div class="login--form">
                        
                             <form method="post" enctype="multipart/form-data" onsubmit="return(validae());" action="<?php echo site_url('Farmer/updatefarmer') ; ?>" >

                                <div class="form-group">
                                    <label for="urname">Your Name</label>
                                    <input id="fullname" type="text" class="text_field" placeholder="Enter your Name" name="fullname" value="<?=$i->fullname; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="email_ad">Email Address</label>
                                    <input id="emailid" type="text" class="text_field" placeholder="Enter your email address" name="emailid" value="<?=$i->emailid; ?>" onblur="emailval()">
                                </div>

                                <div class="form-group">
                                    <label for="user_name">Username</label>
                                    <input id="username" type="text" class="text_field" placeholder="Enter your username..." name="username" value="<?=$i->username?>">
                                </div>  

                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <textarea id="address" placeholder="Enter your address..." name="address"  value=""><?=$i->address; ?></textarea>
                                </div>
                                 
                                <div class="form-group">
                                    <label for="city">City</label>
                                   <select class="form-control" id="city" name="cityid">
                                    
                                    <option value="<?php echo $i->cityid; ?>"> 
                                      <?php
                                      foreach($cname as $cm)
                                      {
                                        echo $cm->cityname;
                                      } 
                                      ?>
                                       </option>
                                        <?php
                                                   
                                        foreach($city as $c)
                                           {   ?>
                                            <option value="<?php echo $c->cityid; ?>">
                                                <?php echo $c->cityname; ?>
                                             </option>
                                                <?php 
                                                   }
                                                 ?>
                                                            
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="aadharnumber">Aadhar Number</label>
                                    <input id="aadharnumber" type="text" class="text_field" placeholder="Enter your aadharnumber..."  name="aadharnumber"  value="<?=$i->aadharnumber; ?>" onblur="adharnumval()">
                                </div>
                                <div class="form-group">
                                    <label for="aadharnumber">Contact Number</label>
                                    <input id="contactnumber" type="text" class="text_field" placeholder="Enter your Contact Number..."  name="contactnumber"  value="<?=$i->contactnumber; ?>" onblur="contactnumval()">
                                </div>
                                 <div class="form-group">
                                    <label for="aadharnumber">Optional Number</label>
                                    <input id="optionalnumber" type="text" class="text_field" placeholder="Enter your Optional Number..."  name="optionalnumber"  value="<?=$i->optionalnumber; ?>" onblur="optinalnumval()">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="text" class="text_field" placeholder="Enter your password..." name="password"  value="<?=$i->password; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="con_pass">Confirm Password</label>
                                    <input id="con_pass" type="text" class="text_field" placeholder="Confirm password" name="cpassword"  value="<?=$i->password; ?>" onblur="passval()">
                                </div>
                                 <div class="form-group">
                                    <label for="bio">Bio</label>
                                    <textarea id="bio" name="bio" placeholder="Bio"  value=""><?=$i->bio; ?></textarea>
                                </div>
                               
                                 <button class="btn btn--md btn--round register_btn" type="submit" name="submit" onclick="validae()">Update Profile</button>

                              </form>
                              <?php } ?>
                              
                            </div>
                       
                   </div>
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
        START CALL TO ACTION AREA
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

 <?php include_once('bottamscriptsV.php');?>
    <!-- endinject -->
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:34:25 GMT -->
</html>
<?php } 
else
{
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:34:22 GMT -->
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Martplace - Farmer</title>
      <script type="text/javascript">
                                   function validae()
                              {
                            
                             var emailid=document.getElementById("emailid").value;
                             var username=document.getElementById("username").value;
                            // var address=document.getElementById("address").value;
                             var city=document.getElementById("city").value;
                            // var aadharnumber=document.getElementById("aadharnumber").value;
                             var contactnumber=document.getElementById("contactnumber").value;
                            // var optionalnumber=document.getElementById("optionalnumber").value;
                             var password=document.getElementById("password").value;
                             var con_pass=document.getElementById("con_pass").value;
                             var bio=document.getElementById("bio").value;
                         //    var profileimage=document.getElementById("profileimage").value;
                             if(emailid==""||username==""||contactnumber==""||password==""||con_pass==""||bio=="")
                             {
                              swal({
                            
                              title: "Pocket Farm",
                              text: "all filed is require",
                           icon: "warning",
                            button: "okk!",


                          });
                                return false;
                              }
                            
                            }
                             function passval()
                   {
                    var pass=document.getElementById("password").value;
                             var con=document.getElementById("con_pass").value;
                       if(con!=pass)
                                {
                                     swal({
                            
                      title: "Pocket Farm",
                      text: "Password and Confirm Password is not same",
                      icon: "warning",
                      button: false,
                      timer:2000,


                          });
                     document.getElementById("con_pass").focus();
                                 return false; 
                                }
                                else
                                {
                                    return true;
                                }
                   }
                    function contactnumval()
                   {
                     var contact=document.getElementById("contactnumber").value;
                      var phoneno = /^\d{10}$/;
                             if(contact.match(phoneno)  )
                     {
                               
                              }
                              
                              
                              else 
                              {
                                 swal({
                            
                      title: "Pocket Farm",
                      text: "Phone Number is not validate",
                      icon: "warning",
                      buttons: false,
                      timer:2000,


                          });
                                  document.getElementById("contactnumber").focus();
                                 return false;
                              }
                   }
                    function emailval()
                        {
                             var email=document.getElementById("emailid").value;
                             var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                             if(!email.match(mailformat))
                              {
                               swal({
                            
                      title: "Pocket Farm",
                      text: "Email is not validate",
                      icon: "warning",
                      buttons: false,
                      timer:2000,

                          });
                                document.getElementById("emailid").focus();
                                 return false;
                              }
                              else 
                              {
                                return true;
                              }
                        }    
                                 </script>

    <?php include_once('topscriptsV.php');?>
</head>

<body class="preload">

    <?php include_once('headerV.php');?>
    

    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <h1 class="page-title">Edit Profile</h1>
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
                   
                   <?php include_once("leftnavprofile.php");?>
                </div>
                <!-- end /.sidebar -->
                            <?php 
                                 foreach($info as $i)
                                   {
                                    ?>
                <div class="col-lg-8 col-md-12">
                   <div class="row">
                       
                      <div class="login--form">
                        
                             <form method="post" enctype="multipart/form-data" onsubmit="return(validae());" action="<?php echo site_url('User/updateuser') ; ?>" >

                           
                                <div class="form-group">
                                    <label for="user_name">Username</label>
                                    <input id="username" type="text" class="text_field" placeholder="Enter your username..." name="username" value="<?=$i->username?>">
                                </div>  
                                <div class="form-group">
                                    <label for="email_ad">Email Address</label>
                                    <input id="emailid" type="text" class="text_field" placeholder="Enter your email address" name="emailid" value="<?=$i->emailid; ?>" onblur="emailval()">
                                </div>


                               
                                 
                                <div class="form-group">
                                    <label for="city">City</label>
                                   <select class="form-control" id="city" name="cityid">
                                    
                                    <option value="<?php echo $i->cityid; ?>"> 
                                         <?php
                                      foreach($cname as $cm)
                                      {
                                        echo $cm->cityname;
                                      } 
                                      ?></option>
                                        <?php
                                                   
                                        foreach($city as $c)
                                           {   ?>
                                            <option value="<?php echo $c->cityid; ?>">
                                                <?php echo $c->cityname; ?>
                                             </option>
                                                <?php 
                                                   }
                                                 ?>
                                                            
                                        </select>
                                </div>
                               
                                <div class="form-group">
                                    <label for="aadharnumber">Contact Number</label>
                                    <input id="contactnumber" type="text" class="text_field" placeholder="Enter your Contact Number..."  name="contactnumber"  value="<?=$i->contact; ?>" onblur="contactnumval()">
                                </div>
                                 
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="text" class="text_field" placeholder="Enter your password..." name="password"  value="<?=$i->password; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="con_pass">Confirm Password</label>
                                    <input id="con_pass" type="text" class="text_field" placeholder="Confirm password" name="cpassword"  value="<?=$i->password; ?>" onblur="passval()">
                                </div>
                                 <div class="form-group">
                                    <label for="bio">Bio</label>
                                    <textarea id="bio" name="bio" placeholder="Bio"  value=""><?=$i->bio; ?></textarea>
                                </div>
                               
                                 <button class="btn btn--md btn--round register_btn" type="submit" name="submit" onclick="validate()">Update Profile</button>

                              </form>
                              <?php } ?>
                              
                            </div>
                       
                   </div>
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


    
   <?php include_once('footerV.php');?>
    <!--================================
        END FOOTER AREA
    =================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

 <?php include_once('bottamscriptsV.php');?>
    <!-- endinject -->
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:34:25 GMT -->
</html>
<?php } ?>