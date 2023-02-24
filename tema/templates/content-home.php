<?php  if (have_posts()) : while (have_posts()) : the_post(); ?>


        <div class="page-content">

            <div class="entry">
                <?php the_content(); ?>
            </div>


        </div>
    <?php endwhile;
else : ?>

<section class="banner-principal">
    <a href="<?php echo home_url("produtos/omer-premium"); ?>">
        <img src="<?php echo asset("images/banner-principal.svg"); ?>" alt="">
    </a>
</section>

<?php endif; ?>