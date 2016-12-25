<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package regentspark
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Regent's Park</title>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/swiper.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/app.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-unstyled list-inline social-icons">
                        <li class="pull-left nav-toggle hidden-lg"><a href="#"><span class="fa fa-align-justify"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fa fa-pinterest-p"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fa fa-google-plus"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fa fa-rss"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-6 hidden-xs">
                    <ul class="list-unstyled list-inline pull-right top-menu">
                        <li><a href="#">عربى</a></li>
                        <li><span>join Newsletter</span>
                            <form class="" action="#" method="post">
                                <input type="text" name="">
                                <button type="submit"><span class="glyphicon glyphicon-triangle-left"></span></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!--// header -->

        <!-- logo -->
        <div class="container-fluid logo">
            <div class="row">
                <div class="col-md-12">
                    <a href="#" class="pull-left"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" width="100" alt="logo"></a>
                </div>
            </div>
        </div>
        <!--// logo -->
