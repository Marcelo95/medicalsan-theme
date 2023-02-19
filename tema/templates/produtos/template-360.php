<div class="area-360 js-scroll  fade-in-bottom">
    <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/title-bg.svg", get_post_field('post_name', get_post()))); ?>" alt="">

    <div class="images-360 js-scroll  fade-in">
        <div id="jsv-holder">
            <img id="jsv-image" src="<?php echo asset(sprintf("../templates/produtos/%s/images/360/0.png", get_post_field('post_name', get_post()))); ?>">
        </div>
    </div>
</div>


<style>
    #jsv-holder {
        width: 500px;
    }

    #jsv-holder img {
        width: 100%;
    }
</style>



<?php
//check se exite mais de uma imagem
$total_images = get_count_images(sprintf(__DIR__ . "/%s/images/360/", get_post_field('post_name', get_post())), ["png"]);

if ($total_images > 1) : ?>


    <script type="application/javascript">
        window.addEventListener('load', () => {
            const jsv = new JavascriptViewer({
                mainHolderId: 'jsv-holder',
                mainImageId: 'jsv-image',
                imageUrlFormat: 'x.png',
                totalFrames: <?php echo $total_images - 1; ?>,
                defaultProgressBar: true,
                speed: 90,
                inertia: 12,
                reverse: false,
                zoom: false,
                autoRotate: 1,
                notificationConfig: {
                    dragToRotate: {
                        showStartToRotateDefaultNotification: true,
                        mainColor: "rgba(0,0,0,0.20)",
                        textColor: "rgba(243,237,237,0.80)",
                    }
                }
            });

            jsv.start()
                .then(() => console.log('viewer started'))
                .catch((e) => console.log('failed loading 360 viewer: ' + e))
        });
    </script>
<?php endif; ?>