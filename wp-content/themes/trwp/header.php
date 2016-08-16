<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html <?php language_attributes(); ?>>
    <head>
        <title><?php wp_title('');?></title><meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
            <script src="scripts/jquery-1.9.1.min.js"></script> 
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!---header--->
        <header>
            <!--start nav-->
            <nav class="navbar navbar-default">
                <div class="fluid-container">
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo esc_url(home_url()); ?>" class="navbar-brand"><?php bloginfo('name');?></a>

                    </div>
                    <div class="collapse navbar-collapse"> 
                         <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        '       container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
                    </div>
                </div> <!--end of navbar links-->
            </nav>
            <!--end nav-->
            <!--featured Section of header-->
            <div class="container-fluid">
                <div class="row feature">
                    <img src="<?php header_image(); ?>" alt="header" class="img-responsive" />
                    <div class="feature-text col-xs-12 col-sm-8 col-sm-offset-4 col-lg-6">
                        <p> 
                            <!---this is our custom function to display the text on header according to the selected page--->
                            <?php page_feature_text();?>
                        </p>
                        
                           
                    </div><!-- end of feature text-->
                </div>
            </div>

        </header>
        <!--end of featured Section of header-->
