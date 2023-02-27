<?php


add_action('init', 'produtos_custom_post');
function produtos_custom_post()
{

    $labels = array(
        'name' => _x('Produtos', 'post type general name'),
        'singular_name' => _x('Produto', 'post type singular name'),

        'all_items'                  => __('Produtos', 'text_domain'),
        'parent_item'                => __('Parent Item', 'text_domain'),
        'parent_item_colon'          => __('Parent Item:', 'text_domain'),
        'add_new'              => __('Adicionar produto', 'text_domain'),
        'new_item_name'              => __('Adicionar produto', 'text_domain'),
        'add_new_item'               => __('Adicionar produto', 'text_domain'),
        'edit_item'                  => __('Edit Item', 'text_domain'),
        'update_item'                => __('Update Item', 'text_domain'),
        'view_item'                  => __('View Item', 'text_domain'),
        'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
        'add_or_remove_items'        => __('Add or remove items', 'text_domain'),
        'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
        'popular_items'              => __('Popular Items', 'text_domain'),
        'search_items'               => __('Search Items', 'text_domain'),
        'not_found'                  => __('Not Found', 'text_domain'),
        'no_terms'                   => __('No items', 'text_domain'),
        'items_list'                 => __('Items list', 'text_domain'),
        'items_list_navigation'      => __('Items list navigation', 'text_domain'),

    );

    $args = array(
        'taxonomies' => ["post_tag","category","departamentos", "marcas", "catalogos"],
        'labels' => $labels,
        'description' => 'Minha loja',
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'supports' => array(
            'title', 
            'editor', 
            'excerpt', 
            //'author', 
            //'custom-fields', 
            'post-formats', 
            'thumbnail')

    );

    register_post_type('produtos', $args);
 
}

//add_action('init', 'feedbacks_custom_post');
function feedbacks_custom_post()
{

    $labels = array(
        'name' => _x('Feedbacks', 'post type general name'),
        'singular_name' => _x('Feedback', 'post type singular name'),

        'all_items'                  => __('Feedbacks', 'text_domain'),
        'parent_item'                => __('Parent Item', 'text_domain'),
        'parent_item_colon'          => __('Parent Item:', 'text_domain'),
        'add_new'              => __('Adicionar Feedback', 'text_domain'),
        'new_item_name'              => __('Adicionar Feedback', 'text_domain'),
        'add_new_item'               => __('Adicionar Feedback', 'text_domain'),
        'edit_item'                  => __('Edit Item', 'text_domain'),
        'update_item'                => __('Update Item', 'text_domain'),
        'view_item'                  => __('View Item', 'text_domain'),
        'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
        'add_or_remove_items'        => __('Add or remove items', 'text_domain'),
        'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
        'popular_items'              => __('Popular Items', 'text_domain'),
        'search_items'               => __('Search Items', 'text_domain'),
        'not_found'                  => __('Not Found', 'text_domain'),
        'no_terms'                   => __('No items', 'text_domain'),
        'items_list'                 => __('Items list', 'text_domain'),
        'items_list_navigation'      => __('Items list navigation', 'text_domain'),

    );

    $args = array(
        'taxonomies' => ["post_tag","category"],
        'labels' => $labels,
        'description' => 'Minha loja',
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array(
            'title', 
            'editor', 
            'excerpt', 
            //'author', 
            //'custom-fields', 
            'post-formats', 
            'thumbnail')

    );

    register_post_type('feedbacks', $args);
 
}


add_theme_support( 'post-thumbnails',['post','produtos',"feedbacks"] );


// Register Custom 
function custom_taxonomy()
{

    $labels = array(
        'name'                       => _x('Departamentos', 'Produto General Name', 'text_domain'),
        'singular_name'              => _x('Departamento', 'Produto Singular Name', 'text_domain'),
        'all_items'                  => __('All Items', 'text_domain'),
        'parent_item'                => __('Pai', 'text_domain'),
        'parent_item_colon'          => __('Pai:', 'text_domain'),
        'new_item_name'              => __('New Item Name', 'text_domain'),
        'add_new_item'               => __('Add New Item', 'text_domain'),
        'edit_item'                  => __('Edit Item', 'text_domain'),
        'update_item'                => __('Update Item', 'text_domain'),
        'view_item'                  => __('View Item', 'text_domain'),
        'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
        'add_or_remove_items'        => __('Add or remove items', 'text_domain'),
        'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
        'popular_items'              => __('Popular Items', 'text_domain'),
        'search_items'               => __('Search Items', 'text_domain'),
        'not_found'                  => __('Not Found', 'text_domain'),
        'no_terms'                   => __('No items', 'text_domain'),
        'items_list'                 => __('Items list', 'text_domain'),
        'items_list_navigation'      => __('Items list navigation', 'text_domain'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'departamentos', 
            'with_front' => false, 
            'hierarchical' => true 
        ),
    );
    register_taxonomy('departamentos', 'produtos', $args);

    $labels = array(
        'name'                       => _x('Marcas', 'Produto General Name', 'text_domain'),
        'singular_name'              => _x('Marca', 'Produto Singular Name', 'text_domain'),
        'menu_name'                  => __('Marcas', 'text_domain'),
        'parent_item'                => __('Pai', 'text_domain'),
        'parent_item_colon'          => __('Pai:', 'text_domain'),
        'new_item_name'              => __('New Item Name', 'text_domain'),
        'add_new_item'               => __('Add New Item', 'text_domain'),
        'edit_item'                  => __('Edit Item', 'text_domain'),
        'update_item'                => __('Update Item', 'text_domain'),
        'view_item'                  => __('View Item', 'text_domain'),
        'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
        'add_or_remove_items'        => __('Add or remove items', 'text_domain'),
        'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
        'popular_items'              => __('Popular Items', 'text_domain'),
        'search_items'               => __('Search Items', 'text_domain'),
        'not_found'                  => __('Not Found', 'text_domain'),
        'no_terms'                   => __('No items', 'text_domain'),
        'items_list'                 => __('Items list', 'text_domain'),
        'items_list_navigation'      => __('Items list navigation', 'text_domain'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'marcas',
            'with_front' => false, 
            'hierarchical' => true
        ),
    );
    register_taxonomy('marcas', 'produtos', $args);


    $labels3 = array(
        'name'                       => _x('Catalogos', 'Catalogos General Name', 'text_domain'),
        'singular_name'              => _x('Catalogo', 'Catalogos Singular Name', 'text_domain'),
        'menu_name'                  => __('Catalogo', 'text_domain'),
        'parent_item'                => __('Pai', 'text_domain'),
        'parent_item_colon'          => __('Pai:', 'text_domain'),
        'new_item_name'              => __('New Item Name', 'text_domain'),
        'add_new_item'               => __('Add New Item', 'text_domain'),
        'edit_item'                  => __('Edit Item', 'text_domain'),
        'update_item'                => __('Update Item', 'text_domain'),
        'view_item'                  => __('View Item', 'text_domain'),
        'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
        'add_or_remove_items'        => __('Add or remove items', 'text_domain'),
        'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
        'popular_items'              => __('Popular Items', 'text_domain'),
        'search_items'               => __('Search Items', 'text_domain'),
        'not_found'                  => __('Not Found', 'text_domain'),
        'no_terms'                   => __('No items', 'text_domain'),
        'items_list'                 => __('Items list', 'text_domain'),
        'items_list_navigation'      => __('Items list navigation', 'text_domain'),
    );
    $args3 = array(
        'labels'                     => $labels3,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'catalogos',
            'with_front' => false, 
            'hierarchical' => true
        ),
    );
    register_taxonomy('catalogos', 'produtos', $args3);


}
add_action('init', 'custom_taxonomy');

