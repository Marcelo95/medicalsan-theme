<section class="bloco-3-text <?php echo 'css-3-' . get_post_field('post_name', get_post()); ?>">
    <div class="container">
        <div class="init-bloco-3-text">
            <div>
                <h2> Para quais tratamentos
                    é indicado? </h2>
            </div>
            <div>
                <ul>

                    <li>Celulite</li>
                    <li>Flacidez</li>
                    <li>Gordura localizada</li>
                    <li>Pós-operatório</li>
                    <li>Redução de líquidos</li>


                </ul>

            </div>
        </div>
        <div class="init-bloco-3-text">
            <div>
                <h2> Quais placas podem ser acopladas?</h2>
                <p>4 tamanho G (64 cm²)</p>
                <p>2 tamanho M (32 cm²)</p>
                <p>ERA total de até 256 cm²</p>

              


            </div>
            <div>
            <img class="imagem-fundo"
                    src="<?php echo asset(sprintf("../templates/produtos/%s/images/placas.png", get_post_field('post_name', get_post()))); ?>"
                    alt="">

            </div>
        </div>
    </div>
</section>