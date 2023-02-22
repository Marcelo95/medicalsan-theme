<?php get_header(); ?>

<?php

$cat_id = get_query_var('cat');

$args = array(
    'child_of' => $cat_id,
    'orderby' => 'name',
    'order' => 'ASC'
);
$categories = get_categories($args);


?>

<main role="main">
    <div class="mt-4 container desktop">
        <?php custom_breadcrumbs(); ?>
    </div>
    <div class="banner-categories">
        <div class="container">
            <h1> A Medical San tem linhas completas de equipamentos de alta performance. </h1>

            <h2>
                Escolha a tecnologia e confira nossos produtos:
            </h2>
        </div>
    </div>

    <section class="container">
        <div class="lista-categories">

            <?php foreach ($categories as $category) {
                echo sprintf('
                <div>
                    <a href="%s">
                        <div>
                            <img  src="%s"  alt="">
                        </div>
                        <div>
                            <h2>%s <i class="fa fa-angle-right"></i></h2>
                        </div>                
                    </a>                    
                </div>


            ', get_category_link($category->term_id), asset(sprintf("../templates/categories/images/%s.svg", $category->slug)), $category->name);


            }
            ?>


        </div>
    </section>
    <!-- /section -->
</main>


<?php get_footer(); ?>