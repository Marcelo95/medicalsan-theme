<?php

/* 
 Template Name: Template onde-estamos
*/

do_action("add_body_class",['form-contact-7-estilo-1']);
?>

<?php get_header("blog"); ?>

<section class=" archive page-onde-estamos <?php echo strpos(strtolower( wp_get_theme()->get("Name")), "start" ) ? "theme-medstart" : ""; ?>">

    <div class="content-topo">
        <div class="container">
        <?php custom_breadcrumbs(); ?>

        <?php do_action("OndeEstamosComponent"); ?>

    
        </div>


    </div>

    <div class="mt-5 mb-5">
    
        <?php do_action("BotoesOndeEstamosComponent"); ?>

        <div class="loop mt-5">

            <?php get_template_part('templates/content'); ?>
        </div>

    </div>

</section>

<?php get_footer(); ?>