<div class="link-topo">
    <a href="#" class="topo font-2">
        <i class="material-icons" style="font-size:36px">keyboard_arrow_up</i>
        Topo
    </a>
</div>

<footer>

    <div class="container">

        <div id="footer-bloco-level-0" class=" ">
            <div id="widget_1_3_footer" class="primary-sidebar widget-area" role="complementary">
                <h2><a href="<?php echo home_url("/"); ?>"><?php echo _("Home"); ?></a></h2>

                <?php if (is_active_sidebar('widget_1_3_footer')) : ?>

                    <?php dynamic_sidebar('widget_1_3_footer'); ?>

                <?php endif; ?>
            </div>

            <div id="widget_2_3_footer" class="primary-sidebar widget-area" role="complementary">

                <?php if (is_active_sidebar('widget_2_3_footer')) : ?>
                    <?php dynamic_sidebar('widget_2_3_footer'); ?>

                <?php endif; ?>
            </div>
            <div id="widget_2_3_footer" class="primary-sidebar widget-area" role="complementary">

                <h2><a href="<?php echo home_url("/sobre"); ?>"><?php echo _("Sobre"); ?></a></h2>
                <h2><a href="<?php echo home_url("/onde-estamos"); ?>"><?php echo _("Assistência Técnica"); ?></a></h2>
                <h2><a href="<?php echo home_url("/pos-venda"); ?>"><?php echo _("Pós-venda"); ?></a></h2>
                <h2><a href="<?php echo home_url("/blog"); ?>"><?php echo _("Blog"); ?></a></h2>

            </div>
            <div id="widget_3_3_footer" class="primary-sidebar widget-area" role="complementary">
                <h2><?php echo __("Redes Sociais"); ?></h2>
                <div class="list-redes image-mouseover">
                    <a href="https://facebook.com/medsam.oficial" class="btn btn-link "> <i class="fa fa-facebook-square	"></i> </a>
                    <a href="https://instagram.com/medsam.com.br" class="btn btn-link"> <i class="fa fa-instagram"></i> </a>
                    <a href="https://youtube.com.br/ClubeDasEmpreendedoras" class="btn btn-link"><i class="fa fa-youtube-play		"></i> </a>
                </div>
                <?php if (is_active_sidebar('widget_3_3_footer')) : ?>
                    <?php dynamic_sidebar('widget_3_3_footer'); ?>
                <?php endif; ?>

                <!-- <div class="apps">
                    <h2>Baixe o app</h2>

                    <div class="d-flex">
                    <a href="https://apps.apple.com/br/app/medical-san/id1460618465?l=en" target="_blank"> 
                        <img class="logo" src="<?php echo asset('images/apple.png?v1'); ?>" alt="Logo App Store">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.manptecnologia.medicalsanconnect&hl=pt_BR&gl=US&pli=1" target="_blank"> 
                        <img src="<?php echo asset('images/android.png?v1'); ?>" alt="Logo Google Play">
                    </a>
           
                    </div>
                </div> -->

                <h2>
                    <a class="point-marker" href="https://goo.gl/maps/tVHrkVCUxUnRbAxT9" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-map-marker	"></i> <span>386 Business Park <br>
                            Rodovia BR-386, km 357. Estrela - RS</span>
                    </a>



                </h2>
            </div>


        </div>

        <div id="footer-bloco-level-1">

            <?php echo _("Medical San 2023. Todos Os Direitos Reservados."); ?>

        </div>


    </div>

</footer>


</main>

<script src="<?php echo asset('bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo asset('js/script.js'); ?>"></script>
<script src="<?php echo asset('js/custom-animate.js'); ?>"></script>
<script>
    // Seleciona o elemento do header
    const header = document.querySelector('header');

    // Define a posição de rolagem em que a cor do header deve ser alterada
    const scrollPosition = 100;

    // Adiciona um evento de rolagem à página
    window.addEventListener('scroll', function() {
        // Verifica se a posição de rolagem é maior ou igual à posição definida
        if (window.scrollY >= scrollPosition) {
            // Se for, adiciona a classe que altera a cor do header
            header.classList.add('scroll-down');
        } else {
            // Se não for, remove a classe que altera a cor do header
            header.classList.remove('scroll-down');
        }
    });

    if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
        // Código para o Safari aqui
        window.document.body.classList.add("navegador-safari");
    }
</script>
<?php wp_footer(); ?>
</body>

</html>