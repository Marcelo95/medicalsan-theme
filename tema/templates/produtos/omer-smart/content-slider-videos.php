<section class="slider-video">

    <div class="init-slider-video">

            <div>
                <div class="imagem-thumbnail" data-id-youtube="<?php echo getYouTubeVideoId("https://youtu.be/YymTknvH0yw"); ?>" style="background-image:url('<?php echo getUrlThumbnailYoutube("https://youtu.be/YymTknvH0yw"); ?>');"></div>
            </div>

            <div>
                <div class="imagem-thumbnail" data-id-youtube="<?php echo getYouTubeVideoId("https://youtu.be/YymTknvH0yw"); ?>" style="background-image:url('<?php echo getUrlThumbnailYoutube("https://youtu.be/YymTknvH0yw"); ?>');"></div>
            </div>

            <div>
                <div class="imagem-thumbnail" data-id-youtube="<?php echo getYouTubeVideoId("https://youtu.be/YymTknvH0yw"); ?>" style="background-image:url('<?php echo getUrlThumbnailYoutube("https://youtu.be/YymTknvH0yw"); ?>');"></div>
            </div>

            <div>
                <div class="imagem-thumbnail" data-id-youtube="<?php echo getYouTubeVideoId("https://youtu.be/YymTknvH0yw"); ?>" style="background-image:url('<?php echo getUrlThumbnailYoutube("https://youtu.be/YymTknvH0yw"); ?>');"></div>
            </div>

            <div>
                <div class="imagem-thumbnail" data-id-youtube="<?php echo getYouTubeVideoId("https://youtu.be/YymTknvH0yw"); ?>" style="background-image:url('<?php echo getUrlThumbnailYoutube("https://youtu.be/YymTknvH0yw"); ?>');"></div>
            </div>

            <div>
                <div class="imagem-thumbnail" data-id-youtube="<?php echo getYouTubeVideoId("https://youtu.be/YymTknvH0yw"); ?>" style="background-image:url('<?php echo getUrlThumbnailYoutube("https://youtu.be/YymTknvH0yw"); ?>');"></div>
            </div>



    </div>



    <div id="video-show" style="display:none;">
        <iframe width="100%" height="500" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <script>
        (function($){
            'use strict';

            $(".imagem-thumbnail").on("click",function(){
              $("#video-show").show();
              $("#video-show iframe").attr("src", "https://www.youtube.com/embed/" + $(this).attr("data-id-youtube") + "?autoplay=1");
            })

        })(jQuery);

    </script>


</section>