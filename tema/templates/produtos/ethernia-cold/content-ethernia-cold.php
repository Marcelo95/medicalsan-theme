<section class="funcoes-e-indicacoes">
    <div class="container">
        <div>
            <div>
                <h2>Funções</h2>
            </div>
            <div>
                <ul>
                    <li>Criofrequência</li>
                    <li>Crioterapia</li>
                    <li>Crioterapia de contraste</li>
                    <li>Eletroporação</li>
                    <li>Radiofrequência</li>
                    <li>Tecarterapia</li>
                </ul>
            </div>
        </div>
        <div>
            <div>
                <h2>Indicações</h2>
            </div>
            <div>
                <ul>

                    <li> Celulite</li>
                    <li>Dor crônica ou aguda</li>
                    <li>Estética íntima</li>
                    <li>Estimulação de drenagem linfática</li>
                    <li>Estria</li>
                    <li>Fibromialgia</li>
                    <li>Fibrose</li>
                    <li>Flacidez tissular</li>
                    <li>Gordura localizada</li>
                    <li>Permeação de princípios ativos</li>
                    <li>Rejuvenescimento</li>
                    <li>Relaxamento muscular</li>
                    <li>Tendinite e bursite</li>

                </ul>
            </div>
        </div>
    </div>
</section>

<section class="aplicadores">

    <div class="container">
        <img class="mb-5" src="<?php echo asset(sprintf("../templates/produtos/%s/images/aplicadores.svg", get_post_field('post_name', get_post()))); ?>" alt="">

        <div class="row2">
            <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/1-row.svg", get_post_field('post_name', get_post()))); ?>" alt="">

        </div>

        <div class="row2">
            <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/2-row.svg", get_post_field('post_name', get_post()))); ?>" alt="">

        </div>

        <div class="row2">
            <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/3-row.svg", get_post_field('post_name', get_post()))); ?>" alt="">

        </div>

    </div>
</section>


<section class="barras-<?php echo 'css-' . get_post_field('post_name', get_post()); ?>">
    <div class="">
        <img class="img-o-melhor imagem-fundo" src="<?php echo asset(sprintf("../templates/produtos/%s/images/o-melhor.svg", get_post_field('post_name', get_post()))); ?>" alt="">

        <div class="content-text-desc">
            <div class="container two-h2">
                <h2> Faixas de onda </h2>
                <h2 ><b>500W</b> <span class="menor">potência</span> </h2>
            </div>
        </div>

    </div>

    <div class="barras js-scroll">
        <div class="lista l1"> <b>650 KHz</b></div>
        <div class="lista l2"> <b>1200 KHz</b></div>
        <div class="lista l3"> <b>2400 KHz</b></div>
    </div>

    <h2 class="text-center mb-5"><b>500W</b> potência</h2>
</section>