<?php get_header(); ?>

<section class="page-content">

    <div class="banner-principal">
        <img class="imagem-fundo"
            src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal-fundo.svg", get_post_field('post_name', get_post()))); ?>"
            alt="">
        <img class="imagem-frente js-scroll fade-in-bottom scrolled"
            src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-principal.png", get_post_field('post_name', get_post()))); ?>"
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

<section class="links">
    <div class="container">
        <?php $text = get_post_meta(get_the_ID(), '_metabox_for_produtos_codigo', true);
        if ($text):
            ?>
            <h2>Registro Anvisa:
                <?php _e($text) ?>
            </h2>

        <?php endif; ?>

        <div class="list-links">
            <div>
                <?php $text1 = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_duvida_frequentes', true);
                if ($text1):
                    ?>

                    <a href="<?php _e($text1) ?>" target="_blank"><i class="fa fa-question-circle	"></i> Dúvidas
                        frequentes</a>

                <?php endif; ?>

                <?php $text2 = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_ficha_tecnica', true);
                if ($text2):
                    ?>

                    <a href="<?php _e($text2) ?>" target="_blank"><i class="fa fa-file-text-o"></i> Ficha Técnica</a>

                <?php endif; ?>


                <?php $text3 = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_manual_de_instrucao', true);
                if ($text3):
                    ?>

                    <a href="<?php _e($text3) ?>" target="_blank"><i class="fa fa-book	"></i> Manual de instruções</a>

                <?php endif; ?>




            </div>
            <div>


                <?php $text4 = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_assistencia_express', true);
                if ($text4):
                    ?>


                    <a href="<?php _e($text4) ?>" target="_blank"><i class="material-icons">contact_phone</i> Assistência
                        express</a>

                <?php endif; ?>

                <?php $text5 = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_guia_rapido', true);
                if ($text5):
                    ?>

                    <a href="<?php _e($text5) ?>" target="_blank"><i class="material-icons">library_books</i> Guia
                        Rápido</a>

                <?php endif; ?>
                <?php $text6 = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_videos_de_treinamento', true);
                if ($text6):
                    ?>

                    <a href="<?php _e($text6) ?>" target="_blank"><i class="fa fa-file-video-o	"></i>Vídeos de
                        treinamento</a>

                <?php endif; ?>



            </div>

        </div>

    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">####</h5>
                <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close"
                    onClick="jQuery('#exampleModal').modal('hide')">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modalBody" class="modal-body">
                <iframe id="iframeURL" allowfullscreen allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"  frameborder="0" style=" width: 100%; min-height: calc(100vh - 200px); "></iframe>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    (function ($) {



        function showPopupIframe(title = "", url = "", iconClass = "") {

            $("#exampleModalLabel").html(`<i class="${iconClass}"></i> ${title}`);

            $('#exampleModal').modal('toggle');
            $('#iframeURL').attr("src", url);

            
        }


        $(".list-links a").on("click", function(e){
            e.preventDefault();

            showPopupIframe($(this).text(), $(this).attr("href"),  $(this).find("i").attr("class") );
        })

    })(jQuery);
</script>


<?php get_footer(); ?>