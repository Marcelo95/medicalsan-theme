<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="container">

			<h1><?php _e( 'Categories for ' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('template/pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>