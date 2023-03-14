<?php

$video = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_videos_de_como_funciona', true);

if ($video) : ?>



    <section class="js-scroll fade-in-bottom">
        <div class="videos text-center">

            <a href="" class="botao-8" data-bs-target="#link_video_1" data-bs-toggle="modal">Confira as aplicações do Ultraplace <i class="fa fa-play"></i> </a>

        </div>
    </section>
    <?php do_action("PopupComponent", ["id" => "link_video_1", "body" => cmb2_texto($video)]); ?>
<?php endif; ?>