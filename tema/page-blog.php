<?php get_header("blog"); ?>

<section class="archive page-blog">

	<div class="content-header-blog">
		<div class="container">
		<?php custom_breadcrumbs(); ?>

		<h1 class="title-blog">Blog</h1>
		<form action="<?php echo home_url(); ?>" class="input-group my-3 ">
			<input name="s" class="form-control rounded-start" type="text" placeholder="Pesquisar por...">
			<input type="hidden" value="post" name="post_type" id="post_type" />


			<button type="submit" class="style-hidden-button"><i class="material-icons position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3">search</i></button>

		</form>

		</div>
	</div>

	<div class="container">
		<div class="mt-5 mb-5">
		

			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array('s' => get_query_var('s'),'posts_per_page' => 10, 'paged' => $paged, 'post_type' => 'post');
			query_posts($args);


			?>


			<?php if (get_search_query()) : ?>
				<h1><?php echo sprintf(__('Você pesquisou por "%s"'), get_search_query(), $wp_query->found_posts); ?></h1>

			<?php else : ?>

			<?php endif; ?>

			<div class="loop">
				<?php get_template_part('templates/loop-blog'); ?>
			</div>



			<?php get_template_part('templates/pagination'); ?>


		</div>

	</div>
</section>

<?php get_footer(); ?>