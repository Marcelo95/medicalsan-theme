<?php if( $args["first_run"] ): ?>
    <link rel="stylesheet" href="<?php _e(asset(sprintf("../templates/components/%s/style.css", basename(__DIR__)))); ?>">
<?php endif; ?>
<?php

$itens = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'limit' => 10, 'tax_query' => array(
    array(
        'taxonomy' => 'post_tag',
        'field'    => 'name',
        'terms'    => 'novidades',
    ),
),));
$itens = (array) $itens->posts;

if (count($itens)) : ?>
 

    <section class="products box-novidades js-scroll  fade-in scrolled">

        <div class="container">
        <h2>NOVIDADES</h2>
            <div class="slider-slick">
                <div class="slider-2">

                    <?php

                    foreach ($itens as $key => $item) {

                        $photo = asset_image_background(get_the_post_thumbnail_url($item->ID), true);
                        $link = sprintf('href="%s"', get_permalink($item->ID));
                        $title = $item->post_title;
                        $desc = $item->post_excerpt;
                        $cod = get_post_meta($item->ID, '_metabox_for_produtos_codigo', true);

                        echo sprintf('
                            <a %s  class="box-item-prod ">
                                <div class="item-photo " %s ></div>
                                <div class="all-details">
                                <h2 class="details_2 font-2">%s <i class="material-icons">keyboard_arrow_right</i></h2>   
                                </div>
                            </a>
                        
                    ', $link, $photo,  $title, $desc);
                    }
                    ?>


                </div>
                <div class="setas slider-2-setas noselect">
                    <i class="fa fa-arrow-left  seta-esquerda"></i>
                    <i class="fa fa-arrow-right seta-direita"></i>

                </div>

            </div>

        </div>

    </section>

<?php endif; ?>
