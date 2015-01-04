<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
	<header class="entry-header">

		<?php //madfeed_the_kicker(); ?>

		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h3 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h3>
		<?php endif; // is_single() ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<p><?php //entry_excerpt(); ?></p>
		</div><!-- .entry-summary -->
	<?php else : ?>
		
		<div class="entry-summary">
			<p><?php //entry_excerpt(); ?></p>
		</div><!-- .entry-summary -->

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
	  <?php madfeed_entry_meta($post->ID); ?>
	</footer><!-- .entry-meta -->

	<!-- Comments Start here -->
	<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
		<?php //comments_template(); ?>
	<?php } ?>
</article> <!-- #post -->