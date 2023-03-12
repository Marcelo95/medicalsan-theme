<section class="links">
    <div class="container">
        <?php $text = cmb2_texto( get_post_meta(get_the_ID(), '_metabox_for_produtos_codigo', true) );
        if ($text) :
        ?>
            <h2>Registro Anvisa:
                <?php _e($text) ?>
            </h2>

        <?php endif; ?>

        <div class="list-links">
            <div>
                <?php $text1 = cmb2_texto( get_post_meta(get_the_ID(), '_metabox_for_produtos_link_duvida_frequentes', true) );
                if ($text1) :
                ?>

                    <a href="" data-bs-target="#duvidas_frequentes" data-bs-toggle="modal" data-bs-target="#duvidas_frequentes"><i class="fa fa-question-circle	"></i> Dúvidas
                        frequentes</a>


                    <?php do_action("PopupComponent", ["id" => "duvidas_frequentes", "title" => '<i class="fa fa-question-circle	"></i> Dúvidas
                            frequentes', "body" => $text1]); ?>

                <?php endif; ?>

                <?php $text2 = cmb2_texto( get_post_meta(get_the_ID(), '_metabox_for_produtos_link_ficha_tecnica', true) );
                if ($text2) :
                ?>

                    <a href=""  data-bs-target="#ficha_tecnica" data-bs-toggle="modal" data-bs-target="#ficha_tecnica"><i class="fa fa-file-text-o"></i> Ficha Técnica</a>

                    <?php do_action("PopupComponent", ["id" => "ficha_tecnica", "title" => '<i class="fa fa-file-text-o"></i> Ficha Técnica</a>', "body" => $text2]); ?>

                <?php endif; ?>


                <?php $text3 = cmb2_texto( get_post_meta(get_the_ID(), '_metabox_for_produtos_link_manual_de_instrucao', true) );
                if ($text3) :
                ?>

                    <a href="" data-bs-target="#manual_de_instrucoes" data-bs-toggle="modal" data-bs-target="#manual_de_instrucoes"><i class="fa fa-book	"></i> Manual de instruções</a>
                    <?php do_action("PopupComponent", ["id" => "manual_de_instrucoes", "title" => '<i class="fa fa-book	"></i> Manual de instruções</a>', "body" => $text3]); ?>
                <?php endif; ?>




            </div>
            <div>


                <?php $text4 = cmb2_texto( get_post_meta(get_the_ID(), '_metabox_for_produtos_link_assistencia_express', true) );
                if ($text4) :
                ?>


                    <a href="" data-bs-target="#assistencia_express" data-bs-toggle="modal" data-bs-target="#assistencia_express"><i class="material-icons">contact_phone</i> Assistência
                        express</a>

                    <?php do_action("PopupComponent", ["id" => "assistencia_express", "title" => '<i class="material-icons">contact_phone</i> Assistência
                        express', "body" => $text4]); ?>

                <?php endif; ?>

                <?php $text5 = cmb2_texto( get_post_meta(get_the_ID(), '_metabox_for_produtos_link_guia_rapido', true) );
                if ($text5) :
                ?>

                    <a href="" data-bs-target="#guia_rapido" data-bs-toggle="modal" data-bs-target="#guia_rapido"><i class="material-icons">library_books</i> Guia
                        Rápido</a>

                        <?php do_action("PopupComponent", ["id" => "guia_rapido", "title" => '<i class="material-icons">library_books</i> Guia
                        Rápido', "body" => $text5]); ?>

                <?php endif; ?>
                <?php $text6 = cmb2_texto( get_post_meta(get_the_ID(), '_metabox_for_produtos_link_videos_de_treinamento', true) );
                if ($text6) :
                ?>

                    <a href="" data-bs-target="#videos_de_treinamento" data-bs-toggle="modal" data-bs-target="#videos_de_treinamento"><i class="fa fa-file-video-o"></i>Vídeos de
                        treinamento</a>

                        <?php do_action("PopupComponent", ["id" => "videos_de_treinamento", "title" => '<i class="fa fa-file-video-o"></i>Vídeos de
                        treinamento', "body" => $text6]); ?>

                <?php endif; ?>



            </div>

        </div>

    </div>
</section>