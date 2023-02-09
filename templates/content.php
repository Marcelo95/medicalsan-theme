<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <?php if (in_category('3')) : ?>
            <div class="post-cat-three">
            <?php else : ?>
                <div class="page-content">
                <?php endif; ?>


                <!-- Display the Post's content in a div box. -->

                <div class="entry">
                    <?php the_content(); ?>
                </div>





                </div> <!-- closes the first div box -->


                <!-- Stop The Loop (but note the "else:" - see next line). -->

            <?php endwhile;
    else : ?>


            <!-- The very first "if" tested to see if there were any Posts to -->
            <!-- display.  This "else" part tells what do if there weren't any. -->
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>


            <!-- REALLY stop The Loop. -->
        <?php endif; ?>