<?php global $wpdb; ?>


<?php if (realpath(__DIR__ . sprintf('/templates/produtos/%s', get_post_field('post_name', get_post()))) === false) : ?>

    <?php get_header("simple"); ?>
    <section class="container archive ">

        <div class="mt-5 mb-5">
            <?php //custom_breadcrumbs(); 
            ?>


            <div class="loop">
                <?php get_template_part('templates/content'); ?>
            </div>

        </div>

    </section>


<?php else : ?>

    <?php global $wpdb;
    get_header(); ?>
    <section class="page-content">

        <div class="banner-content-single-produtos">

            <div class="banner-principal desktop">
                <img class="imagem-fundo" src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-fundo.png?v1", get_post_field('post_name', get_post()))); ?>" alt="">
                <img class="imagem-frente js-scroll fade-in-bottom scrolled" src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal.png?v1", get_post_field('post_name', get_post()))); ?>" alt="">
            </div>



            <div class="banner-principal mobile">
                <img class="imagem-fundo" src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-fundo-mobile.png?v1", get_post_field('post_name', get_post()))); ?>" alt="">
                <img class="imagem-frente js-scroll fade-in-bottom scrolled" src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-mobile.png?v1", get_post_field('post_name', get_post()))); ?>" alt="">
            </div>


        </div>



        <?php get_template_part(sprintf("templates/produtos/%s/content-13", get_post_field('post_name', get_post()))); ?>

        <div class="container">
            <div class="text-default js-scroll fade-in-bottom">
                <?php get_template_part(sprintf("templates/produtos/%s/content", get_post_field('post_name', get_post())), "priority"); ?>
            </div>

        </div>

        <?php get_template_part(sprintf("templates/produtos/%s/content-popup-video", get_post_field('post_name', get_post()))); ?>
        <div class="container ">




            <p class="text-center mt-5 mb-5 js-scroll fade-in-bottom">
                <a href="#orcamento" class="botao-6">
                    Quero meu orçamento
                </a>

            </p>


            <?php get_template_part(sprintf("templates/produtos/content-slider-videos", get_post_field('post_name', get_post()))); ?>


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
            <?php get_template_part(sprintf("templates/produtos/%s/content-%s", get_post_field('post_name', get_post()), get_post_field('post_name', get_post()))); ?>

        </div>


        <?php get_template_part(sprintf("templates/produtos/%s/content-antes-e-depois", get_post_field('post_name', get_post()))); ?>


        <?php do_action("EntendaMaisComponent"); ?>

        <?php get_template_part(sprintf("templates/produtos/%s/content-11", get_post_field('post_name', get_post()))); ?>


        <div class="container ">
            <?php get_template_part("templates/orcamento/content"); ?>

        </div>




    </section>

    <?php do_action("LinksComponent"); ?>


<?php endif; ?>

<?php get_footer(); ?>