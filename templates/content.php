<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <div class="page-content">

            <div class="entry">
                <?php the_content(); ?>
            </div>


        </div>
    <?php endwhile;
else : ?>

<?php endif; ?>