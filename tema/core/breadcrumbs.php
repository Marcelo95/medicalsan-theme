<?php

// BREADCRUMBS  --------------------------------------------------------------------------------------------------------
function custom_breadcrumbs()
{

    $sep = '<li class="separator"> >  </li>';

    if (!is_front_page()) {

        // Start the breadcrumb with a link to your homepage
        echo '<ul id="breadcrumbs" class="breadcrumb">';
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo "Home";
        echo '</a><li>' . $sep;

        // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_singular("produtos")) {
            $cats = get_same_array_categories();
            if( count($cats) > 3 ) {
                $cats = array_slice($cats, 0 ,2); // retornando as 3 primeiras cats do produto, caso tenha muitas cats
            };
            echo my_get_the_category_list($sep, $cats);
        }

        if (is_singular('post')) {
            echo '<li><a href="' . home_url("blog") . '">Blog</a></li>';
            echo $sep;
        }

        if (is_search() && get_query_var('post_type')) {
            echo '<li><a href="' . home_url("blog") . '">Blog</a></li>';
            echo $sep;
            echo sprintf("<li><span>%s</span></li>", "Pesquisa");
        }

        if (is_single() || is_page()) {
            $page_parent_ID = wp_get_post_parent_id();

            if ($page_parent_ID) {
                $_posts = [];
                while ($page_parent_ID != 0) {
                    $_post = get_post($page_parent_ID);
                    $_posts[] = $_post;
                    $page_parent_ID = wp_get_post_parent_id($_post);
                }

                foreach ($_posts as $key => $p) {
                    echo '<li><a href="' . get_permalink($p) . '">' . $p->post_title . '</a></li>';
                    echo $sep;
                }
            }


            echo sprintf("<li><span>%s</span></li>", get_the_title());
        }

        if (is_category()) {
            echo sprintf("<li><span>%s</span></li>", get_cat_name(get_query_var('cat')));
        }

        if (is_home()) {
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ($page_for_posts_id) {
                $post = get_post($page_for_posts_id);
                setup_postdata($post);
                echo sprintf("<li><span>%s</span></li>", get_the_title());
                rewind_posts();
            }
        }

        echo '</ul>';
    }
}


function my_get_the_category_list($sep, $categories_arr)
{

    $html = "";

    foreach ($categories_arr as $key => $category) {

        $html .= '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a></li>';
        $html .= $sep;
    }
    return $html;
}

function get_same_array_categories()
{
    $categories = [];

    if (!is_single()) {
        $current_term = get_category(get_query_var('cat'));
        $term_id = property_exists($current_term, "term_id") ? $current_term->term_id : false;

        if ($term_id) {
            $parent = $current_term->parent;
            while ($parent != 0) {
                $cat = get_category($parent);
                $categories[] = $cat;
                $parent = $cat->parent;
            }
        }
    }

    if (is_singular()) {
        $categories = array_merge($categories, apply_filters('the_category_list', get_the_category(get_the_ID()), get_the_ID()));
    }

    // Ordenar pelo ID da categoria pai (ordem hierárquica)
    usort($categories, function ($a, $b) {
        if ($a->parent == $b->parent) {
            return strcmp($a->name, $b->name);
        }
        return $a->parent - $b->parent;
    });

    return $categories;
}

