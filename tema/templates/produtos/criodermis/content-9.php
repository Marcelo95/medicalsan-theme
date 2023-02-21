<section class="descricao">
    <div class="container">
        <div class="title-principal">
        <h2 class="title">7 quilos
        </h2>
        <p>
            Equipamento mais
            leve do mercado
        </p>
        </div>
        <img
            src="<?php echo asset(sprintf("../templates/produtos/%s/images/controlin.png", get_post_field('post_name', get_post()))); ?>" />

        <h2> Control In</h2>

        <p>Sensor interno de temperatura deixa o equipamento mais prático e funcional
        </p>
        <img
            src="<?php echo asset(sprintf("../templates/produtos/%s/images/security.png", get_post_field('post_name', get_post()))); ?>" />

        <h2> Segurança</h2>

        <p>Sem riscos de complicações e lesões na pele</p>
    </div>
</section>

<section class="conceito <?php echo 'css-bg-' . get_post_field('post_name', get_post()); ?>">
    <div class="container" style="background-image:url('<?php echo asset(sprintf("../templates/produtos/%s/images/bg-conceito.png", get_post_field('post_name', get_post()))); ?>')">

   <div class="row1" >
   <div class="col">
            <h2>Conceito Crioplace</h2>
        </div>
        <div class="col col-dir">
            <p>
                Maior área de tratamento
            </p>
            <p>
                Otimização de tempo 
            </p>
            <p>
                Mais segurança
            </p>
            <p>
                4 saídas permitem aplicação simultânea em 2 pessoas
            </p>

        </div>
   </div>
    </div>
</section>


<section class="slider-images-text-2-init">
    <div class="container">


        <div class="slider-images-text-2">
            <div>
                <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-1.png", get_post_field('post_name', get_post()))); ?>"
                    alt="">
                <h2>Aplicador M
                    <br>
                    <small>56 cm²</small>

                </h2>


            </div>
            <div>
                <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-2.png", get_post_field('post_name', get_post()))); ?>"
                    alt="">
                <h2>Aplicador G
                    <br>
                    <small>140 cm²</small>
                </h2>


            </div>
            <div>
                <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-3.png", get_post_field('post_name', get_post()))); ?>"
                    alt="">
                <h2>Aplicador Big Place*
                    <br>
                    <small>460 cm²</small>

                </h2>

                <p>
                    Maior cobertura do mercado é compatível com o Criodermis

                    <small>*manopla extra</small>
                </p>
            </div>
            <div>
                <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-4.png", get_post_field('post_name', get_post()))); ?>"
                    alt="">
                <h2>Aplicador Flex*
                    <br>
                    <small>75 cm²</small>
                </h2>
                <p>
                    Sua curvatura se adapta melhor a regiões como papada e braços

                    <small>*manopla extra</small>
                </p>
            </div>
        </div>


    </div>
</section>