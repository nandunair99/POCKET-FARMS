<div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="author-info mcolorbg4">
                                <p>Total Items</p>
                                <h3><?php echo count($data2);?></h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info pcolorbg">
                                <p>Total sales</p>
                                <h3><?php echo $data4->farmersold ?></h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->
<?php foreach($data3 as $dd)
                                {?>
                        <div class="col-md-4 col-sm-4">
                            <div class="author-info scolorbg">
                                <p>Total Ratings</p>
                                <p ><?php echo round($dd->rate+1,1);?></p>
                                <?php } ?>
                                <div class="rating product--rating">
                                                                     
                                    <ul><?php for($i=0;$i<=round($dd->rate);$i++){ ?>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                    <?php }?>
                                    </ul>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->
                    </div>