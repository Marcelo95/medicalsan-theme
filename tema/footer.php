<div class="link-topo">
    <a href="#" class="topo font-2">
        <i class="material-icons" style="font-size:36px">keyboard_arrow_up</i>
        Topo
    </a>
</div>

<footer>

    <div class="container">

        <div id="footer-bloco-level-0" class=" ">
            <div id="widget_1_4_footer" class="primary-sidebar widget-area" role="complementary">

                <?php if (is_active_sidebar('widget_1_3_footer')) : ?>

                    <?php dynamic_sidebar('widget_1_3_footer'); ?>

                <?php endif; ?>
            </div>


            <div id="widget_2_4_footer" class="primary-sidebar widget-area" role="complementary">

                <?php if (is_active_sidebar('widget_2_3_footer')) : ?>
                    <?php dynamic_sidebar('widget_2_3_footer'); ?>

                <?php endif; ?>
            </div>

            <div id="widget_3_4_footer" class="primary-sidebar widget-area" role="complementary">

                <?php if (is_active_sidebar('widget_3_3_footer')) : ?>
                    <?php dynamic_sidebar('widget_3_3_footer'); ?>
                <?php endif; ?>


            </div>


            <div id="widget_4_4_footer" class="primary-sidebar widget-area" role="complementary">
                <?php if (is_active_sidebar('widget_4_4_footer')) : ?>
                    <?php dynamic_sidebar('widget_4_4_footer'); ?>
                <?php endif; ?>


            </div>


            <div id="widget_5_5_footer" class="primary-sidebar widget-area" role="complementary">
                <h2><?php echo __("Redes Sociais"); ?></h2>
                <div class="list-redes image-mouseover">
                    <a href="https://www.facebook.com/medicalsanbr/?locale=pt_BR" class="btn btn-link "> <i class="fa fa-facebook-square	"></i> </a>
                    <a href="https://www.instagram.com/medicalsanbr/" class="btn btn-link"> <i class="fa fa-instagram"></i> </a>
                    <a href="https://www.youtube.com/c/MedicalSan/featured" class="btn btn-link"><i class="fa fa-youtube-play		"></i> </a>
                    <a href="https://www.linkedin.com/company/medicalsan/?originalSubdomain=br" class="btn btn-link"><i class="fa fa fa-linkedin-square	"></i> </a>
                </div>


                <h2>
                    <a class="point-marker" href="https://goo.gl/maps/tVHrkVCUxUnRbAxT9" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-map-marker	"></i> <span>Rua José Willibaldo Fell, 906 <br>
                        Bairro das Indústrias <br> Estrela/RS.</span>
                    </a>



                </h2>
                <div class="desktop">
                    <small class="d-block fa-500px mt-4" style=" font-size: 11.1158px; ">Medical San 2023. Todos Os Direitos Reservados.</small>
                </div>

            </div>

            <div id="widget_6_footer" class="primary-sidebar widget-area mobile" role="complementary" style="position: relative;">
                <small class="d-block fa-500px mt-4" style="font-size: 11.1158px;position: absolute;bottom: 0px;">Medical San 2023. <br> Todos Os Direitos Reservados.</small>
            </div>


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
</script>
<?php wp_footer(); ?>


</body>

</html>