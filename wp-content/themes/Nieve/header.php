<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nieve one page multipurpose template">
    <meta name="keywords" content="blue, green, dark, html, one page, bootstrap,design, creative, onepage, clean, modern,blog,business,parallax">
    <title>Nieve</title>
    <!--css styles-->
    <?php wp_head();?>
</head>

<body>
    <?php
    global $nieve;
    ?>



    <!-- Start scroll-top button -->
    <div id="scroll-top-area">
        <a href="#"><i class="ti-arrow-up"></i></a>
    </div>
    <!-- End scroll-top button -->


    <!--Start Header-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.html" class="logo">
                        <img src="<?php echo $nieve['logo']['url'];?>" alt="logo">
                    </a>
                </div>
                <div class="col-md-9">
                    <nav id="menu">
                    <?php
                        wp_nav_menu(array(
                            'theme_location'=>'primary_menu',
                            'fallback_cb'=>'nieve_fallback_menu',
                            'container'=>'',
                            'menu_class'=>'single-page-nav'
                        ));
            ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--End Header-->