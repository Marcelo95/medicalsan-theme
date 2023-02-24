<?php get_header(); ?>

<section class="container archive page-blog">

	<div class="mt-5 mb-5">
		<?php custom_breadcrumbs(); ?>
		

		<div class="loop">
			<?php get_template_part('templates/content'); ?>
		</div>

	</div>

</section>

<?php get_footer(); ?>