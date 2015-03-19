<!-- Open Graph -->
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="article:author" content="<?php echo esc_attr( madfeed_contributors_name()) ?>" />
<meta property="og:description" content="<?php echo the_excerpt(); ?>" />
<meta property="og:url" content="<?php echo get_site_url(); ?>" />
<meta property="og:locale" content="en_US" />
<meta property="og:site_name" content="The MAD Feed" />
<?php if (vimeo_id() == TRUE) { 
			$imgid = vimeo_id();
			$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));
		?>
          	<meta property="og:image" content="<?php echo $hash[0]['thumbnail_large']; ?>" />
  <?php } else { ?>
  			<meta property="og:image" content="<?php madfeed_get_social_image(); ?>" />
  <?php } ?>

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@theMADFeed">
<meta name="twitter:creator" content="@theMADFeed">
<meta name="twitter:title" content="<?php the_title(); ?>">
<meta name="twitter:description" content="<?php the_excerpt(); ?>">
<?php if (vimeo_id() == TRUE) { 
			$imgid = vimeo_id();
			$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));
		?>
          	<meta name="twitter:image:src" content="<?php echo $hash[0]['thumbnail_large']; ?>" />
  <?php } else { ?>
  			<meta name="twitter:image:src" content="<?php madfeed_get_social_image(); ?>" />
  <?php } ?>