<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
	<header id="post-title" class="entry-header">

		<?php //madfeed_the_kicker(); ?>

		<?php if ( is_single() ) : ?>
		<h1 class="entry-title hidden-xs"><?php the_title(); ?></h1>
		<?php else : ?>
		<h2 class="entry-title hidden-xs">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
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

		<div class="entry-content blogpost">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	<?php endif; ?>

	<!-- Comments Start here -->
	<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
		<?php //comments_template(); ?>
	<?php } ?>
</article> <!-- #post -->