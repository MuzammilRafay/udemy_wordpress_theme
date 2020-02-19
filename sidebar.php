<!-- Sidebar
        ============================================= -->
        <div class="sidebar nobottommargin col_last clearfix">
            <div class="sidebar-widgets-wrap">
    
                <?php 
                if( is_active_sidebar( 'ju_sidebar' )){
                    dynamic_sidebar( 'ju_sidebar' ); // i have register the sidebar widgets in function.php file
                }
                 ?>
                <!-- <div class="widget clearfix">

                    <h4>Recipes of the Day</h4>
                    <div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                                    </a>
                                </div>
                                <div class="portfolio-desc center nobottompadding">
                                    <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="widget clearfix">

                    <h4>Tag Cloud</h4>
                    <div class="tagcloud">
                        <a href="#">general</a>
                        <a href="#">videos</a>
                        <a href="#">music</a>
                        <a href="#">media</a>
                        <a href="#">photography</a>
                        <a href="#">parallax</a>
                        <a href="#">ecommerce</a>
                        <a href="#">terms</a>
                        <a href="#">coupons</a>
                        <a href="#">modern</a>
                    </div>

                </div> -->

            </div>

        </div><!-- .sidebar end -->