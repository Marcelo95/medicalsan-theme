<?php get_header();
$current_term = get_category(get_query_var('cat'));

?>

<div class="mt-5 container desktop">
	<?php custom_breadcrumbs(); ?>
</div>


<main class="main main-categories">
	<!-- section -->
	<section class="container">


		<?php echo get_template_part(sprintf('templates/categories/%s/content', $current_term->slug)); ?>


		<?php
		$current_category = get_queried_object(); ////getting current category
		$args = array(
			'post_type' => 'produtos', // your post type,
			'orderby' => 'post_date',
			'order' => 'DESC',
			'cat' => $current_category->cat_ID // current category ID
		);
		$the_query = new WP_Query($args);
		if ($the_query->have_posts()):
			while ($the_query->have_posts()):
				$the_query->the_post();
				echo "<h2>" . the_title() . "</h2>";
				echo "<p>" . the_content() . "</p>";
			endwhile;
		endif; ?>


	</section>
	<!-- /section -->
</main>


<?php get_footer(); ?>