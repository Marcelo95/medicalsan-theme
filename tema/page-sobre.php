<?php get_header(); ?>

<section class="banner-custom">
	<div>
		<div class="image">
			<?php

			if (has_post_thumbnail()) {
				the_post_thumbnail();
			} else  { ?>


				<img class="desktop" src="<?php echo asset('images/bg-page-sobre.png'); ?>" />
				<img class="mobile" src="<?php echo asset('images/bg-page-sobre-mobile.png'); ?>" />
				
			<?php } ?>
		</div>
	</div>
</section>


<section class="main-page archive ">

	<div class="mt-5 mb-5">
		<div class="container"><?php custom_breadcrumbs(); ?></div>


		<?php do_action("MissaoVisaoValorComponent"); ?>

	</div>

</section>

<?php do_action("LinhaDoTempoComponent"); ?>

<?php do_action("NossasMarcasComponent"); ?>


<?php get_footer(); ?>