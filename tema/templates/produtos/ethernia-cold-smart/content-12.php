<section
        class="boxes-img-text <?php echo 'css-' . get_post_field('post_name', get_post()); ?> js-scroll fade-in-bottom">
        <div class="container text-center">
                <div class="boxes box-esq">
                        <img class="js-scroll fade-in-bottom"
                                src="<?php echo asset(sprintf("../templates/produtos/%s/images/bg-quad-1.png", get_post_field('post_name', get_post()))); ?>"
                                alt="">

                        <div>
                                <p>
                                        Aplicador multifuncional
                                        para tratamentos corporais e faciais

                                </p>

                        </div>
                </div>
                <div class="boxes box-dir">
                        <img class="js-scroll fade-in-bottom"
                                src="<?php echo asset(sprintf("../templates/produtos/%s/images/bg-quad-2.png", get_post_field('post_name', get_post()))); ?>"
                                alt="">
                        <div>
                                <p>
                                        Radiofrequência monopolar e bipolar
                                </p>
                        </div>
                </div>
        </div>
</section>