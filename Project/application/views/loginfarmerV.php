<script type="text/javascript">
  function ab()
  {
    <?php if($_SESSION['ad']=="start")
    {
    ?>
   
    
     
       swal({
                            
                      title: "Pocket Farm",
                      text: "Invalid Login!",
                      icon: "warning",
                      button: false,
                      timer:2000,


                          });
        
     <?php $_SESSION['ad']='no'; } ?>

   

  }
</script>
<?php
if(isset($_SESSION['farmername']))
{
    redirect('Farmer/index');
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:35:00 GMT -->
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Pocketfarm - Login</title>

    <!-- inject:css -->
    <?php include_once('ltopscriptsV.php');?>
</head>

<body class="preload login-page" onload="ab()">

     <?php include_once('headerV.php');?>
    
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <h1 class="page-title">Farmer Login</h1>
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
            START LOGIN AREA
    =================================-->
    <section class="login_area section--padding2">
        <div class="container">
         <a href="<?php echo site_url('Farmer')?>"> <- Back to Home</a>

            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="<?php echo site_url('Farmer/validate');?>" method="post">
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Farmer! Welcome Back</h3>
                                <p>You can sign in with your username</p>
                            </div>
                            <!-- end .login_header -->
                        
                            <div class="login--form">
                                <div class="form-group">
                                    <label for="user_name">Username</label>
                                    <input id="user_name" type="text" class="text_field" placeholder="Enter your username..." name="username">
                                </div>

                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input id="pass" type="Password" class="text_field" placeholder="Enter your password..." name="password">
                                </div>

                                

                                <button class="btn btn--md btn--round" type="submit" >Login Now</button>
                               
                                <div class="login_assist">
                                    <p ><a href="<?php echo site_url('Farmer/forgot');?>">Forgot Password Or Username</a></p> 
                                    <p class="signup">Don't have an
                                        <a href="<?php echo site_url('Farmer/signup');?>">account</a>?</p>
                                </div>
                            </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
      <?php include_once('lbottamscriptsV.php');?>
    <!-- endinject -->
</body>


<!-- Mirrored from aazztech.com/demos/themes/html/martplace/dist/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 May 2020 06:35:01 GMT -->
</html>