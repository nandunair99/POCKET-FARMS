 <aside class="sidebar sidebar_author">
                       
                        <!-- end /.author-card -->

                        <div class="sidebar-card author-menu">
                            <ul>
                                <li>
                                    <a href="<?php if(isset($_SESSION['userid']))
                                            {echo site_url('User/profile/'.$_SESSION['userid']);}
                                            else if(isset($_SESSION['farmerid']))
                                            {echo site_url('Farmer/profile/'.$_SESSION['farmerid']);}?>" class="active">Profile</a>
                                </li>
                                 <li>
                                    <a href="<?php if(isset($_SESSION['userid']))
                                            {echo site_url('User/editprofile');}
                                            else if(isset($_SESSION['farmerid']))
                                            {echo site_url('Farmer/editprofile');}?>
                                   ">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="<?php if(isset($_SESSION['userid']))
                                            {echo site_url('User/editprofileimage');}
                                            else if(isset($_SESSION['farmerid']))
                                            {echo site_url('Farmer/editprofileimage');}?>
                                   
                                            ">Edit ProfileImage</a>
                                </li>
                                <li><?php
                                    if(isset($_SESSION['farmerid']))
                                    {?>
                                        <a href="<?php echo site_url('Farmer/timeline');?>">Timeline</a>
                            <?php   }
                                    else if(isset($_SESSION['userid']))
                                    {?>
                                          <a href="<?php echo site_url('User/timeline');?>">My Basket</a>
                            <?php   }
                                    ?>
                                    
                                </li><?php
                                if(isset($_SESSION['farmerid']))
                                    {?>
                                    <li>
                                    <a href="<?php echo site_url('Farmer/loadreview/'.$_SESSION['farmerid'])?>">Customer Reviews</a>
                                    </li>
                            <?php   }?>
                               
                               
                            </ul>
                        </div>
                        <!-- end /.author-menu -->


                    </aside>