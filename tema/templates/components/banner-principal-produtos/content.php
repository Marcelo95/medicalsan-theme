<div class="banner-content-single-produtos">

    <div class="banner-principal desktop">
        <img class="imagem-fundo" src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-fundo.png?v1", get_post_field('post_name', get_post()))); ?>" alt="">
        <img class="imagem-frente js-scroll fade-in-bottom scrolled" src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal.png?v1", get_post_field('post_name', get_post()))); ?>" alt="">
    </div>

    <div class="mobile banner-mobile-test-fundo" style="background-image:url(<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-fundo-mobile.png?v1", get_post_field('post_name', get_post()))); ?>);">

        <div class="banner-mobile-test fade-in-bottom scrolled" style="background-image:url(<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-mobile.png?v1", get_post_field('post_name', get_post()))); ?>);">

            <ul id="breadcrumbs" class="breadcrumb">
                <li><a href="<?php _e(home_url("produtos")); ?>">Tecnologias</a></li>
                <li class="separator"> &gt; </li>
                <li><span><?php the_title(); ?></span></li>
            </ul>

        </div>
    </div>



</div>