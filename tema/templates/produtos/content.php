<?php

if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php $content = get_the_content();
    
    echo sprintf("%s/content", get_post_field('post_name', get_post()));
    
    ?>
    <?php get_template_part(sprintf("%s/content", get_post_field('post_name', get_post())), "default");?>


    <?php endwhile; ?>

<?php else : ?>

    <!-- article -->
    <article>
        <h2><?php _e('Nenhum resultado por aqui...'); ?></h2>
    </article>
    <!-- /article -->

<?php endif; ?>