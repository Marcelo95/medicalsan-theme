<?php if ($args["first_run"]) : ?>
    <link rel="stylesheet" href="<?php _e(asset(sprintf("../templates/components/%s/style.css", basename(__DIR__)))); ?>">
<?php endif; ?>



<?php


$cats = $wpdb->get_results($wpdb->prepare("SELECT t1.term_id as 'cat_ID' , t1.name AS 'cat_name', t2.name AS parent_category, t3.name AS grandparent_category FROM {$wpdb->terms} t1 JOIN {$wpdb->term_taxonomy} tt1 ON tt1.term_id = t1.term_id JOIN {$wpdb->term_relationships} tr ON tr.term_taxonomy_id = tt1.term_taxonomy_id JOIN {$wpdb->posts} p ON p.ID = tr.object_id LEFT JOIN {$wpdb->term_taxonomy} tt2 ON tt2.term_taxonomy_id = tt1.parent LEFT JOIN {$wpdb->terms} t2 ON t2.term_id = tt2.term_id LEFT JOIN {$wpdb->term_taxonomy} tt3 ON tt3.term_taxonomy_id = tt2.parent LEFT JOIN {$wpdb->terms} t3 ON t3.term_id = tt3.term_id WHERE p.ID = %d AND tt1.taxonomy = 'category' AND t2.name IS NOT NULL ORDER BY tt1.parent DESC LIMIT 10", get_the_ID()));
 
foreach ($cats as $key => $cat) {

    $cat1 = (array) $cat;
 
    if (isset($cat1["cat_ID"])) :  ?>

        <div class="container js-scroll fade-in-bottom">


            <a href="<?php echo get_category_link($cat1["cat_ID"]); ?>" class="category-desc">
                <p>
                    Entenda mais sobre a tecnologia de <strong> <?php echo $cat1['cat_name']; ?> </strong>
                </p>
            </a>
        </div>

<?php endif;
} ?>