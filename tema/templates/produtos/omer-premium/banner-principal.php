<link rel="stylesheet" href="<?php _e(asset(sprintf("../templates/components/%s/style.css", "banner-principal-produtos-v1"))); ?>">

<div class="banner-content-single-produtos">

    <div class="banner-principal-v1 desktop">
        <div class="imagem-fundo-v1" style="background-image:url(<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-fundo.png?v1", get_post_field('post_name', get_post()))); ?>);"></div>

        <div class="imagem-frente-v1 js-scroll fade-in-bottom scrolled" style="background-image:url(<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-v1.png?v1", get_post_field('post_name', get_post()))); ?>);"></div>

        <div class="imagem-fundo-v1 pos-2 js-scroll fade-in-bottom scrolled" style="background-image:url(<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-v1-2.png?v1", get_post_field('post_name', get_post()))); ?>);"></div>

        <div class="imagem-frente-v1 js-scroll fade-in-bottom scrolled" style="background-image:url(<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-v1-3.png?v1", get_post_field('post_name', get_post()))); ?>);"></div>


    </div>

    <div class="mobile banner-mobile-test-fundo <?php _e($args["class"] ?? ''); ?> " style="background-image:url(<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-fundo-mobile.png?v1", get_post_field('post_name', get_post()))); ?>);">

        <div class="banner-mobile-test fade-in-bottom scrolled" style="background-image:url(<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-mobile-v1.png", get_post_field('post_name', get_post()))); ?>);"></div>


        <div class="mobile banner-mobile-test-fundo pos-2 <?php _e($args["class"] ?? ''); ?> " style="background-image:url(<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-fundo-mobile-v1.png?v1", get_post_field('post_name', get_post()))); ?>);"></div>

        <div class="banner-mobile-test fade-in-bottom scrolled" style="background-image:url(<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-mobile.png", get_post_field('post_name', get_post()))); ?>);">

            <ul id="breadcrumbs" class="breadcrumb">
                <li><a href="<?php _e(home_url("produtos")); ?>">Tecnologias</a></li>
                <li class="separator"> &gt; </li>
                <li><span><?php the_title(); ?></span></li>
            </ul>

        </div>



    </div>



</div>