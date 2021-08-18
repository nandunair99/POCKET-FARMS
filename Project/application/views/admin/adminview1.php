<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 11:29:48 GMT -->
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

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url('resources/admin/');?>/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>/assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>/assets/css/pages.css">
</head>
<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

<?php include_once('mainheader.php') ?>





<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<nav class="pcoded-navbar">

<?php include_once('mainnav.php') ?>
</nav>

<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-clipboard bg-c-blue"></i>
<div class="d-inline">
<h5>Forms Validation</h5>

</div>
</div>
</div>
 <div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="<?php echo site_url("admin/Admin/index")?>"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="<?php echo site_url("admin/Admin/profiles")?>">Profiles</a>
</li>
<li class="breadcrumb-item">
<a href="#!">Forms Validation</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">

<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Basic Inputs Validation</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
  <?php foreach($profile as $p) { ?>
<form  method="post" action="<?php echo site_url('admin/Admin/updateadmin');?>" enctype="multipart/form-data" >
<div class="form-group row">
<label class="col-sm-2 col-form-label">Username:</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="user"  placeholder="Text Input Validation" value="<?php echo $p->username?>">
<span class="messages"></span>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Password</label>
<div class="col-sm-10">
<input type="password" class="form-control"  name="pass1" placeholder="Password input" value="<?php echo $p->password?>">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Repeat Password</label>
<div class="col-sm-10">
<input type="password" class="form-control"  name="pass2" placeholder="Repeat Password" value="<?php echo $p->password?>">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-10">
<input type="text" class="form-control"  name="email" placeholder="Enter valid e-mail address" value="<?php echo $p->emailid?>">
<span class="messages"></span>
</div>
</div>

<div class="row">
<label class="col-sm-2 col-form-label">Contact no</label>
<div class="col-sm-10">
<input type="text" class="form-control"  name="cno" placeholder="Enter Contactno" value="<?php echo $p->contact?>">
<span class="messages"></span>
</div>
</div>

<?php } ?>

<div class="row">
<label class="col-sm-2 col-form-label">Profile Pic</label>
<div class="col-sm-10">
<input type="file"  name="image" >
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2"></label>
<div class="col-sm-10">
<button type="submit" class="btn btn-primary m-b-0">Submit</button>
</div>
</div>

</form>

</div>
</div>



</div>
</div>
</div>

</div>
</div>
</div>
</div>

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>



<script type="b9c3b6efd2f7cafa3735273c-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/jquery/js/jquery.min.js"></script>
<script type="b9c3b6efd2f7cafa3735273c-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="b9c3b6efd2f7cafa3735273c-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/popper.js/js/popper.min.js"></script>
<script type="b9c3b6efd2f7cafa3735273c-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url('resources/admin/');?>/assets/pages/waves/js/waves.min.js" type="b9c3b6efd2f7cafa3735273c-text/javascript"></script>

<script type="b9c3b6efd2f7cafa3735273c-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="b9c3b6efd2f7cafa3735273c-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/modernizr/js/modernizr.js"></script>
<script type="b9c3b6efd2f7cafa3735273c-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="../../../../cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js" type="b9c3b6efd2f7cafa3735273c-text/javascript"></script>
<script src="../../../../cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js" type="b9c3b6efd2f7cafa3735273c-text/javascript"></script>
<script type="b9c3b6efd2f7cafa3735273c-text/javascript" src="<?php echo base_url('resources/admin/');?>/assets/pages/form-validation/validate.js"></script>

<script type="b9c3b6efd2f7cafa3735273c-text/javascript" src="<?php echo base_url('resources/admin/');?>/assets/pages/form-validation/form-validation.js"></script>
<script src="<?php echo base_url('resources/admin/');?>/assets/js/pcoded.min.js" type="b9c3b6efd2f7cafa3735273c-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/assets/js/vertical/vertical-layout.min.js" type="b9c3b6efd2f7cafa3735273c-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/assets/js/jquery.mCustomScrollbar.concat.min.js" type="b9c3b6efd2f7cafa3735273c-text/javascript"></script>
<script type="b9c3b6efd2f7cafa3735273c-text/javascript" src="<?php echo base_url('resources/admin/');?>/assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="b9c3b6efd2f7cafa3735273c-text/javascript"></script>
<script type="b9c3b6efd2f7cafa3735273c-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="<?php echo base_url('resources/admin/');?>/assets/js/rocket-loader.min.js" data-cf-settings="b9c3b6efd2f7cafa3735273c-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 11:30:05 GMT -->
</html>
