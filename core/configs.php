<?php


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
if(!metadata_exists("post", $form_id, "_mail_2")) { add_post_meta($form_id, "_mail_2", file_get_contents(__DIR__ . "/../templates/forms/_mail_2.php", true)); }
//if(!metadata_exists("post", $form_id, "_messages")) { add_post_meta($form_id, "_messages", file_get_contents(__DIR__ . "/../templates/forms/_messages.php", true)); }
if(!metadata_exists("post", $form_id, "_additional_settings")) { add_post_meta($form_id, "_additional_settings", file_get_contents(__DIR__ . "/../templates/forms/_additional_settings.php", true)); }
if(!metadata_exists("post", $form_id, "_locale")) { add_post_meta($form_id, "_locale", file_get_contents(__DIR__ . "/../templates/forms/_locale.php", true)); }
if(!metadata_exists("post", $form_id, "_config_errors")) { add_post_meta($form_id, "_config_errors", file_get_contents(__DIR__ . "/../templates/forms/_config_errors.php", true)); }


//Criando os produtos padrão
create_page( 'Criodermis', file_get_contents(sprintf(__DIR__ . "/../templates/produtos/%s/content-default.php", "criodermis"), true),null, "produtos");
create_page( 'Hakon', file_get_contents(sprintf(__DIR__ . "/../templates/produtos/%s/content-default.php", "hakon"), true), null, "produtos");
create_page( 'Ethernia Cold', file_get_contents(sprintf(__DIR__ . "/../templates/produtos/%s/content-default.php", "ethernia-cold"), true),null, "produtos");
create_page( 'Ômer Premium', file_get_contents(sprintf(__DIR__ . "/../templates/produtos/%s/content-default.php", "omer-premium"), true),null,"produtos");
create_page( 'Ômer Smart', file_get_contents(sprintf(__DIR__ . "/../templates/produtos/%s/content-default.php", "omer-smart"), true), null,"produtos");
create_page( 'Ultramed', file_get_contents(sprintf(__DIR__ . "/../templates/produtos/%s/content-default.php", "ultramed"), true), null,"produtos");
create_page( 'Ultraplace', '', null, "produtos");
create_page( 'Tekah', '', null, "produtos");
create_page( 'Narniah', '', null, "produtos");
create_page( 'Lipocavity New', '', null, "produtos");
create_page( 'Lipocavity New Smart', '', null, "produtos");
create_page( 'Lipocavity', '', null, "produtos");
create_page( 'Ethernia Cold Smart', '', null, "produtos");




function create_page($title_of_the_page,$content,$parent_id = NULL, $post_type = "page" ) 
{
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