<?php 
get_header();
global $nieve;
$prefix = '_nieve_';

?>
    <!--Start Welcome Section-->
    <section class="welcome-area" id="welcome-area">
        <div class="image-bg" id="welcome-image-area" style="background: url(<?php echo $nieve['welcome-bg']['url'];?>);">
            <div class="bg-overlay"></div>
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="welcome-text">
                                    <h1><?php echo $nieve['welcome-title'];?></h1>
                                    <p><?php echo $nieve['welcome-detail'];?></p>
                                    <a href="#" class="btn-style2 start-btn">GET STARTED</a>
                                    <a href="#" class="btn-style3 contact-btn">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Welcome Section-->

    <!--Start Services Section-->
    <section class="service padding-style1" id="service">
        <div class="service-header">
            <p class="title-small">OUR SERVICES</p>
            <h4 class="section-title">What We Offer</h4>
        </div>
        <div class="service-content">
            <div class="container">
                <div class="row">
                    <?php
                    $service_args=array(
                        'post_type'=>'service',
                        'posts_per_page'=>-1
                    );
                    $service_posts=new WP_Query($service_args);
                    if($service_posts->have_posts()){
                        while($service_posts->have_posts()){
                            $service_posts->the_post();
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="service-item">
                                    <?php 
                                    $service_icon = get_post_meta( get_the_ID(),$prefix.'service-icon', true );
                                    $service_text = get_post_meta( get_the_ID(),$prefix.'service-text', true );
                                    ?>
                                    <span><i class="<?php echo $service_icon;?>" aria-hidden="true"></i></span>
                                    <p class="content-title"><?php the_title();?></p>
                                    <p class="content-text"><?php echo $service_text;?></p>
                                </div>
                            </div>
                            <?php   
                        }
                    }
                    else{
                        echo "no post found";
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section-->

    <!--Start About Section-->
    <section class="about padding-style1" id="about">
        <div class="about-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5><?php echo $nieve['about-title'];?></h5>
                        <p><?php echo $nieve['about-detail'];?></p>
                        <ul class="about-list">
                            <li><?php echo $nieve['about-list1'];?></li>
                            <li><?php echo $nieve['about-list1'];?></li>
                            <li><?php echo $nieve['about-list1'];?></li>
                        </ul>
                        <a href="#" class="btn-style2">SEE OUR WORKS</a>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="<?php echo $nieve['about-img']['url'];?>" alt="" class="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section-->

    <!--Start Portfolio Section-->
    <section class="portfolio padding-style1" id="portfolio">
        <div class="portfolio-header">
            <p class="title-small">PORTFOLIO</p>
            <h4 class="section-title">OUR WORKS</h4>
        </div>
        <div class="portfolio-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="portfolio-content-head">
                            <ul class="controls">
                                <li class="filter" data-filter="all">ALL</li>
                                <!--<li class="filter" data-filter=".design">DESIGN</li>
                                <li class="filter" data-filter=".development">DEVELOPMENT</li>
                                <li class="filter" data-filter=".plugin">PLUGIN</li>
                                <li class="filter" data-filter=".photography">PHOTOGRAPHY</li>
                                 -->
                                 <?php
                                 $filter=get_terms('portfolio_category',array(
                                     'hide_empty'=>'false',
                                 ));
                                 foreach($filter as $fItem){
                                    echo '<li class="filter" data-filter=".'.$fItem->slug.'">'.$fItem->name.'</li>';
                                 }
                                 ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs">
                        <div class="portfolio-content-items">
                            <div class="row">
                                <?php
                                    $portfolio_args=array(
                                        'post_type'=>'portfolio',
                                        'posts_per_page'=>-1
                                    );
                                    $portfolio_posts=new WP_Query($portfolio_args);
                                    if($portfolio_posts->have_posts()){
                                        while($portfolio_posts->have_posts()){
                                            $portfolio_posts->the_post();

                                            $post_terms=get_the_terms( get_the_ID(), 'portfolio_category' );
                                            //print_r($post_terms);
                                            
                                        ?>
                                        <div class="col-md-4 mix <?php foreach ($post_terms as $key) {echo $key->slug.' ';}?>">
                                            <div class="portfolio-item">
                                                <div class="portfolio-img">
                                                    <?php the_post_thumbnail();?>
                                                </div>
                                                <div class="portfolio-overlay">
                                                    <p class="category"><?php foreach ($post_terms as $key) {echo $key->name.' ';}?></p><a href="#">
                                                        <div class="magnify-icon">
                                                            <p><span><i class="ti-link"></i></span></p>
                                                        </div>
                                                    </a>
                                                    <?php $thumb_url = get_the_post_thumbnail_url();?>
                                                    <a href="<?php echo $thumb_url;?>" data-lightbox="image-1">
                                                        <div class="magnify-icon">
                                                            <p><span><i class="ti-zoom-in"></i></span></p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                    }
                                    else{
                                        echo "no post found";
                                    }
                                    wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Portfolio Section-->


    <!--Start Team Section-->
    <section class="team padding-style1" id="team">
        <div class="team-header">
            <p class="title-small">EXPERT MEMBERS</p>
            <h4 class="section-title">OUR TEAM</h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <?php
                    $team_args=array(
                        'post_per_page'=>-1,
                        'post_type'=>'team'
                    );
                    $team_post=new WP_Query($team_args);
                    if($team_post->have_posts()){
                        while($team_post->have_posts()){
                            $team_post->the_post();
                            $team_desig=get_post_meta(get_the_ID(),$prefix.'team-desig',true);
                            $team_fb=get_post_meta(get_the_ID(),$prefix.'team-fb',true);
                            $team_tw=get_post_meta(get_the_ID(),$prefix.'team-tw',true);
                            $team_go=get_post_meta(get_the_ID(),$prefix.'team-go',true);
                            $team_ln=get_post_meta(get_the_ID(),$prefix.'team-ln',true);
                            ?>
                            <div class="item">
                                <div class="team-item">
                                    <div class="team-pic">
                                        <?php echo the_post_thumbnail();?>
                                    </div>
                                    <div class="team-detail">
                                        <div class="team-text">
                                            <h6><?php the_title();?></h6>
                                            <p><?php echo $team_desig;?></p>
                                        </div>
                                        <div class="team-icons">
                                            <a href="<?php echo $team_fb;?>"><i class="ti-facebook" aria-hidden="true"></i></a>
                                            <a href="<?php echo $team_tw;?>"><i class="ti-twitter" aria-hidden="true"></i></a>
                                            <a href="<?php echo $team_og;?>"><i class="ti-google" aria-hidden="true"></i></a>
                                            <a href="<?php echo $team_ln;?>"><i class="ti-linkedin" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }
                    else{
                        echo "no post found";
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Section-->

    <!--Start Blog Section Area-->
    <section class="blog padding-style1" id="blog">
        <div class="blog-header">
            <p class="title-small">SEE MY BLOG</p>
            <h4 class="section-title">Latest News</h4>
        </div>
        <div class="blog-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
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
                                    if($count%2!=0){
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
                                                <p class="blog-description"><?php echo nieve_excerpt(38)?></p>
                                                <a href="<?php the_permalink();?>" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <div class="blog-single-item blog-item-margin row right">
                                            <div class="blog-text col-md-12 col-lg-6">
                                                <p class="blog-title"><?php the_title()?></p>
                                                <p class="blog-detail">
                                                    <span>Date:</span><?php the_date('d-m-Y');?>
                                                    <span>|</span> Posted By <span><?php the_author();?></span>
                                                </p>
                                                <p class="blog-description"><?php echo nieve_excerpt(38)?></p>
                                                <a href="<?php the_permalink();?>" class="read-more">READ MORE</a>
                                            </div>
                                            <div class="blog-img right col-md-12 col-lg-6">
                                                <?php the_post_thumbnail();?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    $count+=1;
                                }
                            }
                        ?>
                    </div>
                </div>
                    <a href="<?php echo get_template_directory_uri().'/blog';?>" class="btn-style2 see-more-blog">See Blog Posts</a>
            </div>
        </div>
    </section>
    <!--End Blog Section Area-->


    <!--Start Client Testimonial Section Area-->
    <section class="client-testimonial padding-style1" id="client-testimonial">
        <div class="testimonial-header">
            <p class="title-small">TESTIMONIAL</p>
            <h4 class="section-title">What People Say</h4>
        </div>
        <div class="client-area">
            <div class="container">
                <div class="row">
                    <div id="owl-demo-testimonial" class="owl-carousel owl-theme">
                        <!--Start Client Single design area-->

                        <?php
                        $reviewer_args=array(
                            'post_type'=>'testimonial',
                            'posts_per_page'=>-1
                        );
                        $reviewer_posts=new WP_Query($reviewer_args);
                        if($reviewer_posts->have_posts()){
                            while($reviewer_posts->have_posts()){
                                $reviewer_posts->the_post();
                                ?>
                            <div class="item">
                                <?php
                                
                                $quote_text = get_post_meta( get_the_ID(),$prefix.'testimonial-text', true );
                                
                                ?>
                                <div class="client-img">
                                    <?php echo the_post_thumbnail('reviewer-img');?>
                                </div>
                                <div class="testimonial-content">
                                    <div class="quote-text">
                                        <p><?php echo $quote_text; ?></p>
                                        <div class="client-identity">
                                            <p class="name">- <?php the_title();?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                        }
                        else{
                            echo "no post found";
                        }
                        wp_reset_postdata();
                        ?>
                        
                        <!--End Client Single design area-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Client Testimonial Section Area-->
   
    <!--Start Contact Section-->
    <section class="contact padding-style1" id="contact">
        <div class="contact-header">
            <p class="title-small">CONTACT US</p>
            <h4 class="section-title">GET IN TOUCH</h4>
        </div>
        <div class="contact-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-detail">
                            <h6>Contact</h6>
                            <p class="contact-text"><?php echo $nieve['contact-text'];?></p>
                            <p class="adress">
                                <i class="ti-location-pin"></i>
                                <span>Address:</span>
                                <span class="adress-loc"><?php echo $nieve['address'];?></span>
                            </p>
                            <p class="phone">
                                <i class="ti-mobile"></i>
                                <span>Contact no:</span><?php echo $nieve['phn'];?>
                            </p>
                            <p class="email">
                                <i class="ti-email"></i>
                                <span>Email:</span><?php echo $nieve['email'];?>
                            </p>
                            <p>
                                <i class="ti-world"></i>
                                <span>Website:</span><a href="#"></span><?php echo $nieve['site'];?></a>
                            </p>
                            <div class="social-icons">
                                <p>Find:</p>
                                <a href="<?php echo $nieve['fb'];?>"><i class="ti-facebook" aria-hidden="true"></i></a>
                                <a href="<?php echo $nieve['tw'];?>"><i class="ti-twitter" aria-hidden="true"></i></a>
                                <a href="<?php echo $nieve['go'];?>"><i class="ti-google" aria-hidden="true"></i></a>
                                <a href="<?php echo $nieve['sp'];?>"><i class="ti-skype" aria-hidden="true"></i></a>
                                <a href="<?php echo $nieve['ln'];?>"><i class="ti-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-form">
                            <form class="contact-form-area" action="" method="post">
                                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]');?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section-->

<?php get_footer();?>