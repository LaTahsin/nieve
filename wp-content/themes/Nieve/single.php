<?php get_header();?>
    <!--Start Blog Introduce Area-->
    <section class="blog-introduce">
        <h3>Our Blog</h3>
    </section>
    <!--End Blog Introduce Area-->

    <!--Start Blog Detail Area-->
    <section class="blog-area padding-style1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-left-area">
                    <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post();?>
                        <div class="blog-portion">
                            <div class="single-blog-img">
                            <?php the_post_thumbnail();?>
                            </div>
                            <h5 class="single-blog-title"><?php the_title()?></h5>
                            <p class="blog-detail">
                                <span>Date:</span><?php echo get_the_date('d-m-Y');?>
                                <span>|</span> Posted By <span><?php the_author_meta('display_name', 1); ?></span>
                            </p>
                            <div class="blog-content">
                                <p><?php echo get_the_content();?></p>
                            </div>
                        </div>
                        <?php
                        }}?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-right-area">
                    <?php
                            if(!dynamic_sidebar('nieve_sidebar')){
                                echo 'widget not found';
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Blog Detail Area-->

    <!--Start Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Nieve | All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->

<?php get_footer();?>
