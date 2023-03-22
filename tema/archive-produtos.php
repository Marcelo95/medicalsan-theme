<?php 
do_action("add_body_class", ["category-tecnologias"]);

get_header();
$current_term = get_category(get_query_var('cat'));


$current_category = get_queried_object(); ////getting current category
$args = array(
    'post_type' => 'produtos',
    'orderby' => array( 
        'meta_value_num' => 'ASC',
        'date' => 'DESC',
    ),
    'meta_query' => array(
        'relation' => 'OR',
        array(
            'key' => 'product_priority',
            'compare' => 'EXISTS',
        ),
        array(
            'key' => 'product_priority',
            'compare' => 'NOT EXISTS',
        ),
    ),
    'post_status' => 'publish',
    'posts_per_page' => -1,
);
$the_query = new WP_Query($args);

?>

<div class="mt-1 container desktop">
    <ul id="breadcrumbs" class="breadcrumb">
        <li><a href="http://dev.medicalsan">Home</a></li>
        <li></li>
        <li class="separator"> &gt; </li>
        <li><span>Nossas Tecnologias</span></li>
    </ul>
</div>

<div class="container">

    <div class="slider-icons-categories">
        <?php


        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
                $the_query->the_post();
                $slug = basename(get_permalink());
                $title = get_the_title();
                $image_icon = asset_image_background(asset("images/no-image.svg"));
                $link = get_permalink();


                $file_exist = sprintf("images/images-categories-prods/icon-%s.png", $slug);

                if (file_exists(__DIR__ . '/assets/' . $file_exist)) {
                    $image_icon = asset_image_background(asset($file_exist));
                }

                echo sprintf('
					<div class="boxes-cats">
						<a href="%s">
							<div>
                                <div class="image-icon-cats" %s title="%s"></div>
								<h2>%s</h2>
							</div>            
						</a>                    
					</div>

				', $link, $image_icon, $title, $title);
            endwhile;
        endif; ?>




    </div>


</div>


<main class="main main-categories">
    <!-- section -->
    <section class="container">

        <h1>Nossas tecnologias</h1>


        <div class="lista-categories-prods duas-grades">
            <?php

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) :
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

                    if (!file_exists(__DIR__ . sprintf("/assets/images/images-categories-prods/png/prod-%s.png", $slug))) {
                        $image_prod = asset("/images/no-image.svg");
                        $image_background = sprintf('style="background:red;"');
                    }
                    if (!file_exists(__DIR__ . sprintf("/assets/images/images-categories-prods/logo-%s.png", $slug))) {
                        $logo_prod = "";
                    }

                    echo sprintf('
					<div class="item-%s" %s >
							<div>
                                <div class="image-prod-tec" %s></div>
							</div>
							<div class="logo-and-text">
                                <div class="logo-prod-tec" %s></div>
								<a href="%s" class="botao-5">
									Conheça
								</a>
							</div>
						
					</div>

				', $slug, $image_background, asset_image_background($image_prod), asset_image_background($logo_prod), $link);
                endwhile;
            endif; ?>


        </div>


    </section>
    <!-- /section -->
</main>


<?php get_footer(); ?>