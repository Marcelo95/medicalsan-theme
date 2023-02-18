<?php get_header(); ?>

<section class="page-content">

    <div class="banner-principal">
        <img class="imagem-fundo" src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-fundo.svg", get_post_field('post_name', get_post()))); ?>" alt="">
        <img class="imagem-frente js-scroll fade-in-bottom scrolled" src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal.svg", get_post_field('post_name', get_post()))); ?>" alt="">
    </div>


    <div class="container ">
    <div class="form-footer">
        <h2>Leve essa tecnologia até você:</h2>
    <?php echo do_shortcode('[contact-form-7 title="Formulário de contato 001"]'); ?>
    </div> 

        <?php get_template_part(sprintf("templates/produtos/%s/content",  get_post_field('post_name', get_post())),"priority"); ?>

       <p class="text-center mt-5 mb-5">
       <a href="#orcamento" class="botao-6">
            Quero meu orçamento
        </a>

       </p>
    </div>
</section>



<?php get_footer(); ?>