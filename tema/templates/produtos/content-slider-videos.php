<?php  

$entries = get_post_meta(get_the_ID(), '_metabox_for_produtos_2_box', true);

if(count((array) $entries) > 0): ?>

<section class="slider-videos  js-scroll fade-in-bottom">
<div class="slider-video">

    <div class="init-slider-video">

        <?php


        foreach ((array) $entries as $key => $entry) {

            if (isset($entry['_metabox_for_produtos_2_link_video'])) {
                $link_video = esc_html($entry['_metabox_for_produtos_2_link_video']);
                echo sprintf(' <div><div class="imagem-thumbnail" data-id-youtube="%s" style="background-image:url(%s);"></div></div>', 
                    getYouTubeVideoId($link_video), getUrlThumbnailYoutube($link_video));
            }

        }



        ?>
     

    </div>



    <div id="video-show" style="display:none;">
        <iframe width="100%" height="500" src="" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>

    <script>
        (function ($) {
            'use strict';

            $(".imagem-thumbnail").on("click", function () {
                $("#video-show").show();
                $("#video-show iframe").attr("src", "https://www.youtube.com/embed/" + $(this).attr("data-id-youtube") + "?autoplay=1");
            })

        })(jQuery);

    </script>


    </div>
</section>

<?php endif; ?>