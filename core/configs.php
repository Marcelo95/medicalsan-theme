<?php


$pid_home = create_page( 'Home', '');
update_option( 'page_on_front', $pid_home );
update_option( 'show_on_front', 'page' );

$pid_home = create_page( 'Sobre', '');
$pid_home = create_page( 'Onde estamos', '');
$pid_home = create_page( 'Pós-Venda', '');




function create_page($title_of_the_page,$content,$parent_id = NULL ) 
{
    $objPage = get_page_by_title($title_of_the_page, 'OBJECT', 'page');
    if( ! empty( $objPage ) )
    {
        return $objPage->ID;
    }
    
    $page_id = wp_insert_post(
            array(
            'comment_status' => 'close',
            'ping_status'    => 'close',
            'post_author'    => 1,
            'post_title'     => ucwords($title_of_the_page),
            'post_name'      => strtolower(str_replace(' ', '-', trim($title_of_the_page))),
            'post_status'    => 'publish',
            'post_content'   => $content,
            'post_type'      => 'page',
            'post_parent'    =>  $parent_id //'id_of_the_parent_page_if_it_available'
            )
        );
   //echo "Created page_id=". $page_id." for page '".$title_of_the_page. "'<br/>";
    return $page_id;
}

function asset($filename)
{
    return get_template_directory_uri() . "/assets/" . $filename;
}

function asset_image_background($filename, $no_image = false)
{
    if(!$filename && $no_image) $filename = "images/no-image.svg";
    if(!$filename) return "";
    $filename = str_contains($filename, "http") ? $filename : asset($filename);
    return sprintf(' style="background: url(%s) center no-repeat; background-size: cover;color:transparent;" ', $filename);
}

function get_taxnomie($terms)
{
    foreach ($terms as $term) {

        // The $term is an object, so we don't need to specify the $taxonomy.
        $term_link = get_term_link($term);

        // If there was an error, continue to the next term.
        if (is_wp_error($term_link)) {
            continue;
        }

        // We successfully got a link. Print it out.
        echo '<li><a href="' . esc_url($term_link) . '">' . $term->name . '</a></li>';
    }

    echo '</ul>';

}