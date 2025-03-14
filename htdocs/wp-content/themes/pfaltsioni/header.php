<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="marquee3k.js"></script> 
    <title><?php
 
        global $page, $paged;
     
        wp_title( '|', true, 'right' );
     
        bloginfo( 'name' );
     
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
     
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'dwhite' ), max( $paged, $page ) );
 
    ?></title>
</head>
<?php $menu = wp_get_nav_menu_items(' main-menu '); ?>

<body <?php body_class(); ?>>
    <!-- start of NAVIGATION -->

    <header class="bgheader">
        <button class="hamburger hamburger--collapse d-lg-none position-fixed" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></spa>
            </span>
        </button>
        <div class="d-lg-none">
            <?php echo do_shortcode('[youtube_live_button]'); ?>
        </div>
        <!-- Mobile Navigation -->

        <div class="container-fluid d-lg-none">
            <div class="row">
                <div class="mobile-site-logo d-lg-none">
                    <a href="<?php echo site_url(); ?>"><img class="img-fluid object-fit-contain" src="<?php echo THEME_IMAGES?>/bosslots.png" alt="website-logo"></a>
                </div>
                <nav class="mobileNavigationMenu text-light d-flex position-fixed "> 
                
                    <?php 
                        wp_nav_menu( 
                            array( 
                                'menu'              =>  'main-menu',
                                'theme_location'    =>  'main-menu',
                                'depth'             =>  3,
                                // 'container'         =>  '',
                                // 'container_class'   =>  '',
                                'menu_class'        =>  'nav mobile-nav text-start',
                                'fallback_cb'       =>  false
                            )  
                        );
                    ?>
                </nav>

            </div>
        </div>

        <!-- Desktop Navigation -->

        <div class="container-fluid">
            <div class="row">
            <div class="d-none d-lg-flex">
                <?php echo do_shortcode('[youtube_live_button]'); ?>
            </div>
            <nav class="navigationMenu text-light d-none d-lg-flex position-fixed">
                <div class="site-logo">
                    <a href="<?php echo site_url(); ?>"><img class="img-fluid object-fit-contain" src="<?php echo THEME_IMAGES?>/bosslots.png" alt="website-logo"></a>
                </div>
                
                    <?php 
                        wp_nav_menu( 
                            array( 
                                'menu'              =>  'main-menu',
                                'theme_location'    =>  'main-menu',
                                'depth'             =>  3,
                                // 'container'         =>  '',
                                // 'container_class'   =>  '',
                                'menu_class'        =>  'nav d-flex flex-row text-end justify-content-end hover-underline-animation left',
                                'fallback_cb'       =>  false
                            )  
                        );
                    ?>
                </nav>
            </div>
        </div>

    </header>
<!-- end of NAVIGATION -->