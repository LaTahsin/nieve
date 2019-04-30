
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
                    <div class="row">
                    <?php
                            $count=1;
                            $blog_args=array(
                                'post_type'=>'post',
                                'post_per_page'=>-1
                            );
                            $blog_post=new WP_Query($blog_args);
                            if($blog_post->have_posts()){
                                while($blog_post->have_posts()){
                                    $blog_post->the_post();
                                        ?>
                                        <div class="blog-single-item blog-item-margin row left">
                                            <div class="blog-img left col-md-12 col-lg-6">
                                                <?php the_post_thumbnail();?>
                                            </div>
                                            <div class="blog-text col-md-12 col-lg-6">
                                                <p class="blog-title"><?php the_title()?></p>
                                                <p class="blog-detail">
                                                    <span>Date:</span><?php the_date('d-m-Y');?>
                                                    <span>|</span> Posted By <span><?php the_author();?></span>
                                                </p>
                                                <p class="blog-description"><?php echo nieve_excerpt(22)?></p>
                                                <a href="<?php the_permalink();?>" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                        <?php
                                }
                            }
                        ?>
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
<?php get_footer();?>

