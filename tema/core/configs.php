<?php


//Chama as funções assim que o tema é ativado
add_action( 'after_switch_theme', 'hook_theme_was_activation' );

function create_page($title_of_the_page,$content,$parent_id = NULL, $post_type = "page", $categories_IDs = array()) 
{
    print_r($categories_IDs);
    $objPage = get_page_by_title($title_of_the_page, 'OBJECT', $post_type);
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
            'post_type'      => $post_type,
            'post_parent'    =>  $parent_id, //'id_of_the_parent_page_if_it_available'
            'post_category' => $categories_IDs
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

function my_wp_create_category($cat_name, $category_parent =0 )
{

	$id = term_exists( $cat_name, 'category', $category_parent );
	if ( is_array( $id ) ) {
		$id = $id['term_id'];
	};

    $catarr = array(
		'cat_ID'               => $id,
		'taxonomy'             => 'category',
		'cat_name'             => $cat_name,
		'category_description' => '',
		'category_nicename'    => '',
		'category_parent'      => $category_parent,
	);

    $name        = $catarr['cat_name'];
	$description = $catarr['category_description'];
	$slug        = $catarr['category_nicename'];
	$parent      = (int) $catarr['category_parent'];


    $id = wp_insert_term(
		$cat_name,
        $catarr['taxonomy'],
        compact( 'name', 'slug', 'parent', 'description' )
	);

	if ( is_array( $id ) ) {
		$id = $id['term_id'];
	};
    
    return $id;
}

function hook_theme_was_activation()
{

    $pid_home = create_page( 'Home', '');
    update_option( 'page_on_front', $pid_home );
    update_option( 'show_on_front', 'page' );

    $pid = create_page( 'Sobre', '');
    $pid = create_page( 'Onde estamos', '');
    $pid = create_page( 'Pós-Venda', '');

    //Formulario Contact Form 7
    $form1 = file_get_contents(__DIR__ . "/../templates/forms/cf7.php", true);
    $form_id = create_page( 'Formulário de contato 001', $form1, null, "wpcf7_contact_form");

    if(!metadata_exists("post", $form_id, "_form")) { add_post_meta($form_id, "_form", file_get_contents(__DIR__ . "/../templates/forms/_form.php", true)); }
    if(!metadata_exists("post", $form_id, "_mail")) { add_post_meta($form_id, "_mail", file_get_contents(__DIR__ . "/../templates/forms/_mail.php", true)); }
    //if(!metadata_exists("post", $form_id, "_mail_2")) { add_post_meta($form_id, "_mail_2", file_get_contents(__DIR__ . "/../templates/forms/_mail_2.php", true)); }
    //if(!metadata_exists("post", $form_id, "_messages")) { add_post_meta($form_id, "_messages", file_get_contents(__DIR__ . "/../templates/forms/_messages.php", true)); }
    if(!metadata_exists("post", $form_id, "_additional_settings")) { add_post_meta($form_id, "_additional_settings", file_get_contents(__DIR__ . "/../templates/forms/_additional_settings.php", true)); }
    if(!metadata_exists("post", $form_id, "_locale")) { add_post_meta($form_id, "_locale", file_get_contents(__DIR__ . "/../templates/forms/_locale.php", true)); }
    if(!metadata_exists("post", $form_id, "_config_errors")) { add_post_meta($form_id, "_config_errors", file_get_contents(__DIR__ . "/../templates/forms/_config_errors.php", true)); }

    //Criando as categorias padrões
    $cat_tecnologias = my_wp_create_category("Tecnologias");
    $cat_criofrequencia = my_wp_create_category("Criofrequência", $cat_tecnologias);
    $cat_criolipolise = my_wp_create_category("Criolipólise", $cat_tecnologias );
    $cat_crioterapia  = my_wp_create_category("Crioterapia", $cat_tecnologias );
    $cat_laser = my_wp_create_category("Laser", $cat_tecnologias );
    $cat_radiofrequencia = my_wp_create_category("Radiofrequência", $cat_tecnologias );
    $cat_tecarterapia = my_wp_create_category("Tecarterapia", $cat_tecnologias );
    $cat_ultracavitacao = my_wp_create_category("Ultracavitação", $cat_tecnologias );
    $cat_ultrafrequencia = my_wp_create_category("Ultrafrequência", $cat_tecnologias );
    $cat_ultrassom = my_wp_create_category("Ultrassom", $cat_tecnologias );


    //Criando os produtos padrão
    create_page( 'Criodermis', file_get_contents(sprintf(__DIR__ . "/../templates/produtos/%s/content-default.php", "criodermis"), true),null, "produtos", [$cat_tecnologias, $cat_criolipolise]);
    create_page( 'Hakon', file_get_contents(sprintf(__DIR__ . "/../templates/produtos/%s/content-default.php", "hakon"), true), null, "produtos", [$cat_tecnologias, $cat_laser]);
    create_page( 'Ethernia Cold', file_get_contents(sprintf(__DIR__ . "/../templates/produtos/%s/content-default.php", "ethernia-cold"), true),null, "produtos", [$cat_tecnologias, $cat_criofrequencia, $cat_crioterapia, $cat_radiofrequencia,$cat_tecarterapia, $cat_ultracavitacao]);
    create_page( 'Ômer Premium', file_get_contents(sprintf(__DIR__ . "/../templates/produtos/%s/content-default.php", "omer-premium"), true),null,"produtos", [$cat_tecnologias,$cat_laser]);
    create_page( 'Ômer Smart', file_get_contents(sprintf(__DIR__ . "/../templates/produtos/%s/content-default.php", "omer-smart"), true), null,"produtos", [$cat_tecnologias,$cat_laser]);
    create_page( 'Ultramed', file_get_contents(sprintf(__DIR__ . "/../templates/produtos/%s/content-default.php", "ultramed"), true), null,"produtos", [$cat_tecnologias,$cat_ultrassom]);
    create_page( 'Ultraplace', '', null, "produtos", [$cat_tecnologias, $cat_ultracavitacao,$cat_ultrassom]); 
    create_page( 'Tekah', '', null, "produtos", [$cat_tecnologias, $cat_radiofrequencia,$cat_tecarterapia, $cat_ultracavitacao]);
    create_page( 'Narniah', '', null, "produtos", [$cat_tecnologias,$cat_radiofrequencia, $cat_ultracavitacao,$cat_ultrafrequencia]);
    create_page( 'Lipocavity New', '', null, "produtos", [$cat_tecnologias, $cat_ultracavitacao]);
    create_page( 'Lipocavity New Smart', '', null, "produtos", [$cat_tecnologias, $cat_ultracavitacao]);
    create_page( 'Lipocavity', '', null, "produtos", [$cat_tecnologias, $cat_ultracavitacao]);
    create_page( 'Ethernia Cold Smart', '', null, "produtos", [$cat_tecnologias]);




}
