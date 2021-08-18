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
    <i class="feather icon-home bg-c-blue"></i>
        <div class="d-inline">
        <h5>Profiles</h5>
            <span></span>
        </div>
    </div>
    </div>
 <div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="<?php echo site_url("admin/Admin/index")?>"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="<?php echo site_url("admin/Admin/profiles")?>">Profiles</a> </li>

</ul>
</div>
</div>
</div>
</div>

    <div class="pcoded-inner-content">
        <div class="main-body"> 
            
                <div class="card sale-card" align="center">
                    <h5>Update Profile</h5>
                </div>
                  <div class="card sale-card" >
                <div class="page-content">   
                        <!-- end page title -->

                        
                                <div class="card plan-box text-center">
                                    <div class="card-body" align="center">
                                        <table >
                                             <?php foreach($profile as $p) { ?>
                                        <div >
                                            <img src="<?php echo base_url('resources/admin/images/'.$p->profilepic)?>" height="400px">
                                         
                                            
                                            <h2 class="font-size-20 mt-0"><?php echo $p->adminid?>.<?php echo $p->username?></h2>
                                            
                                            <p class="text-muted">PHP EXPERT</p>
                                            
                                            <div class="plan-icon py-3">
                                                <i class="ti-package h2 px-4 position-relative"></i>
                                            </div>
                                        </div>
                                        <div class="plan-features mb-4">
                                            <p>Email ID:<?php echo $p->emailid?></p>
                                            <p>Contact No:<?php echo $p->contact?></p>
                                           
                                        </div>
                                    </table>
                                        <div class="pt-3">
                                            <?php
                                                if($_SESSION['adminid']==$p->adminid)
                                                {
                                                    ?>
                                            <a href="<?php echo site_url('admin/Admin/adminview1/'.$p->adminid)?>" class="btn btn-primary btn-block waves-effect waves-light">update Now</a>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                          <?php  }?>
                                    </div>
                                </div>
                        </div>

                </div>

            </div>
            </div>
          
        </div>
     
     </div>   
<?php include_once('mainbottomscripts.php')?>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 11:21:27 GMT -->
</html>




