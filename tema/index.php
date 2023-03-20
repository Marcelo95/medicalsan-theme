<?php get_header(); ?>


<section class="banners-plugin-depicter">
    <?php function_exists("depicter") ? depicter("slider-home-somente-desktop") : ""; ?>
    <div class="max-width-1024">
        <?php function_exists("depicter") ? depicter("slider-home-tablet-mobile") : ""; ?>
    </div>

</section>


<?php get_template_part("templates/content-home"); ?>


<section class="box-lancamento js-scroll fade-in estilo-1 scrolled">
    <div class="container">
        <?php if (is_active_sidebar('home_widget_1')) : ?>
            <?php dynamic_sidebar('home_widget_1'); ?>
        <?php else : ?>

            <div class=" box-image js-scroll fade-in-bottom scrolled">

                <img src="<?php echo asset("images/produtos/omer-smart/1.png"); ?>" alt="">
            </div>
            <div class="box-text js-scroll fade-in-bottom scrolled">
                <h4>LANÇAMENTO</h4>
                <h2>Ômer Smart</h2>
                <h5>Laser de despigmentação com tecnologia de nanossegundos</h5>

                <a href="<?php echo home_url("produtos/omer-smart"); ?>" class="botao-5"> Conheça </a>

            </div>

        <?php endif; ?>



    </div>
</section>

<section class="box-lancamento baixo js-scroll fade-in  estilo-2">
    <div class="container js-scroll fade-in-bottom">

        <?php if (is_active_sidebar('home_widget_2')) : ?>
            <?php dynamic_sidebar('home_widget_2'); ?>
        <?php else : ?>
            <div class="box-text js-scroll fade-in-bottom">
                <h4>LANÇAMENTO</h4>
                <h2>Hakon</h2>
                <h5><span>Laser 4D para todos os fototipos de pele</span></h5>

                <a href="<?php echo home_url("produtos/hakon"); ?>" class="botao-5"> Saiba mais </a>

            </div>
            <div class=" box-image js-scroll fade-in-bottom">
                <img src="<?php echo asset("images/produtos/hakon/1.svg"); ?>" alt="">
            </div>

        <?php endif; ?>


    </div>
</section>

<section class="box-lancamento js-scroll fade-in estilo-3">
    <div class="container">

        <div class="col white">
            <div class="col-esq">
                <div class="box-text js-scroll fade-in-bottom">
                    <h4>MAIS VENDIDOS</h4>
                    <h2>Ultramed</h2>
                    <h5> <span>Rejuvenescimento com ultrassom</span> </h5>

                    <a href="<?php echo home_url("produtos/ultramed"); ?>" class="botao-5"> Confira </a>

                </div>
                <div class=" box-image js-scroll fade-in-bottom">
                    <div class="box-prod-quad" <?php echo asset_image_background(asset("images/produtos/ultramed/1.svg")); ?>> </div>
                </div>
            </div>
        </div>
        <div class="col black">
            <div class="col-dir">
                <div class="box-text js-scroll fade-in-bottom">
                    <h4>MAIS VENDIDOS</h4>
                    <h2>Criodermis</h2>
                    <h5> <span>Criolipólise corporal e facial com
                            placas para áreas maiores</span>
                    </h5>

                    <a href="<?php echo home_url("produtos/criodermis"); ?>" class="botao-5"> Entenda </a>

                </div>
                <div class=" box-image js-scroll fade-in-bottom">
                    <div class="box-prod-quad" <?php echo asset_image_background(asset("images/produtos/criodermis/1.svg")); ?>> </div>
                </div>
            </div>
        </div>
    </div>
</section>


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


<?php do_action("SelosDeQualidadeComponent");  ?>


<section class="products box-blog js-scroll  fade-in-bottom">
    <div class="container">
        <h2 class="desktop">BLOG</h2>
        <div class="slider-slick--disable">
            <div class="slider-3--disable">

                <?php $itens = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 3));
                $itens = $itens->posts;
                // $itens = array_merge([], $itens, $itens, $itens, $itens, $itens, $itens, $itens, $itens, $itens);

                foreach ($itens as $key => $item) {

                    $photo = asset_image_background(get_the_post_thumbnail_url($item->ID), true);
                    $link = sprintf('href="%s"', get_permalink($item->ID));
                    $title = $item->post_title;
                    $desc = $item->post_excerpt;
                    $cod = get_post_meta($item->ID, '_metabox_for_produtos_codigo', true);

                    echo sprintf('
                            <a %s  class="box-item-prod ">
                                <div class="area">
                                    <h2 class="mobile">BLOG</h2>
                                    <div class="item-photo " %s ></div>
                                    <div class="all-details">
                                    <label class="cats">' . implode(" ", wp_get_post_categories($item->ID, array('fields' => 'names', 'number' => 1))) . '</label>
                                    <h2 class="details_2 font-2">%s <i class="material-icons">keyboard_arrow_right</i></h2>
                                    <span class="details_1"> %s </span>     
                                    </div>
                                </div>                       
                            </a>
                        
                    ', $link, $photo,  $title, $desc);
                }
                ?>


            </div>


        </div>

        <div class="  text-center"><a class="botao-1 var-1" href="<?php echo home_url("blog"); ?>">Ver mais</a></div>
    </div>
</section>




<?php get_footer(); ?>