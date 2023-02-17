<?php get_header();

?>

<section class="container">

<?php if(get_search_query()) : ?>
    <h1><?php echo sprintf(__('Você pesquisou por "%s"'), get_search_query(), $wp_query->found_posts );?></h1>

<?php else:?>
    <h1>Nossos produtos</h1>
<?php endif;?>

	<span>
		<?php echo sprintf(__('Total encontrados: %s'),$wp_query->found_posts );?>
	</span>

	<div class="loop">
		<?php get_template_part('templates/loop'); ?>
	</div>



<?php the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( '&laquo; Anterior', 'textdomain' ),
    'next_text' => __( 'Próxima »', 'textdomain' ),
) ); ?>

</section>

<?php get_footer(); ?>