<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 11:21:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Admindek | Admin Template</title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url('resources/admin/');?>assets/pages/waves/css/waves.min.css" type="text/css" media="all"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>assets/css/style.css"><link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>assets/css/pages.css">
</head>
<body themebg-pattern="theme1">


<section class="login-block">

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<form class="md-float-material form-material" method="post" action="<?php echo site_url('admin/Admin/validatelogin')?>">
<div class="text-center">
<img src="<?php echo base_url('resources/admin/');?>assets/images/logo.png" alt="logo.png">
</div>
<div class="auth-box card">
<div class="card-block">
<div class="row m-b-20">
<div class="col-md-12">
<h3 class="text-center txt-primary">Sign In</h3>
</div>
</div>
<p class="text-muted text-center p-b-5">Sign in with your Admin Account</p>
<div class="form-group form-primary">
<input type="text" name="username" class="form-control" required="" >
<span class="form-bar"></span>
<label class="float-label">Username</label>
</div>
<div class="form-group form-primary">
<input type="password" name="password" class="form-control" required="">
<span class="form-bar"></span>
<label class="float-label">Password</label>
</div>
    <?php 
         if(isset($MsgErr))
        {
     ?>                             
     <div class="form-group form-primary">
      
        <button class="btn btn-warning waves-effect waves-light"  type="submit"><i class="icon feather icon-alert-octagon bg-c-blue"></i><?php echo $MsgErr?></button>
     </div>
       <?php
        }
    ?>                                   
<div class="row m-t-25 text-left">
    <div class="col-12">

    
<div class="forgot-phone text-right float-right">
</div>

</div>
</div>
<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
</div>
</div>
</div>
</div>
<button class="btn btn-primary feather icon-home"><a href="<?php echo site_url('admin/Admin')?>">Home</a>
</button>
</form>

</div>

</div>

</div>

</div>

</section>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?php echo base_url('resources/admin/');?>assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?php echo base_url('resources/admin/');?>assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?php echo base_url('resources/admin/');?>assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?php echo base_url('resources/admin/');?>assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?php echo base_url('resources/admin/');?>assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="04655c5cd8fd55abe88acfe5-text/javascript" src="<?php echo base_url('resources/admin/');?>bower_components/jquery/js/jquery.min.js"></script>
<script type="04655c5cd8fd55abe88acfe5-text/javascript" src="<?php echo base_url('resources/admin/');?>bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="04655c5cd8fd55abe88acfe5-text/javascript" src="<?php echo base_url('resources/admin/');?>bower_components/popper.js/js/popper.min.js"></script>
<script type="04655c5cd8fd55abe88acfe5-text/javascript" src="<?php echo base_url('resources/admin/');?>bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url('resources/admin/');?>assets/pages/waves/js/waves.min.js" type="04655c5cd8fd55abe88acfe5-text/javascript"></script>

<script type="04655c5cd8fd55abe88acfe5-text/javascript" src="<?php echo base_url('resources/admin/');?>bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="04655c5cd8fd55abe88acfe5-text/javascript" src="<?php echo base_url('resources/admin/');?>bower_components/modernizr/js/modernizr.js"></script>
<script type="04655c5cd8fd55abe88acfe5-text/javascript" src="<?php echo base_url('resources/admin/');?>bower_components/modernizr/js/css-scrollbars.js"></script>
<script type="04655c5cd8fd55abe88acfe5-text/javascript" src="<?php echo base_url('resources/admin/');?>assets/js/common-pages.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="04655c5cd8fd55abe88acfe5-text/javascript"></script>
<script type="04655c5cd8fd55abe88acfe5-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="<?php echo base_url('resources/admin/');?>assets/js/rocket-loader.min.js" data-cf-settings="04655c5cd8fd55abe88acfe5-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 11:21:49 GMT -->
</html>
