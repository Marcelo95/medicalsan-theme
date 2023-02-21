<?php get_header(); ?>

<section class="page-content">

    <div class="banner-principal">
        <img class="imagem-fundo"
            src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-fundo.svg", get_post_field('post_name', get_post()))); ?>"
            alt="">
        <img class="imagem-frente js-scroll fade-in-bottom scrolled"
            src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal.svg", get_post_field('post_name', get_post()))); ?>"
            alt="">
    </div>

    <?php get_template_part(sprintf("templates/produtos/%s/content-13", get_post_field('post_name', get_post()))); ?>



    <div class="container ">


        <div class="text-default js-scroll fade-in-bottom">
            <?php get_template_part(sprintf("templates/produtos/%s/content", get_post_field('post_name', get_post())), "priority"); ?>
        </div>

        <p class="text-center mt-5 mb-5 js-scroll fade-in-bottom">
            <a href="#orcamento" class="botao-6">
                Quero meu orçamento
            </a>

        </p>

        <div class="prod-360">
            <?php get_template_part(sprintf("templates/produtos/%s/content-360", get_post_field('post_name', get_post()))); ?>
        </div>




    </div>


    <?php get_template_part(sprintf("templates/produtos/%s/content-carroussel-text", get_post_field('post_name', get_post()))); ?>


    <?php get_template_part(sprintf("templates/produtos/%s/content-14", get_post_field('post_name', get_post()))); ?>

    <?php get_template_part(sprintf("templates/produtos/%s/content-video", get_post_field('post_name', get_post()))); ?>


    <?php get_template_part(sprintf("templates/produtos/%s/content-12", get_post_field('post_name', get_post()))); ?>

    <div class="js-scroll fade-in-bottom">
    <?php get_template_part(sprintf("templates/produtos/%s/content-9", get_post_field('post_name', get_post()))); ?>

    </div>

    <div class="js-scroll fade-in-bottom">
    <?php get_template_part(sprintf("templates/produtos/%s/content-hakon", get_post_field('post_name', get_post()))); ?>

    </div>

    <div class="js-scroll fade-in-bottom">
    <?php get_template_part(sprintf("templates/produtos/%s/content-ethernia-cold", get_post_field('post_name', get_post()))); ?>

    </div>

    <div class="js-scroll fade-in-bottom">
    <?php get_template_part(sprintf("templates/produtos/%s/content-omer-premium", get_post_field('post_name', get_post()))); ?>

    </div>

    <div class="js-scroll fade-in-bottom">
    <?php get_template_part(sprintf("templates/produtos/%s/content-ultramed", get_post_field('post_name', get_post()))); ?>

    </div>

    <div class="js-scroll fade-in-bottom">
    <?php get_template_part(sprintf("templates/produtos/%s/content-omer-smart", get_post_field('post_name', get_post()))); ?>

    </div>



    <div class="js-scroll fade-in-bottom">
        <?php get_template_part("templates/produtos/content-10"); ?>
    </div>


    <?php get_template_part(sprintf("templates/produtos/%s/content-11", get_post_field('post_name', get_post()))); ?>




    <div class="container ">
        <?php get_template_part("templates/orcamento/content"); ?>

    </div>

</section>



<?php get_footer(); ?>