<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <meta name="keywords" content="MAD, MAD food, MAD feed, MAD Copenhagen, Food Symposium, Food, Symposium, Community, Organization, Archive" />
    
    <meta name="description" content="A community of chefs, cooks and farmers with an appetite for knowledge." />

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bookmark / Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/img/icons/bookmarks/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Open Graph Tags -->
    <?php include INC . 'open-graph.php'; ?>

    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

    <!--Google Analytics -->
    <?php include_once(INC . 'analyticstracking.php') ?>

    <!-- Hoefler -->
    <link rel="stylesheet" type="text/css" href="http://cloud.typography.com/7609154/743106/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fonts/brandon.css" />

    <?php wp_head(); ?>

    <script>
        jQuery(document).ready(function() {
            print_width();

            jQuery(window).resize(function() {
                 print_width();
            })
        })

        function print_width() {
            wWidth = jQuery(window).width();
            console.log(wWidth);
        }
    
    </script>

</head>
<body <?php body_class(); ?>>