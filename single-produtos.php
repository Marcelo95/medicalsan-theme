<?php get_header(); ?>

<section>
    <div class="container mt-3">
        <?php custom_breadcrumbs(); ?>



        <div class="prod-details-top">

            <div class="block-left-prod">

            <!-- TODO Finalizar slider e zoom -->

                <div class="slider-5-0">

                    <a>
                        <img src="<?php echo asset("images/prod1.png"); ?>" alt="">
                    </a>
                    <a>
                        <img src="<?php echo asset("images/prod1.png"); ?>" alt="">
                    </a>
                    <a>
                        <img src="<?php echo asset("images/prod1.png"); ?>" alt="">
                    </a>
                    <a>
                        <img src="<?php echo asset("images/prod1.png"); ?>" alt="">
                    </a>
                    <a>
                        <img src="<?php echo asset("images/prod1.png"); ?>" alt="">
                    </a>

                    <a>
                        <img src="<?php echo asset("images/prod1.png"); ?>" alt="">
                    </a>



                </div>

                <div class="slider-5">


                    <a>
                        <div class="img" <?php echo asset_image_background("images/prod1.png"); ?>> </div>
                    </a>

                    <a>
                        <div class="img" <?php echo asset_image_background("images/prod1.png"); ?>> </div>
                    </a>

                    <a>
                        <div class="img" <?php echo asset_image_background("images/prod1.png"); ?>> </div>
                    </a>

                    <a>
                        <div class="img" <?php echo asset_image_background("images/prod1.png"); ?>> </div>
                    </a>

                    <a>
                        <div class="img" <?php echo asset_image_background("images/prod1.png"); ?>> </div>
                    </a>

                    <a>
                        <div class="img" <?php echo asset_image_background("images/prod1.png"); ?>> </div>
                    </a>

                </div>



            </div>
            <div class="block-right-prod prod-desc-public">

                <p class="title-top-prod">

                    <?php
                    $posttags = get_the_terms(get_the_ID(), 'marcas');
                    if ($posttags) {
                        foreach ($posttags as $tag) {
                            echo $tag->name . ' ';
                        }
                    }
                    ?>
                </p>
                <h1><?php the_title(); ?></h1>

                <b> Código: <?php echo get_post_meta(get_the_ID(), '_metabox_for_produtos_codigo', true); ?></b>
                <small>Embalagem: #####</small>

                <a href="" class="botao-4">Ver preço</a>

            </div>


        </div>


        <div class="prod-details-bottom">
            <h2>Descrição do Produto</h2>

            <div class="mt-2 mb-5">
                <?php get_template_part("templates/content"); ?>

            </div>
        </div>


    </div>
</section>


<section class="ofertas produto-ofertas">
    <div class="container">
        <h2 class="sub-title-2"><span>Produtos relacionados</span></h2>


        <div class="slider-slick">
            <div class="slider-2">

                <?php $itens = new WP_Query(array('post_type' => 'produtos', 'post_status' => 'publish', 'limit' => 10, 'category_name' => 'mostrar-na-home'));
                foreach ($itens->posts as $key => $item) {

                    $photo = asset_image_background(get_the_post_thumbnail_url($item->ID));
                    $link = sprintf('href="%s"', get_permalink($item->ID));
                    $title = $item->post_title;
                    $desc = $item->post_excerpt;
                    $cod = get_post_meta($item->ID, '_metabox_for_produtos_codigo', true);

                    echo sprintf('
                        <a %s>
                            <div class="box-item-prod">
                                <div class="item-photo" %s ></div>
                                <span class="details_1"> %s </span>
                                <h2 class="details_2">%s </h2>
                                <span class="details_3">Cód: %s</span>
                                <button class="botao-4">Ver preço</button>
                            </div>
                        </a>
                    ', $link, $photo, $desc, $title, $cod);
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



<?php get_footer(); ?>