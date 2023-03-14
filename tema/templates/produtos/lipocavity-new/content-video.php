<?php

$video = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_videos_de_como_funciona', true);

if ($video) : ?>



    <section class="js-scroll fade-in-bottom">
        <div class="videos">

            <div class="init-videos container mt-5 mb-5">


                <?php echo cmb2_texto($video); ?>


            </div>



        </div>
    </section>

<?php endif; ?>