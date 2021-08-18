<?php
if(!isset($_SESSION['adminname']))
        {
            redirect('admin/Admin/login');
        }
?>
<script type="text/javascript">
    function show()
    {
        <?php 
     if( $_SESSION['dc']=='start')
            {?>
                       swal({
                      title: " Pocket Farm!",
                      text: "Cannot delete, Category is in use by Customers.",
                      icon: "warning",
                      button: "Ok",
                          });
                    <?php  $_SESSION['dc']='no';
                     } 
                     ?>
     }
    
</script>
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
<body onload="show()">

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
<div class="page-header-title" align="center">
<i class="feather icon-inbox bg-c-blue"></i>
<div class="d-inline">
<h5 align="center">All Categories</h5>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="<?php echo site_url('admin/Admin/index')?>"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#">Category</a>
</li>

</ul>
</div>
</div>
</div>
</div>

<div class="pcoded-inner-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-body">
<div class="row">
<div class="col-sm-12">
<div class="card">

<div class="card-block">
<div class="dt-responsive table-responsive">
	 <a href="<?php echo site_url("admin/Admin/loadaddcategory")?>" class="btn btn-primary">Add Category</a>
<table id="simpletable" class="table table-striped table-bordered nowrap">
 <thead>
<tr>
<th>Category Id</th>
<th>Category Name</th>
<th>Delete</th>
<th>Update</th>
<th>Open</th>
</tr>
</thead>
<tbody>
	  <?php 
         foreach($cats as $c) 
         {
      ?>
<tr>
 <td><?php echo $c->categoryid?></td>
     <td><?php echo $c->categoryname?></td>
                     <td><a href="<?php echo site_url("admin/Admin/removecategory/$c->categoryid")?>">Delete</a></td>
                        <td><a href="<?php echo site_url("admin/Admin/loadeditcategory/".$c->categoryid)?>">Update</a></td> 
                              <td> <a href="<?php echo site_url("admin/Admin/loadalltag/".$c->categoryid)?>">Tags</a> </td>

</tr>
<?php } ?>
</tbody>

</table>
</div>
</div>
</div>
</div>
<?php include_once('mainbottomscripts.php')?>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 11:21:27 GMT -->
</html>
