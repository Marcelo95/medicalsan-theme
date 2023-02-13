<?php get_header(); ?>

<section class="banner-principal fade-in scrolled">
    <a href="">
        <img src="<?php echo asset("images/banner-principal.svg"); ?>" alt="">
    </a>
</section>




<section class="content-nossas-tecologia js-scroll fade-in">
    <div class="container">

        <div class="slider-slick">
            <div class="setas slider-1-setas noselect">

                <i class="material-icons seta-esquerda" style="font-size: 36px;margin-left: -7px;">keyboard_arrow_left</i>
                <h2 class="font-2"><?php echo __("Nossas tecnologias"); ?></h2>
                <i class="material-icons seta-direita" style="font-size: 36px;margin-left: -7px;">keyboard_arrow_right</i>

            </div>

            <div class="slider-1">

                <?php
                $marcas = get_terms(array(
                    'taxonomy' => 'category',
                    'hide_empty' => false,
                    'parent' => get_cat_ID('tecnologias'),
                ));

                $marcas = array_merge([], $marcas,$marcas,$marcas,$marcas,$marcas,$marcas,$marcas,$marcas,$marcas);

                foreach ($marcas as $key => $item) {
                    $style_img_bg = asset_image_background(get_term_meta($item->term_id, 'image', true));
                    echo sprintf('<a href="%s"><div class="marcas-photo font-2" %s >%s</div></a>', esc_url(get_term_link($item)), $style_img_bg, $item->name);
                }

                ?>
            </div>


        </div>


    </div>
</section>



<section class="box-lancamento js-scroll fade-in estilo-1">
    <div class="container">
        <div class=" box-image js-scroll fade-in-bottom">
            <img src="<?php echo asset("images/produtos/omer-smart/1.svg"); ?>" alt="">
        </div>
        <div class="box-text js-scroll fade-in-bottom">
            <h4>LANÇAMENTO</h4>
            <h2>Ômer Smart</h2>
            <h5>O laser de despigmentação
                mais leve do mercado</h5>

            <a href="" class="botao-5"> Conheça </a>

        </div>

    </div>
</section>

<section class="box-lancamento js-scroll fade-in estilo-2">
    <div class="container">

        <div class="box-text js-scroll fade-in-bottom">
            <h4>LANÇAMENTO</h4>
            <h2>Hakon</h2>
            <h5>Laser 4D para todos os fototipos de pele</h5>

            <a href="" class="botao-5"> Saiba mais </a>

        </div>
        <div class=" box-image js-scroll fade-in-bottom">
            <img src="<?php echo asset("images/produtos/hakon/1.svg"); ?>" alt="">
        </div>
    </div>
</section>

<section class="box-lancamento js-scroll fade-in estilo-3">
    <div class="container">

        <div class="col white">
            <div class="box-text js-scroll fade-in-bottom">
                <h4>LANÇAMENTO</h4>
                <h2>Ultramed</h2>
                <h5>Rejuvenescimento com ultrassom</h5>

                <a href="" class="botao-5"> Confira </a>

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

                <a href="" class="botao-5"> Entenda </a>

            </div>
            <div class=" box-image js-scroll fade-in-bottom">
                <img src="<?php echo asset("images/produtos/criodermis/1.svg"); ?>" alt="">
            </div>
        </div>
    </div>
</section>



<section class="products js-scroll  fade-in scrolled">
    <div class="container">
    <h2>Novidades</h2>
        <div class="slider-slick">
            <div class="slider-2">

                <?php $itens = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'limit' => 10));
                $itens = $itens->posts;
                 $itens = array_merge([], $itens,$itens,$itens,$itens,$itens,$itens,$itens,$itens,$itens);

                foreach ($itens as $key => $item) {

                    $photo = asset_image_background(get_the_post_thumbnail_url($item->ID), true );
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
                        
                    ', $link, $photo,  $title, $desc );
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


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php get_footer(); ?>