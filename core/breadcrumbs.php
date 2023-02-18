<?php

// BREADCRUMBS  --------------------------------------------------------------------------------------------------------

function custom_breadcrumbs() {

    $sep = '<li class="separator"> >  </li>';

    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
         echo '<ul id="breadcrumbs" class="breadcrumb">';
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo "Home";
        echo '</a><li>' .$sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
           if(has_category()) echo  str_replace('</a>','</a></li>',str_replace('<a','<li><a', get_the_category_list($sep) )) .$sep;
        } elseif (is_archive() || is_single()){
            echo '<li>';
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
            echo '</li>' . $sep;
        }
	
        if (is_single()|| is_page()) {
            echo sprintf("<li><span>%s</span></li>",get_the_title());
        }
	
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_post($page_for_posts_id);
                setup_postdata($post);
                echo sprintf("<li><span>%s</span></li>",get_the_title());
                rewind_posts();
            }
        }

        echo '</ul>';
    }
}
