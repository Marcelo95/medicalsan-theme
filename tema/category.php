<?php get_header();
$current_term = get_category(get_query_var('cat'));

$current_category = get_queried_object(); ////getting current category
$args = array(
	'post_type' => 'produtos',
	// your post type,
	'orderby' => 'title',
	'order' => 'ASC',
	'cat' => $current_category->cat_ID // current category ID
);
$the_query = new WP_Query($args);

?>

<div class="mt-5 container desktop">
	<?php custom_breadcrumbs(); ?>
</div>


<div class="slider-icons-categories">
			<?php


			if ($the_query->have_posts()):
				while ($the_query->have_posts()):
					$the_query->the_post();
					$slug = basename(get_permalink());
					$title = get_the_title();
					$image_icon = asset("images/no-image.svg");
					$link = get_permalink();


					$file_exist = sprintf("images/images-categories-prods/icon-%s.png", $slug);

					if (file_exists(__DIR__ . '/assets/' . $file_exist)) {
						$image_icon = asset($file_exist);
					}

					echo sprintf('
					<div class="boxes-cats">
						<a href="%s">
							<div>
								<img src="%s"  alt="%s">
								<h2>%s</h2>
							</div>            
						</a>                    
					</div>

				', $link, $image_icon, $title, $title);
				endwhile;
			endif; ?>


			

		</div>


<main class="main main-categories">
	<!-- section -->
	<section class="container">


		<?php echo get_template_part(sprintf('templates/categories/%s/content', $current_term->slug)); ?>

		<div class="lista-categories-prods">
			<?php

			if ($the_query->have_posts()):
				while ($the_query->have_posts()):
					$the_query->the_post();
					$slug = basename(get_permalink());
					$image_prod = asset(sprintf("images/images-categories-prods/png/prod-%s.png", $slug));
					$logo_prod = asset(sprintf("images/images-categories-prods/logo-%s.png", $slug));
					$link = get_permalink();

					$image_background = "";

					$file_exist = sprintf("images/images-categories-prods/bg-%s.png", $slug);

					if (file_exists(__DIR__ . '/assets/' . $file_exist)) {
						$image_background = sprintf('style="background-image:url(%s);"', asset($file_exist));
					}

					echo sprintf('
					<div class="item-%s" %s >
							<div>
								<img class="imagem-frente js-scroll fade-in-bottom scrolled" src="%s" >
							</div>
							<div class="logo-and-text">
								<img class="imagem-frente js-scroll fade-in-bottom scrolled" src="%s">
								<a href="%s" class="botao-5">
									Conheça
								</a>
							</div>
						
					</div>

				', $slug, $image_background, $image_prod, $logo_prod, $link);
				endwhile;
			endif; ?>


		</div>



	</section>
	<!-- /section -->
</main>


<?php get_footer(); ?>