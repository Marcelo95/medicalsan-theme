<?php get_header(); ?>

<section class="container archive">

	<div class="mt-5 mb-5">
	<h1><?php echo sprintf(__('Você pesquisou por "%s"'), get_search_query(), $wp_query->found_posts); ?></h1>
	<span>
		<?php echo sprintf(__('Total encontrados: %s'), $wp_query->found_posts); ?>
	</span>

	<div class="loop">
		<?php get_template_part('templates/loop'); ?>
	</div>

	<?php get_template_part('templates/pagination'); ?>
	</div>

</section>

<?php get_footer(); ?>