<?php get_header(); ?>

<section class="m-5 content-blog" style=" min-height: 38vw; ">
    <div class="container">
    <?php custom_breadcrumbs(); ?>
        <div class="blog-box">
            <h1><?php the_title(); ?></h1>
            <h5><?php if(has_excerpt()) : the_excerpt(); endif;?></h5>
            <div class="thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>



            <?php get_template_part("templates/content"); ?>

            <div class="date-post">
                <hr>
                <small> Data de publicação: <?php echo get_the_modified_date('d/m/Y'); ?></small>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>