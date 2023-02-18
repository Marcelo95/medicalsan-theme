<?php get_header(); ?>

<section class="container archive page-blog">

	<div class="mt-5 mb-5">
		<?php custom_breadcrumbs(); ?>

		<div class="loop">
            <h1><?php the_title(); ?></h1>
			<?php get_template_part('templates/content'); ?>
		</div>

	</div>

</section>

<?php get_footer(); ?>