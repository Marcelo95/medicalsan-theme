<?php if ($args["first_run"]) : ?>
    <link rel="stylesheet" href="<?php _e(asset(sprintf("../templates/components/%s/style.css", basename(__DIR__)))); ?>">
<?php endif; ?>
<?php


$linha_do_tempo = [
    [
        "ano" => 1994,
        "points" => [
            [
                "foto" => "1994.png",
                "texto" => "Na garagem de casa, Mauro A.N. dos Santos e a esposa, Ivanir, abrem a empresa Vitória Therapeutic, de compra e revenda de equipamentos ortopédicos e de fisioterapia. "
            ]
        ]

    ],
    [
        "ano" => 2013,
        "points" => [
            [
                "foto" => "2013.png",
                "texto" => "Com muita fé, trabalho e dedicação, surge a Medical San, uma fábrica no segmento de produtos para saúde. O San é uma referência ao sobrenome dos fundadores.
                "
            ]
        ]

    ],    [
        "ano" => 2014,
        "points" => [
            [
                "foto" => "2014.png",
                "texto" => "Além de mudar para Estrela (RS), a Medical San conquista as certificações do Inmetro e da Anvisa, iniciando um ousado projeto de expansão."
            ]
        ]

    ],
    [
        "ano" => 2017,
        "points" => [
            [
                "foto" => "2017.png",
                "texto" => "É lançado o Criodermis®, a maior revolução em criolipólise que já existiu no segmento. Rapidamente se torna um sucesso de vendas no Brasil."
            ]
        ]

    ],
    [
        "ano" => 2019,
        "points" => [
            [
                "foto" => "2019.png",
                "texto" => "A Medical San começa a participar de grandes eventos e congressos nacionais e internacionais, expandindo sua atuação."
            ]
        ]

    ],
    [
        "ano" => 2020,
        "points" => [
            [
                "foto" => "2020.png",
                "texto" => "Foi criada a Linha Smart®, com produtos compactos e de fácil transporte, além do conceito Black Experience, com tecnologias de altíssimo nível."
            ]
        ]

    ],
    [
        "ano" => 2021,
        "points" => [
            [
                "foto" => "2021.png",
                "texto" => "O lançamento do Ultramed® eleva a Medical San ao patamar das maiores e melhores fabricantes de equipamentos médicos e estéticos do Brasil."
            ]
        ]
    ],
    [
        "ano" => 2022,
        "points" => [

            [
                "foto" => "2022.png",
                "texto" => "
                A empresa conquista a certificação MDSAP, que a habilita a produzir equipamentos Classe III. O Hakon®, laser 4D para epilação, é apresentado. "
            ],
            [
                "foto" => "2022-1.png",
                "texto" => "É lançado o Ômer Premium e o Ômer Smart, equipamentos de alta tecnologia para despigmentação e remoção de tatuagens."
            ],
            [
                "foto" => "2022-2.png",
                "texto" => "No mesmo ano, é lançada uma nova marca, a MedStart®."
            ],
            [
                "foto" => "2022-3.png",
                "texto" => "A atriz e apresentadora Mariana Rios vira embaixadora do Grupo Medical San, que fica entre as 5 empresas que mais crescem no Brasil no ranking da Exame."
            ],
            [
                "foto" => "2022-4.png",
                "texto" => "Como coroamento do ano de 2022, em dezembro foi inaugurada a nova sede do Grupo Medical San, no 386 Business Park."
            ]
        ]

    ],



]; ?>


<section class="content-linha-do-tempo ">

   <div class="container"> <h2 class="title-linha-do-tempo">Nossa trajetória</h2></div>

    <div class="sombras-left-right">
        <div id="linha-scroll" class="linha-scroll">
            <div id="init-linha-do-tempo" class="init-linha-do-tempo">

                <?php foreach ($linha_do_tempo as $key => $v) { ?>
                    <div class="linha-item <?php echo $key == 0 ? 'active' : ''; ?> " >
                        <div class="item_yeaer">
                            <i class="icon-line" style="background-image: url(<?php _e(asset(sprintf("../templates/components/%s/images/%s", basename(__DIR__), "icon.png"))); ?>);"></i> <span><?php _e($v["ano"]); ?></span>
                        </div>

                        <div class="content_bottom">
                            <div class="carroussel-linha-do-tempo">
                                <?php foreach ($v["points"] as $v1) { ?>
                                    <div>
                                        <div class="item_top">
                                            <div class="image-point" <?php _e(asset_image_background(sprintf("../templates/components/%s/images/%s", basename(__DIR__), $v1["foto"]))); ?> ></div>
                                        </div>

                                        <div class="item_bottom">
                                            <?php _e($v1["texto"]); ?>

                                        </div>
                                    </div>
                                <?php } ?>

                            </div>

                        </div>

                    </div>


                <?php } ?>



            </div>

        </div>
    </div>



</section>

<script>

    $(".item_yeaer").on("click",function(){
        $(".linha-item").removeClass("active");
        $(this).parent().addClass("active");

    })

</script>