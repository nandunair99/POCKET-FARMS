<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/dt-advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 11:32:22 GMT -->
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

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>/assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>/assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/admin/');?>/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

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
<?php include_once('mainheader.php')?>


<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<nav class="pcoded-navbar">
    <?php include_once('mainnav.php')?>
</nav>

<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-inbox bg-c-blue"></i>
 <div class="d-inline">
<h5>Farmers Profile</h5>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href=""><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="<?php echo site_url('admin/Admin/profiles/')?>">Profile</a>
</li>
<li class="breadcrumb-item"><a href="<?php echo site_url('admin/Admin/farmerview/')?>">Farmer</a>
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

<div class="card">
<div class="card-header">
<h5>Farmers</h5>
</div>
<div class="card-block">
<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Farmer Id</th>
<th>Fullname</th>
<th>Username</th>
<th>CityName</th>
<th>Address</th>
<th>Aadhar No</th>
<th>EmailID</th>
<th>Contact No</th>
<th>Optional No</th>
<th>Bio</th>
<th>Profile Pic</th>
</tr>
</thead>
<tbody>
    <?php 
         foreach($farmers as $f) 
         {
      ?>
<tr>
<td><?php echo $f->farmerid?></td>
<td><?php echo $f->fullname?></td>
<td><?php echo $f->username?></td>
<td><?php echo $f->cityname?></td>
<td><?php echo $f->address?></td>
<td><?php echo $f->aadharnumber?></td>
<td><?php echo $f->emailid?></td>
<td><?php echo $f->contactnumber?></td>

<td><?php echo $f->optionalnumber?></td>
<td><?php echo $f->bio?></td>
<td><img src="<?php echo base_url('resources/shared/farmerimg/'.$f->profileimage)?>" height="75" width="75"> </td>

</tr>
<?php } ?>

</tbody>
<tfoot>
<tr>
<th>Farmer Id</th>
<th>Fullname</th>
<th>Username</th>
<th>CityId</th>
<th>Address</th>
<th>Aadhar No</th>
<th>EmailID</th>
<th>Contact No</th>
<th>Optional No</th>
<th>Bio</th>
<th>Profile Pic</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>




<script type="f6f217e02d504e1f1b978dde-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/jquery/js/jquery.min.js"></script>
<script type="f6f217e02d504e1f1b978dde-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="f6f217e02d504e1f1b978dde-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/popper.js/js/popper.min.js"></script>
<script type="f6f217e02d504e1f1b978dde-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url('resources/admin/');?>/assets/pages/waves/js/waves.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>

<script type="f6f217e02d504e1f1b978dde-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="f6f217e02d504e1f1b978dde-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/modernizr/js/modernizr.js"></script>
<script type="f6f217e02d504e1f1b978dde-text/javascript" src="<?php echo base_url('resources/admin/');?>/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="<?php echo base_url('resources/admin/');?>/assets/pages/waves/js/waves.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>

<script src="<?php echo base_url('resources/admin/');?>/bower_components/datatables.net/js/jquery.dataTables.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/assets/pages/data-table/js/jszip.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/assets/pages/data-table/js/pdfmake.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/assets/pages/data-table/js/vfs_fonts.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/bower_components/datatables.net-buttons/js/buttons.print.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/bower_components/datatables.net-buttons/js/buttons.html5.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>

<script src="<?php echo base_url('resources/admin/');?>/assets/pages/data-table/js/data-table-custom.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/assets/js/pcoded.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/assets/js/vertical/vertical-layout.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script src="<?php echo base_url('resources/admin/');?>/assets/js/jquery.mCustomScrollbar.concat.min.js" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script type="f6f217e02d504e1f1b978dde-text/javascript" src="<?php echo base_url('resources/admin/');?>/assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="f6f217e02d504e1f1b978dde-text/javascript"></script>
<script type="f6f217e02d504e1f1b978dde-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="<?php echo base_url('resources/admin/');?>assets/js/rocket-loader.min.js" data-cf-settings="f6f217e02d504e1f1b978dde-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/dt-advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 11:32:22 GMT -->
</html>
