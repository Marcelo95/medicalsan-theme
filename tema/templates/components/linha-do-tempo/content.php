<?php if ($args["first_run"]) : ?>
    <link rel="stylesheet" href="<?php _e(asset(sprintf("../templates/components/%s/style.css", basename(__DIR__)))); ?>">
<?php endif; ?>
<?php


$linha_do_tempo = [
    [
        "ano" => 1994,
        "foto" => "1994.png",
        "texto" => "Na garagem de casa, Mauro A.N. dos Santos e a esposa, Ivanir, abrem a empresa Vitória Therapeutic, de compra e revenda de equipamentos ortopédicos e de fisioterapia. "
    ],
    [
        "ano" => 2013,
        "foto" => "2013.png",
        "texto" => "Com muita fé, trabalho e dedicação, surge a Medical San, uma fábrica no segmento de produtos para saúde. O San é uma referência ao sobrenome dos fundadores.
        "
    ],    [
        "ano" => 2014,
        "foto" => "2014.png",
        "texto" => "Além de mudar a sede para a cidade vizinha, a Medical San conquista as certificações do Inmetro e da Anvisa, iniciando um ousado projeto de expansão

        "
    ],
    [
        "ano" => 2017,
        "foto" => "2017.png",
        "texto" => "É lançado o Criodermis®,
        a maior revolução em criolipólise que já existiu no segmento. Rapidamente se torna um sucesso de vendas no Brasil.
        "
    ],
    [
        "ano" => 2019,
        "foto" => "2019.png",
        "texto" => "
        A Medical San começa a participar de grandes eventos e congressos nacionais e internacionais, expandindo sua atuação.

        "
    ],
    [
        "ano" => 2020,
        "foto" => "2020.png",
        "texto" => "
        Foi criada a Linha Smart®, com produtos compactos e de fácil transporte, além do conceito Black Experience, com tecnologias de altíssimo nível.

        "
    ],
    [
        "ano" => 2020,
        "foto" => "2020.png",
        "texto" => "
        Foi criada a Linha Smart®, com produtos compactos e de fácil transporte, além do conceito Black Experience, com tecnologias de altíssimo nível.

        "
    ],
    [
        "ano" => 2021,
        "foto" => "2021.png",
        "texto" => "
        O lançamento do Ultramed® eleva a Medical San ao patamar das maiores e melhores fabricantes de equipamentos médicos e estéticos do Brasil.

        "
    ],
    [
        "ano" => 2022,
        "foto" => "2022.png",
        "texto" => "
        A empresa conquista a certificação MDSAP, que a habilita a produzir equipamentos Classe III. O Hakon®, laser 4D para epilação, é apresentado. "
    ],

    [
        "ano" => 2022,
        "foto" => "2022-1.png",
        "texto" => "É lançado o Ômer Premium e o Ômer Smart, equipamentos de alta tecnologia para despigmentação e remoção de tatuagens."
    ],
    [
        "ano" => 2022,
        "foto" => "2022-2.png",
        "texto" => "No mesmo ano, é lançada uma nova marca, a MedStart®."
    ],
    [
        "ano" => 2022,
        "foto" => "2022-3.png",
        "texto" => "A atriz e apresentadora Mariana Rios vira embaixadora do Grupo Medical San, que fica entre as 5 empresas que mais crescem no Brasil no ranking da Exame."
    ],
    [
        "ano" => 2022,
        "foto" => "2022-4.png",
        "texto" => "Como coroamento do ano de 2022, em dezembro foi inaugurada a nova sede do Grupo Medical San, no 386 Business Park."
    ],

]; ?>


<section class="content-linha-do-tempo <?php echo strpos(strtolower(wp_get_theme()->get("Name")), "san") ? "theme-medicalsan" : ""; ?>">

    <div class="title-and-buttons" style="padding-left: 20%;">


        <h2>Nossa trajetória</h2>

        <div class="buttons-linhas-do-tempo">
            <button type="button" onclick="move('left')"> <i class="fa fa-arrow-left"></i> </button>
            <button type="button" onclick="move('right')"> <i class="fa fa-arrow-right"></i> </button>
        </div>

    </div>


    <div class="sombras-left-right">
        <div id="linha-scroll" class="linha-scroll">
            <div id="init-linha-do-tempo" class="init-linha-do-tempo">

                <?php foreach ($linha_do_tempo as $key => $v) { ?>
                    <div class="linha-item">
                        <div class="item_top">
                            <img src="<?php _e(asset(sprintf("../templates/components/%s/images/%s", basename(__DIR__), $v["foto"]))); ?>" width="332" height="188">
                        </div>
                        <div class="item_middle">
                            <?php _e($v["ano"]); ?>

                            <div class=" text-mobile mobile">
                                <?php _e($v["texto"]); ?>

                            </div>
                        </div>
                        <div class="item_bottom">
                            <?php _e($v["texto"]); ?>

                        </div>

                    </div>


                <?php } ?>



            </div>

        </div>
    </div>

    <div class="slidecontainer text-center">
        <input type="range" min="1" max="100" value="0" class="slider" id="myRange">
    </div>

    <script>
        if (/Mobi/i.test(window.navigator.userAgent) == false) {
            var startX;
            var scrollLeft;
            var isDragging = false;
            var minhaDiv = document.getElementById("linha-scroll");
            var meuRange = document.getElementById("myRange");

            meuRange.addEventListener("input", function() {
                var porcentagem = this.value;
                var larguraContainer = minhaDiv.scrollWidth - minhaDiv.clientWidth;
                var scrollPosicao = (porcentagem / 100) * larguraContainer;
                minhaDiv.scrollLeft = scrollPosicao;

            });

            // adiciona os listeners de eventos
            minhaDiv.addEventListener("mousedown", function(e) {
                startX = e.pageX - minhaDiv.offsetLeft;
                scrollLeft = minhaDiv.scrollLeft;
                isDragging = true;
                if (e.target.tagName === "A") {
                    e.preventDefault(); // previne a ação padrão do link
                }
            });

            minhaDiv.addEventListener("touchstart", function(e) {
                startX = e.touches[0].pageX - minhaDiv.offsetLeft;
                scrollLeft = minhaDiv.scrollLeft;
                isDragging = true;
                if (e.target.tagName === "A") {
                    e.preventDefault(); // previne a ação padrão do link
                }
            });

            minhaDiv.addEventListener("mousemove", function(e) {
                if (!isDragging || e.target.tagName === "A") return;
                e.preventDefault();
                var x = e.pageX - minhaDiv.offsetLeft;
                var walk = (x - startX) * 2; // aumenta a velocidade da rolagem
                minhaDiv.scrollLeft = scrollLeft - walk;

                var larguraContainer = minhaDiv.scrollWidth - minhaDiv.clientWidth;
                var porcentagem = (minhaDiv.scrollLeft / larguraContainer) * 100;

                meuRange.value = Math.round(porcentagem);

            });

            minhaDiv.addEventListener("touchmove", function(e) {
                if (!isDragging || e.target.tagName === "A") return;
                e.preventDefault();
                var x = e.touches[0].pageX - minhaDiv.offsetLeft;
                var walk = (x - startX) * 2; // aumenta a velocidade da rolagem
                minhaDiv.scrollLeft = scrollLeft - walk;


                var larguraContainer = minhaDiv.scrollWidth - minhaDiv.clientWidth;
                var porcentagem = (minhaDiv.scrollLeft / larguraContainer) * 100;

                meuRange.value = Math.round(porcentagem);

            });

            minhaDiv.addEventListener("mouseup", function() {
                isDragging = false;
            });

            minhaDiv.addEventListener("touchend", function() {
                isDragging = false;
            });

            function move(direction) {
                var andar = Math.floor((minhaDiv.scrollWidth - minhaDiv.clientWidth) * 0.2);
                console.log(andar)
                switch (direction) {
                    case "left":
                        minhaDiv.scrollTo({
                            left: minhaDiv.scrollLeft - andar,
                            top: 0,
                            behavior: 'smooth'
                        })
                        break;
                    case "right":
                        minhaDiv.scrollTo({
                            left: minhaDiv.scrollLeft + andar,
                            top: 0,
                            behavior: 'smooth'
                        })
                        break;

                    default:
                        break;
                }


                var larguraContainer = minhaDiv.scrollWidth - minhaDiv.clientWidth;
                var porcentagem = (minhaDiv.scrollLeft / larguraContainer) * 100;

                meuRange.value = Math.round(porcentagem);

            }
        }
    </script>


</section>