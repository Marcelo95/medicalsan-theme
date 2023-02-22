<?php

// BREADCRUMBS  --------------------------------------------------------------------------------------------------------

function my_get_the_category_list($sep)
{

    $current_term = get_category(get_query_var( 'cat' ));
    $term_id = property_exists($current_term, "term_id") ? $current_term->term_id : false;
    $args = array(
        'orderby' => 'name',
        'order' => 'ASC',
        'taxonomy' => 'category',
        'hide_empty' => false,
        'exclude' => [get_cat_ID("Sem Categoria"), $term_id],
        'parent' => 0
      );
      $categories = get_categories($args);


    // Ordenar pelo ID da categoria pai (ordem hierárquica)
    usort($categories, function ($a, $b) {
        if ($a->parent == $b->parent) {
            return strcmp($a->name, $b->name);
        }
        return $a->parent - $b->parent;
    });

    $html = "";

    $count = 0;

    foreach ($categories as $key => $category) {

        $html .= '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a></li>';
        $html .= $sep;
        $count++;
        if ($count == 2) {
            break;
        }
    }
    return $html;

}

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
        if (is_category() || is_single()) {
    
           // if (has_category()) {
                echo my_get_the_category_list($sep);
                
           // };
            //if(has_category()) echo  str_replace('</a>','</a></li>',str_replace('<a','<li><a', my_get_the_category_list($sep) )) .$sep;
        } elseif (is_archive() || is_single()) {
            echo '<li>';
            if (is_day()) {
                printf(__('%s', 'text_domain'), get_the_date());
            } elseif (is_month()) {
                printf(__('%s', 'text_domain'), get_the_date(_x('F Y', 'monthly archives date format', 'text_domain')));
            } elseif (is_year()) {
                printf(__('%s', 'text_domain'), get_the_date(_x('Y', 'yearly archives date format', 'text_domain')));
            } else {
                _e('Blog Archives', 'text_domain');
            }
            echo '</li>' . $sep;
            
        }

        if (is_single() || is_page()) {
            echo sprintf("<li><span>%s</span></li>", get_the_title());
        }

        if (is_category() ) {
            echo sprintf("<li><span>%s</span></li>", get_cat_name( get_query_var('cat') ));
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
