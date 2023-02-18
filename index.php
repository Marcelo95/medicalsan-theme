<?php get_header(); ?>

<section class="banner-principal">
    <a href="<?php echo home_url("produtos/omer-premium"); ?>">
        <img src="<?php echo asset("images/banner-principal.svg"); ?>" alt="">
    </a>
</section>

<?php get_template_part("templates/content"); ?>



<section class="box-lancamento js-scroll fade-in estilo-1">
    <div class="container">
        <?php if (is_active_sidebar('home_widget_1')) : ?>
            <?php dynamic_sidebar('home_widget_1'); ?>
        <?php else : ?>

            <div class=" box-image js-scroll fade-in-bottom">

                <img src="<?php echo asset("images/produtos/omer-smart/1.svg"); ?>" alt="">
            </div>
            <div class="box-text js-scroll fade-in-bottom">
                <h4>LANÇAMENTO</h4>
                <h2>Ômer Smart</h2>
                <h5>O laser de despigmentação
                    mais leve do mercado</h5>

                <a href="<?php echo home_url("produtos/omer-smart");?>" class="botao-5"> Conheça </a>

            </div>

        <?php endif; ?>



    </div>
</section>

<section class="box-lancamento js-scroll fade-in estilo-2">
    <div class="container js-scroll fade-in-bottom">

    <?php if (is_active_sidebar('home_widget_2')) : ?>
            <?php dynamic_sidebar('home_widget_2'); ?>
        <?php else : ?>
            <div class="box-text js-scroll fade-in-bottom">
            <h4>LANÇAMENTO</h4>
            <h2>Hakon</h2>
            <h5>Laser 4D para todos os fototipos de pele</h5>

            <a href="<?php echo home_url("produtos/hakon");?>" class="botao-5"> Saiba mais </a>

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
            <div class="box-text js-scroll fade-in-bottom">
                <h4>LANÇAMENTO</h4>
                <h2>Ultramed</h2>
                <h5>Rejuvenescimento com ultrassom</h5>

                <a href="<?php echo home_url("produtos/ultramed");?>" class="botao-5"> Confira </a>

            </div>
            <div class=" box-image js-scroll fade-in-bottom">
                <img src="<?php echo asset("images/produtos/ultramed/1.svg"); ?>" alt="">
            </div>
        </div>
        <div class="col black">
            <div class="box-text js-scroll fade-in-bottom">
                <h4>LANÇAMENTO</h4>
                <h2>Criodermis</h2>
                <h5>
                    Criolipólise corporal e facial com
                    placas para áreas maiores</h5>

                <a href="<?php echo home_url("produtos/criodermis");?>" class="botao-5"> Entenda </a>

            </div>
            <div class=" box-image js-scroll fade-in-bottom">
                <img src="<?php echo asset("images/produtos/criodermis/1.svg"); ?>" alt="">
            </div>
        </div>
    </div>
</section>



<section class="products box-novidades js-scroll  fade-in scrolled">
    <div class="container">
        <h2>NOVIDADES</h2>
        <div class="slider-slick">
            <div class="slider-2">

                <?php $itens = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'limit' => 10));
                $itens = $itens->posts;
                $itens = array_merge([], $itens, $itens, $itens, $itens, $itens, $itens, $itens, $itens, $itens);

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
                                <span class="details_1"> %s </span>     
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


<section class="only-text text-center js-scroll  fade-in-bottom">
    <div class="container">
        <p>
            Todos os produtos têm selos de qualidade
        </p>
        <h2>ICBR INMETRO</h2>
        <h2>ABNT</h2>
        <h2>ANVISA</h2>
    </div>
</section>

<section class="mapa-home">
    <div class="container js-scroll  fade-in-bottom">
        <div class="col">
            <div class="box-text-left m-auto me-xl-0">
                <h2>
                    <span class="maior">
                        100
                    </span>
                    distribuidores
                    pelo Brasil
                </h2>

                <a href="<?php echo home_url("contato");?>" class="botao-1">Faça parte da nossa família</a>

            </div>
        </div>
        <div class="col col-small">
            <img src="<?php echo asset("images/mapa-home.svg"); ?>" alt="Mapa">
        </div>
    </div>
</section>



<section class="products box-blog js-scroll  fade-in-bottom">
    <div class="container">
        <h2>BLOG</h2>
        <div class="slider-slick">
            <div class="slider-3">

                <?php $itens = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'limit' => 10));
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
                                    <div class="item-photo " %s ></div>
                                    <div class="all-details">
                                    <h2 class="details_2 font-2">%s <i class="material-icons">keyboard_arrow_right</i></h2>
                                    <span class="details_1"> %s </span>     
                                    </div>
                                </div>                       
                            </a>
                        
                    ', $link, $photo,  $title, $desc);
                }
                ?>


            </div>
            <div class="setas slider-3-setas noselect">
                <i class="fa fa-arrow-left  seta-esquerda"></i>
                <i class="fa fa-arrow-right seta-direita"></i>

            </div>

        </div>


    </div>
</section>




<?php get_footer(); ?>