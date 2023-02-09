<?php get_header(); ?>

<section class="title js-scroll fade-in-bottom scrolled">
    <h1 class="header-title font-1">O start do seu sucesso!</h1>
</section>


<section class="products js-scroll  fade-in scrolled">
    <div class="container">

        <div class="slider-slick">
            <div class="slider-2">

                <?php $itens = new WP_Query(array('post_type' => 'produtos', 'post_status' => 'publish', 'limit' => 10, 'category_name' => 'tecnologias'));
                $itens = $itens->posts;
               // $itens = array_merge([], $itens,$itens,$itens,$itens,$itens,$itens,$itens,$itens,$itens);

                foreach ($itens as $key => $item) {

                    $photo = asset_image_background(get_the_post_thumbnail_url($item->ID));
                    $link = sprintf('href="%s"', get_permalink($item->ID));
                    $title = $item->post_title;
                    $desc = $item->post_excerpt;
                    $cod = get_post_meta($item->ID, '_metabox_for_produtos_codigo', true);

                    echo sprintf('
                        
                            <div class="box-item-prod ">
                                <div class="item-photo " %s ></div>
                                <div class="all-details">
                                <h2 class="details_2 font-2">%s </h2>
                                <span class="details_1"> %s </span>     
                                <a %s class="botao-1">Confira</a>
                                </div>
                            </div>
                        
                    ', $photo,  $title, $desc, $link);
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


                foreach ($marcas as $key => $item) {
                    $style_img_bg = asset_image_background(get_term_meta($item->term_id, 'image', true));
                    echo sprintf('<a href="%s"><div class="marcas-photo font-2" %s >%s</div></a>', esc_url(get_term_link($item)), $style_img_bg, $item->name);
                }

                ?>
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