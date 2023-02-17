<?php get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 10, 'paged' => $paged, 'post_type' => 'post');
query_posts($args);


?>

<section class="container archive">

	<div class="mt-5 mb-5">
	<?php if (get_search_query()) : ?>
		<h1><?php echo sprintf(__('Você pesquisou por "%s"'), get_search_query(), $wp_query->found_posts); ?></h1>

	<?php else : ?>
		<h1>Blog</h1>
	<?php endif; ?>

	<div class="loop">
		<?php get_template_part('templates/loop'); ?>
	</div>



	<?php the_posts_pagination(array(
		'mid_size'  => 2,
		'prev_text' => __('&laquo; Anterior', 'textdomain'),
		'next_text' => __('Próxima »', 'textdomain'),
	)); ?>
	</div>

</section>

<?php get_footer(); ?>