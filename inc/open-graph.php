<!-- Open Graph -->
  <meta property="og:locale" content="en_US" />
  <meta property="og:site_name" content="The MAD Feed" />
<?php if (is_home()) { ?>
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo wp_title(); ?>" />
  <meta property="og:description" content="MAD is a not-for-profit organization that works to expand knowledge of food to make every meal a better meal." />
  <meta property="og:url" content="<?php echo get_site_url(); ?>" />
  <meta property="og:image" content="http://www.madfeed.co/wp-content/themes/madfeed/img/illo/social.jpg"/>
<?php } else { ?>
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:description" content="<?php get_stripped_excerpt(); ?>" />
  <meta property="og:url" content="<?php the_permalink(); ?>" />
  <meta property="og:image" content="<?php madfeed_get_social_image(); ?>" />
<?php } ?>

<!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@theMADFeed">
  <meta name="twitter:creator" content="@theMADFeed">
<?php if (is_home()) { ?>
  <meta name="twitter:title" content="<?php echo wp_title(); ?>">
  <meta name="twitter:description" content="MAD is a not-for-profit organization that works to expand knowledge of food to make every meal a better meal.">
  <meta name="twitter:image:src" content="http://www.madfeed.co/wp-content/themes/madfeed/img/illo/social.jpg" />
<?php } else { ?>
  <meta name="twitter:title" content="<?php the_title(); ?>">
  <meta name="twitter:description" content="<?php get_stripped_excerpt(); ?>">
  <meta name="twitter:image:src" content="<?php madfeed_get_social_image(); ?>" />
<?php } ?>