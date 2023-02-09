<?php


/**
 * Menu com todos departamentos topo
 *
 */
function widget_1() {

	register_sidebar( array(
		'name'          => 'Header Menu Topo - Todos departamentos',
		'id'            => 'header_menu_all_departments_top',
        'description' => __( 'Widget topo menu todos departamentos', 'text_domain' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="rounded">',
		'after_title'   => '</h6>',
	) );

}
add_action( 'widgets_init', 'widget_1' );

/**
 * Menu com todos departamentos
 *
 */
function widget_2() {

	register_sidebar( array(
		'name'          => 'Header Menu - Todos departamentos',
		'id'            => 'header_menu_all_departments',
        'description' => __( 'Menu com todos departamentos', 'text_domain' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="rounded">',
		'after_title'   => '</h6>',
	) );

}
add_action( 'widgets_init', 'widget_2' );

/**
 * Widget 1/3 - footer top
 *
 */
function widget_1_footer() {

	register_sidebar( array(
		'name'          => 'Widget 1/3 - Footer topo',
		'id'            => 'widget_1_3_footer',
        'description' => __( 'Widget 1/3 - Footer', 'text_domain' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="rounded">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => 'Widget 2/3 - Footer topo',
		'id'            => 'widget_2_3_footer',
        'description' => __( 'Widget 2/3 - Footer', 'text_domain' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="rounded">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => 'Widget 3/3 - Footer topo',
		'id'            => 'widget_3_3_footer',
        'description' => __( 'Widget 3/3 - Footer', 'text_domain' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="rounded">',
		'after_title'   => '</h6>',
	) );

}
add_action( 'widgets_init', 'widget_1_footer' );

