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
    <!-- section -->
    <section class="container">

        <div class="container desktop">
            <?php custom_breadcrumbs(); ?>
        </div>

        <h1>
            <?php _e('Categories for ');
            single_cat_title(); ?>
        </h1>

        <?php foreach ($categories as $category) {
    echo '<p>Category: id: ' . $category->term_id . ' <a href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"), $category->name) . '" ' . '>' . $category->name . '</a> </p> ';
    echo '<p> Description:' . $category->description . '</p>';
    echo '<p> Post Count: ' . $category->count . '</p>';
}
?>


    </section>
    <!-- /section -->
</main>


<?php get_footer(); ?>