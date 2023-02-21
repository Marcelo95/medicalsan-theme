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
        <img class="mb-5"
            src="<?php echo asset(sprintf("../templates/produtos/%s/images/aplicadores.svg", get_post_field('post_name', get_post()))); ?>"
            alt="">

        <div class="row2">

            <div class="col-aplicador">
                <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/aplicador1.png", get_post_field('post_name', get_post()))); ?>"
                    alt="">
            </div>

            <div class="col-aplicador">
                <h2>Corporal</h2>
                <p>
                    Conta com área de 42 cm², operando no modo capacitivo, tem alta eficiência para regiões corporais

                </p>

            </div>


        </div>
        <div class="row2">
            <div class="col-aplicador">
                <h2>FACIAL</h2>
                <p>
                    Possui área de 20 cm²
                    no modo resistivo e é indicado para a face ou regiões corporais menores
                </p>

            </div>

            <div class="col-aplicador">
                <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/aplicador2.png", get_post_field('post_name', get_post()))); ?>"
                    alt="">
            </div>

        </div>
        <div class="row2">
            <div class="col-aplicador">
                <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/aplicador3.png", get_post_field('post_name', get_post()))); ?>"
                    alt="">
            </div>
            <div class="col-aplicador">
                <h2 class="linha1">INTIMY</h2>
                <p>
                    Com ponteira autoclavável é indicado para realizar radiofrequência na região íntima

                </p>
                <h2 class="linha2">ELETROPORAÇÃO</h2>
                <p>
                    Indicado para permeação de princípios ativos, contém três ponteiras de tamanhos diferentes
                </p>

            </div>

        </div>
        <div class="row2">
            <div class="col-aplicador">
                <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/aplicador4.png", get_post_field('post_name', get_post()))); ?>"
                    alt="">
            </div>
            <div class="col-aplicador">
                <h2 class="linha3 linha4"> TECAR
                    CAPACITIVO
                    E RESISTIVO</h2>
                <p>

                    Dois modelos para tratar de acordo com a área do corpo e ter contato mais próximo do paciente
                </p>


            </div>
            <div class="col-aplicador">
                <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/aplicador5.png", get_post_field('post_name', get_post()))); ?>"
                    alt="">
            </div>
        </div>

        <div class="row2">
            <div class="col-aplicador">
                <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/aplicador6.png", get_post_field('post_name', get_post()))); ?>"
                    alt="">
            </div>
            <div class="col-aplicador">
                <h2> BIPOLAR</h2>
                <p>

                    Tem duas polaridades para atingir de forma eficiente os contornos da face no tratamento de
                    radiofrequência

                </p>


            </div>
        </div>
    </div>
</section>


<section class="barras-<?php echo 'css-' . get_post_field('post_name', get_post()); ?>">
    <div class="">
        <img class="img-o-melhor imagem-fundo"
            src="<?php echo asset(sprintf("../templates/produtos/%s/images/o-melhor.svg", get_post_field('post_name', get_post()))); ?>"
            alt="">

        <div class="content-text-desc">
           <div class="container"> <h2> Faixas de onda </h2></div>
        </div>

    </div>

    <div class="barras js-scroll">
        <div class="lista l1"> <b>650 KHz</b></div>
        <div class="lista l2"> <b>1200 KHz</b></div>
        <div class="lista l3"> <b>2400 KHz</b></div>
    </div>

    <h2 class="text-center mb-5"><b>500W</b> potência</h2>
</section>