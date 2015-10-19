<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inkbrain
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--BOOTSTRAP CORE CSS-->
<!-- core CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.min.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/prettyPhoto.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/main.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/responsive.css" rel="stylesheet">
       
<link rel="shortcut icon" href="/assets/images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/assets/images/ico/apple-touch-icon-57-precomposed.png">    

<?php wp_head(); ?>
    
<!--[if lt IE 9]>
<script src="/assets/js/html5shiv.js"></script>
<script src="/assets/js/respond.min.js"></script>
<![endif]-->
    
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ib' ); ?></a>
    
<!--HEADER SECTION =========================================================================================================-->  

<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number"><p><i class="fa fa-phone-square"></i>  +91 7837 222 917</p></div>
                </div>
                <div class="col-sm-6 col-xs-8">
                   <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/hashtag/ink_Brain?src=hash"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                        <div class="search">
                            <form role="form">
                                <input type="text" class="search-form" autocomplete="on" placeholder="Search">
                                <i class="fa fa-search"></i>
                            </form>
                       </div>
                   </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand img img-responsive" href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png" alt="IB Logo"></a>
            </div>

    <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'container'         => 'nav',
            'container_class'   => 'navbar-collapse collapse navbar-right',
            'menu_class'        => 'nav navbar-nav'

        ));
    ?>

        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->

<!--END OF HEADER SECTION =========================================================================================================-->  