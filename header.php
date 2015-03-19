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