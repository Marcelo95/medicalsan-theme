<?php get_header(); ?>

<section class="container archive page-blog">

	<div class="mt-5 mb-5">
		<?php custom_breadcrumbs(); ?>

		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array('posts_per_page' => 10, 'paged' => $paged, 'post_type' => 'post');
		query_posts($args);


		?>

		<img src="<?php echo asset("images/blog.svg"); ?>" alt="" width="300px" class="mt-3 mb-3">

		<?php if (get_search_query()) : ?>
			<h1><?php echo sprintf(__('Você pesquisou por "%s"'), get_search_query(), $wp_query->found_posts); ?></h1>

		<?php else : ?>

		<?php endif; ?>

		<div class="loop">
			<?php get_template_part('templates/loop-blog'); ?>
		</div>



		<?php get_template_part('templates/pagination'); ?>
		
	
	</div>

</section>

<?php get_footer(); ?>