<?php get_header("blog"); ?>

<section class=" archive page-onde-estamos <?php echo strpos(strtolower( wp_get_theme()->get("Name")), "start" ) ? "theme-medstart" : ""; ?>">

    <div class="content-topo">
        <div class="container">
        <?php custom_breadcrumbs(); ?>

        <?php do_action("OndeEstamosComponent"); ?>
        </div>


    </div>

    <div class="mt-5 mb-5">

        <div class="loop">

            <?php get_template_part('templates/content'); ?>
        </div>

    </div>

</section>

<?php get_footer(); ?>