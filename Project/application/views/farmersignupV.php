<script type="text/javascript">
  function ab()
  {
    <?php if(empty($_SESSION['nandu']))
    {
    ?>
   
    
     
       swal({
                            
                      title: "E-Fareming",
                      text: "Username is Already Taken",
                      icon: "warning",
                      button: false,
                      timer:2000,


                          });
        
     <?php $_SESSION['nandu']='no'; } ?>

   

  }
</script>
<!DOCTYPE html>
<html lang="en">



<head>
     <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>PocketFarm Farmer - Sign Up</title>
   <?php include_once('rtopscriptsV.php'); ?>
   <script type="text/javascript">
                                   function validate()
                              {

                            
                           
                             var name=document.getElementById("fullname").value;
                             var email=document.getElementById("emailid").value;
                             var username=document.getElementById("username").value;
                             var address=document.getElementById("address").value;
                             var city=document.getElementById("city").value;
                             var aadharnumber=document.getElementById("aadharnumber").value;
                             var contact=document.getElementById("contactnumber").value;
                             var optional=document.getElementById("optionalnumber").value;
                             var password=document.getElementById("password").value;
                             var con_pass=document.getElementById("con_pass").value;
                             var bio=document.getElementById("bio").value;
                             var profileimage=document.getElementById("profileimage").value;
                             if(name==""||email==""||username==""||address==""||aadharnumber==""||contact==""||optional==""||password==""||con_pass==""||bio==""||profileimage=="")
                             {
                             // alert("all filed is require");
                           
                               // document.myform.fullname.focus();
                              
                              
                                 swal({
                            
                              title: "E-Fareming",
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
                            
                      title: "E-Fareming",
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
                            
                      title: "E-Fareming",
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
                            
                                   title: "E-Fareming",
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
                            
                      title: "E-Fareming",
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
                            
                      title: "E-Fareming",
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
                            
                      title: "E-Fareming",
                      text: "Aadharcard Number is not validate",
                      icon: "warning",
                      buttons: false,
                      timer:2000,


                          });
                                  document.getElementById("contactnumber").focus();
                                 return false;
                              }
                        }

                            
                                 </script>
                        
</head>

<body class="preload signup-page">

  
   <?php include_once('headerV.php'); ?>

    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                    <h1 class="page-title">Farmer Sign up</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>

    <section class="signup_area section--padding2">
        <div class="container">
          <a href="<?php echo site_url('Farmer/loadloginpage')?>" color="red"> <<- Back to Login</a>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                        <div class="cardify signup_form">
                            <div class="login--header">
                                <h3>Join as Farmer</h3>
                                <p>Please fill the following fields with appropriate information to register as new PocketFarms
                                    Farmer.
                                </p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">
                             <form method="post"  name="myform" enctype="multipart/form-data" onsubmit="return(validate());" action="<?php echo site_url('Farmer/addfarmer') ; ?>" >
                                <div class="form-group">
                                    <label for="urname">Your Name</label>
                                    <input id="fullname" type="text" class="text_field" placeholder="Enter your Name" name="fullname">
                                </div>

                                <div class="form-group">
                                    <label for="email_ad">Email Address</label>
                                    <input id="emailid" type="text" class="text_field" placeholder="Enter your email address" name="emailid" onblur="emailval()">
                                </div>

                                <div class="form-group">
                                    <label for="user_name">Username</label>
                                    <input id="username" type="text" class="text_field" placeholder="Enter your username..." name="username">
                                </div>

                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <textarea  id="address"placeholder="Enter your address..." name="address"></textarea>
                                </div>
                                 
                                <div class="form-group">
                                    <label for="city">City</label>
                                   <select class="form-control" id="city" name="cityid">
                                    <option value="-1">select City</option>
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
                                    <input id="aadharnumber" type="text" class="text_field" placeholder="Enter your aadharnumber..."  name="aadharnumber" onblur="adharnumval()">
                                </div>
                                <div class="form-group">
                                    <label for="aadharnumber">Contact Number</label>
                                    <input id="contactnumber" type="text" class="text_field" placeholder="Enter your Contact Number..."  name="contactnumber" onblur="contactnumval()">
                                </div>
                                 <div class="form-group">
                                    <label for="aadharnumber">Optional Number</label>
                                    <input id="optionalnumber" type="text" class="text_field" placeholder="Enter your Optional Number..."  name="optionalnumber" onblur="optinalnumval()">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="text" class="text_field" placeholder="Enter your password..." name="password">
                                </div>

                                <div class="form-group">
                                    <label for="con_pass">Confirm Password</label>
                                    <input id="con_pass" type="text" class="text_field" placeholder="Confirm password" name="cpassword" onblur="passval()">
                                </div>
                                 <div class="form-group">
                                    <label for="bio">Bio</label>
                                    <textarea name="bio" placeholder="Bio" id="bio"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="profileimage">Profile Image</label>
                                    <input id="profileimage" type="file"  name="image">
                                </div>
                                 <button class="btn btn--md btn--round register_btn" type="submit" name="submit">Register Now</button>
                                 
                              </form>
                              
                            </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
   

   <?php include_once('rbottamscriptsV.php'); ?>
    <!-- endinject -->
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:34:13 GMT -->
</html>