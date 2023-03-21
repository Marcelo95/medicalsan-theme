<?php if (have_posts()) : $current_post = 0;
    while (have_posts()) : $current_post++;
        the_post(); ?>


        <?php if ($current_post == 2) : ?>
            <div class="block-with-2-post">
                <div class="loop">
                <?php endif; ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class([(1 == $current_post) ? "first-post" : "", "loop"]); ?>>


                    <!-- post thumbnail -->
                    <?php if (has_post_thumbnail()) : // Check if thumbnail exists 
                    ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <div class="box-thumbnail" <?php _e(asset_image_background(get_the_post_thumbnail_url(get_the_ID(), 'full'), $no_image = true)); ?>></div>

                        </a>
                    <?php else : ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <div class="box-thumbnail" <?php _e(asset_image_background(false, $no_image = true)); ?>></div>

                        </a>
                    <?php endif; ?>



                    <div class="content-text">
                        <label class="cats"><?php echo implode(" ", wp_get_post_categories(get_the_ID(), array('fields' => 'names', 'number' => 1))); ?></label>
                        <h2>
                              <?php if ($current_post == 2 || $current_post == 3) : ?>
                                <a class="botao-5" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

                            <?php else : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            <?php endif; ?>

                        </h2>


                        <?php if ($current_post != 2 && $current_post != 3) : ?>
                            <a class="botao-5" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                Leia mais
                            </a>
                        <?php endif; ?>

                    </div>





                </article>
                <!-- /article -->


                <?php if ($current_post == 3) : ?>
                </div>
            </div>
        <?php endif; ?>

    <?php endwhile; ?>

<?php else : ?>

    <!-- article -->
    <article>
        <h2><?php _e('Nenhum resultado por aqui...', 'html5blank'); ?></h2>
    </article>
    <!-- /article -->

<?php endif; ?>