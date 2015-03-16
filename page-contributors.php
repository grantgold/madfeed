<?php 
/* Template Name: Contributors */
?>
<?php include('header.php'); ?>
<?php include( INC . 'navbar.php' ); ?>
<div class="container fadein">
	<div class="row">
		<div class="col-xs-12">
			<div class="row">

				<?php
				$i = 1;
				$terms = get_terms('contributors');
				   foreach ($terms as $term) {
				      $wpq = array ('taxonomy'=>'contributors','term'=>$term->slug);
				      $myquery = new WP_Query ($wpq);
				      $article_count = $myquery->post_count;

				      if ($article_count) {
				         while ($myquery->have_posts()) : $myquery->the_post();

						 get_template_part('content', 'contributors' ); // uses content-contributors.php
							
								if ($i % 4 == 0){
									echo "</div></div>";
									echo "<div class='row'><div class='col-xs-12'>";
								}

						$i++;
				         endwhile;
				      } else return;
				}
				?>

			</div>
		</div>
	</div>
</div>
<section>
	<div class="row">

		<?php include( INC . 'about-summary.php' ); ?>

	</div>
</section>

<?php include('footer.php'); ?>