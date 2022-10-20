<section id="blog" class="container">
    <div class="center">
        <h2>Blogs</h2>
        <!-- <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p> -->
    </div>

    <div class="blog">
        <div class="row">
            <div class="col-md-9">
                <?php
                $i = 0;
                if (count($getAllBlogs) > 0) {
                    foreach ($getAllBlogs as $blogs) {
                ?>
                        <div class="blog-item">
                            <div class="col-sm-12">
                                <!-- <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date">07 NOV</span>
                                        <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>
                                        <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">2 Comments</a></span>
                                        <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                                    </div>
                                </div> -->

                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <a href=""><img class="img-responsive img-blog" src="<?php echo base_url() . $blogs['blog_image']; ?>" width="100%" alt="" /></a>
                                    <p><?php echo $blogs['blog_short_description']; ?></p>
                                    <a class="btn btn-primary readmore" href="blog-item.html">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--/.blog-item-->

                        <h4><?php echo $this->pagination->create_links(); ?></h4>
                <?php
                    }
                } else {
                    echo "<h4>No Blogs Found....!!!</h4>";
                }
                ?>
            </div>
            <!--/.col-md-8-->

            <aside class="col-md-3">
                <div class="widget search">
                    <form role="form">
                        <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                    </form>
                </div>
                <!--/.search-->

                


                <div class="widget categories">
                    <h3>Categories</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="blog_category">
                                <li><a href="#">Computers <span class="badge">04</span></a></li>
                                <li><a href="#">Smartphone <span class="badge">10</span></a></li>
                                <li><a href="#">Gedgets <span class="badge">06</span></a></li>
                                <li><a href="#">Technology <span class="badge">25</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.categories-->

                <div class="widget archieve">
                    <h3>Archieve</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="blog_archieve">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2013 <span class="pull-right">(97)</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2013 <span class="pull-right">(32)</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2013 <span class="pull-right">(19)</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2013 <span class="pull-right">(08)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.archieve-->

                <div class="widget tags">
                    <h3>Tag Cloud</h3>
                    <ul class="tag-cloud">
                        <li><a class="btn btn-xs btn-primary" href="#">Apple</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Barcelona</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Office</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Ipod</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Stock</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Race</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">London</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Football</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Porche</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Gadgets</a></li>
                    </ul>
                </div>
                <!--/.tags-->

                <div class="widget blog_gallery">
                    <h3>Our Gallery</h3>
                    <ul class="sidebar-gallery">
                        <li><a href="#"><img src="images/blog/gallery1.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery2.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery3.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery4.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery5.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery6.png" alt="" /></a></li>
                    </ul>
                </div>
                <!--/.blog_gallery-->
            </aside>
        </div>
        <!--/.row-->
    </div>
</section>
<!--/#blog-->