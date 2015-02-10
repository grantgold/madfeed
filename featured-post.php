<div class="col-xs-12 col-md-6">
	<?php if (vimeo_id() == TRUE) { 
			$imgid = vimeo_id();
			$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));
		?>
        <div class="feature-image">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $hash[0]['thumbnail_large']; ?>"></a>
        </div>
  <?php } else { ?>
  		<div class="feature-image"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
  <?php } ?>
</div>
<div class="col-xs-12 col-md-6 featured-post">
	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
	<p><?php the_excerpt(); ?></p>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
</div>