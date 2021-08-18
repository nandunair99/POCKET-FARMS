<?php
if(!isset($_SESSION['adminname']))
        {
            redirect('admin/Admin/login');
        }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 11:14:20 GMT -->

<head>
<title>Admindek | Admin Template</title>
<?php include_once('maintopscripts.php')?>
<!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<body>

<div class="loader-bg">
	<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
	
	<div class="pcoded-container navbar-wrapper">

<?php include_once('mainheader.php')?>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<nav class="pcoded-navbar">
<?php include_once('mainnav.php')?>

</nav>
<div class="pcoded-content">

<h5>Profile</h5>

<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-body">
     <a href="<?php echo site_url('admin/Admin/adminview');?>" class="btn btn-primary btn-block waves-effect waves-light">Admin</a>
<a href="<?php echo site_url('admin/Admin/userview');?>" class="btn btn-primary btn-block waves-effect waves-light">Users</a>
  <a href="<?php echo site_url('admin/Admin/farmerview');?>" class="btn btn-primary btn-block waves-effect waves-light">Farmers</a>

<div class="row">

<div class="">
    
<div class="card sale-card">


</div>
                <div class="page-content">
                    <div class="container-fluid">

                         <!-- start page title -->
                         <div class="row align-items-center">
                         
                        </div>
                        <!-- end row -->

                        

                    </div> <!-- container-fluid -->
                </div>
</div>
</div>

<?php include_once('mainbottomscripts.php')?>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 11:21:27 GMT -->
</html>
