<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="Keywords">
    <meta name="author" content="Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <title><?php echo (wp_title()) ? : 'Local Online Doctor Visits'; ?> - <?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <span class="heading"><i class="fa fa-plus-square" aria-hidden="true"></i> Telavice</span>
                </div>
            </div>
            <div class="col-md-7">
	            <?php /** Pull's in the navigation */ ?>
	            <?php require_once( THEME_DIR . '/theme-parts/nav.php' ); ?>
            </div>
            <div class="col-md-2 action">
                <button type="button" id="start-visit-btn" class="btn btn-outline-secondary green">Start Online Visit</button>
            </div>
        </div>
    </div>
    <?php /** Pull's in the navigation */ ?>
    <?php require_once( THEME_DIR . '/theme-parts/nav.php' ); ?>
</header>



