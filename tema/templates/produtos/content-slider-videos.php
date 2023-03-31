<?php

$entries = (array) get_post_meta(get_the_ID(), '_metabox_for_produtos_2_box', true);

if (count($entries) > 0 && $entries[0]) : ?>

    <section class="slider-videos  js-scroll fade-in-bottom">
        <div class="slider-video">

            <div class="init-slider-video">

                <?php


                foreach ($entries as $key => $entry) {
                    $_link_thumb = isset($entry['_metabox_for_produtos_2_carroussel_content_thumbnail']) ? $entry['_metabox_for_produtos_2_carroussel_content_thumbnail'] : '';
                    $link_thumb = !empty($_link_thumb) ? $_link_thumb : asset("images/no-image.svg");

                    if (isset($entry["_metabox_for_produtos_2_carroussel_content"]) && $entry["_metabox_for_produtos_2_carroussel_content"]) {

                        $thumb_youtube = getUrlThumbnailYoutube($entry["_metabox_for_produtos_2_carroussel_content"]);
                        if($thumb_youtube) $link_thumb = wp_strip_all_tags($thumb_youtube);


                ?>

                        <div>
                            <a href="" data-bs-target="#content_carroussel" data-bs-toggle="modal"  class="imagem-thumbnail" style="background-image:url(<?php _e($link_thumb); ?>);"></a>

                        </div>
                <?php
                    }
                }



                ?>


            </div>


        </div>
    </section>


    <?php


    $carr = '<div class="init-slider-video-for">';

    foreach ($entries as $key => $entry) {
        if (isset($entry["_metabox_for_produtos_2_carroussel_content"]) && $entry["_metabox_for_produtos_2_carroussel_content"]) {
            $carr .= '<div>';
            $carr .= cmb2_texto($entry["_metabox_for_produtos_2_carroussel_content"]);
            $carr .= '</div>';
        }
    }


    $carr .= '</div>';

    do_action("PopupComponent", ["id" => "content_carroussel", "css_modal" => "modal-lg", "body" =>  $carr]);

    ?>




<?php endif; ?>