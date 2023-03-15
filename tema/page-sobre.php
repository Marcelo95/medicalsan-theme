<?php get_header(); ?>

<section class="container main-page archive ">

	<div class="mt-5 mb-5">
		<?php custom_breadcrumbs(); ?>


		<div class="loop">
			<?php get_template_part("templates/content"); ?>
		</div>

	</div>

</section>

<?php do_action("LinhaDoTempoComponent"); ?>

<?php //do_action("NossasMarcasComponent"); ?>


<?php get_footer(); ?>