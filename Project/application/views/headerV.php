 <div class="menu-area">
        <!-- start .top-menu-area -->
        <div class="top-menu-area" style="background-color: white">
            <!-- start .container -->
            <div class="container">
                <!-- start .row -->
                <div class="row">
                    <!-- start .col-md-3 -->
                    <div class="col-lg-3 col-md-3 col-6 v_middle">
                        <div class="logo">
                            <a href="<?php echo site_url('Farmer/'); ?>">
                                <img src="<?php echo base_url('resources/user/'); ?>images/logoheader.jpg" alt="logo image" class="img-fluid" style="height:100px">
                            </a>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <!-- start .col-md-5 -->
                    <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">
                        <!-- start .author-area -->
                        <div class="author-area" >
                             <?php if((empty($_SESSION['farmerid']))&&(empty($_SESSION['userid']))){?>
                            <a href="<?php echo site_url('Farmer/loadloginpage');?>" class="author-area__seller-btn inline">Become a Seller</a> <?php } ?>

                             <div class="author__notification_area">
                                <ul>
                                    <li class="has_dropdown"><br>
                                        <div class="icon_wrap">
                                            
                                        </div>

                                       
                                    </li>

                                   
                                </ul>
                            </div>
                            <!--start .author__notification_area -->

                            <!--start .author-author__info-->
                            <div class="author-author__info inline has_dropdown">
                                <div class="author__avatar">
                                   <?php if((empty($_SESSION['profileimage']))&&(empty($_SESSION['fprofileimage'])))
                                    { ?>
                                    <img src="<?php echo base_url('resources/user/images/auth.jpg')?>" height="45" width="45" style="border-radius: 50%;">
                                <?php
                                 }
                                 else if(isset($_SESSION['profileimage']))
                                    {
                                        ?>
                                    <img src="<?php echo base_url('resources/shared/customerimg/').$_SESSION['profileimage'];?>" height="45" width="45" style="border-radius: 50%;">
                                   <?php }
                                 else if(isset($_SESSION['fprofileimage']))
                                    {
                                        ?>
                                    <img src="<?php echo base_url('resources/shared/farmerimg/').$_SESSION['fprofileimage'];?>" height="45" width="45" style="border-radius: 50%;">
                                   <?php }
                                    
                                    ?>


                                </div>
                                 <div class="autor__info">
                                    <p class="name">
                                        <?php if(isset($_SESSION['username']))
                                                echo $_SESSION['username'];
                                              else if(isset($_SESSION['farmername']))
                                                echo $_SESSION['farmername']
                                        ?>
                                    </p>
                                    
                                </div>
  <!-- if either of the login done then entire dropdown displayed else only login btn displyed  -->                         
                                <div class="dropdowns dropdown--author">
                                    <?php if((!empty($_SESSION['username']))||(!empty($_SESSION['farmername'])))
                                    {?>
                                    <ul>
                                        <li>
                                            <a href="<?php if(isset($_SESSION['userid']))
                                            {echo site_url('User/profile/'.$_SESSION['userid']);}else if(isset($_SESSION['farmerid']))
                                            {echo site_url('Farmer/profile/'.$_SESSION['farmerid']);}?>">
                                                <span class="lnr lnr-user"></span>Profile</a>
                                        </li>
                                       
                                        <li>
                                            <a href="<?php 
                                               if(isset($_SESSION['username']))//if user view open and username set
                                                  echo site_url("User/logout");
                                               else if(isset($_SESSION['farmername']))//if farmer view open and farmername set
                                                   echo site_url("Farmer/logout");
                                                   ?>">
                                                <span class="lnr lnr-exit"></span>Logout</a>
                                        </li>
                                    </ul>
                                <?php }else{ ?>
                                    <ul>
                                    <li>
                                            <a href="<?php echo site_url("User/loadloginpage"); ?>">
                                                <span class="lnr lnr-exit"></span>Login</a>
                                        </li>
                                    </ul>
                                <?php } ?>
                                </div>
                            </div>
                        
                            </div>
                            <!--end /.author-author__info-->
                        </div>
                        <!-- end .author-area -->

                        <!-- author area restructured for mobile -->
                        <div class="mobile_content ">
                            <span class="lnr lnr-user menu_icon"></span>

                            <!-- offcanvas menu -->
                            <div class="offcanvas-menu closed">
                                <span class="lnr lnr-cross close_menu"></span>
                                <div class="author-author__info">
                                    <div class="author__avatar v_middle">
                                        <img src="images/usr_avatar.png" alt="user avatar">
                                    </div>
                                    <div class="autor__info v_middle">
                                        <p class="name">
                                            Jhon Doe
                                        </p>
                                        <p class="ammount">$20.45</p>
                                    </div>
                                </div>
                                <!--end /.author-author__info-->

                                <div class="author__notification_area">
                                    <ul>
                                        <li>
                                            <a href="notification.html">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-alarm"></span>
                                                    <span class="notification_count noti">25</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="message.html">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-envelope"></span>
                                                    <span class="notification_count msg">6</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="cart.html">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-cart"></span>
                                                    <span class="notification_count purch">2</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--start .author__notification_area -->

                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href="author.html">
                                                <span class="lnr lnr-user"></span>Profile</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.html">
                                                <span class="lnr lnr-home"></span> Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="dashboard-setting.html">
                                                <span class="lnr lnr-cog"></span> Setting</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <span class="lnr lnr-cart"></span>Purchases</a>
                                        </li>
                                        <li>
                                            <a href="favourites.html">
                                                <span class="lnr lnr-heart"></span> Favourite</a>
                                        </li>
                                        <li>
                                            <a href="dashboard-add-credit.html">
                                                <span class="lnr lnr-dice"></span>Add Credits</a>
                                        </li>
                                        <li>
                                            <a href="dashboard-statement.html">
                                                <span class="lnr lnr-chart-bars"></span>Sale Statement</a>
                                        </li>
                                        <li>
                                            <a href="dashboard-upload.html">
                                                <span class="lnr lnr-upload"></span>Upload Item</a>
                                        </li>
                                        <li>
                                            <a href="dashboard-manage-item.html">
                                                <span class="lnr lnr-book"></span>Manage Item</a>
                                        </li>
                                        <li>
                                            <a href="dashboard-withdrawal.html">
                                                <span class="lnr lnr-briefcase"></span>Withdrawals</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="lnr lnr-exit"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="text-center">
                                    <a href="signup.html" class="author-area__seller-btn inline">Become a Seller</a>
                                </div>
                            </div>
                        </div>
                        <!-- end /.mobile_content -->
                    </div>
                    <!-- end /.col-md-5 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->

        <!-- start .mainmenu_area -->
        <div class="mainmenu">
            <!-- start .container -->
            <div class="container">
                <!-- start .row-->
                <div class="row">
                    <!-- start .col-md-12 -->
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <!-- start mainmenu__search -->
                            <div class="mainmenu__search">
                                <form action="#">
                                    <div class="searc-wrap">
                                        
                                    </div>
                                </form>
                            </div>
                            <!-- start mainmenu__search -->
                        </div>

                        <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="has_dropdown">
                                        <a href="<?php echo site_url('Farmer/');?>">HOME</a>
                                      
                                    </li>
                                    <?php if(!empty($_SESSION['farmerid'])){?>
                                    <li class="has_dropdown">
                                        <a>Product</a>
                                        <div class="dropdowns dropdown--menu">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url('Farmer/loadupload');?>">Add Item</a>
                                                </li>
                                                
                                                <li>
                                                    <a href="<?php echo site_url('Farmer/editallproduct');?>">Edit item</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </li>
                                
                                   
                                    <?php }?>
                                   
                                    
                                    <li>
                                        <a href="<?php echo site_url('User/contact');?>">contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row-->
            </div>
            <!-- start .container -->
        </div>
        <!-- end /.mainmenu-->
    </div>