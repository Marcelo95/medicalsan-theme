<?php
 ini_set('display_errors','on');
 ini_set('error_reporting', E_ALL );
 
include __DIR__ . "/core/configs.php";
include __DIR__ . "/core/widgets.php";
include __DIR__ . "/core/menu/menus.php";
include __DIR__ . "/core/loja/config.php";
include __DIR__ . "/core/breadcrumbs.php";
include __DIR__ . "/core/loja/custom-fields/init.php";
include __DIR__ . "/core/plugins/index.php";


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


add_filter( 'query_vars', 'addnew_query_vars', 10, 1 );
function addnew_query_vars($vars)
{   
    $vars[] = 'users_filter_name'; // c is the name of variable you want to add       
    $vars[] = 'user_video_id'; // c is the name of variable you want to add       
    return $vars;
}

add_action('init', 'sym_nearme_rewrite_rule', 10, 0);
function sym_nearme_rewrite_rule()
{
    add_rewrite_rule(
        '^marcas2/([^/]*)/([^/]*)/?',
        'index.php?pagename=marcas&users_filter_name=$matches[1]&user_video_id=$matches[2]',
        'top'
    );
}

add_filter( 'upload_mimes', 'my_myme_types', 1, 1 );
function my_myme_types( $mime_types ) {

$mime_types['svg'] = 'image/svg+xml';  // Adiciona extensão .svg
$mime_types['json'] = 'application/json';  // Adiciona extensão .json

unset( $mime_types['xls'] ); // Remove extensão .xls
unset( $mime_types['xlsx'] ); // Remove extensão .xlsx

return $mime_types;
}



/*
 * Custom language switcher shortcode
 */
add_shortcode('language-switcher', 'trpc_custom_language_switcher', 10);
function trpc_custom_language_switcher(){
    if(!function_exists("trp_custom_language_switcher")) return;
	$languages = trp_custom_language_switcher();

	$html = "<div class='container'>";

    $_html = '<a href="%s" data-no-translation><img src="%s" alt="%s"></a>';  

    $html .= sprintf($_html, $languages['pt_BR']['current_page_url'], asset('images/potuguese.svg'),"Português");  
    $html .= sprintf($_html, $languages['en_US']['current_page_url'], asset('images/en.svg'),"English");

	$html .= "</div>";
	return $html;
}

function custom_posts_per_page( $query ) {

    if ( $query->is_archive('produtos') ) {
        set_query_var('posts_per_page', 10);
    }
}
add_action( 'pre_get_posts', 'custom_posts_per_page' );


function get_count_images($path, $allowed_extensions = array("jpg", "jpeg", "png", "gif"))
{
    $files = glob($path . "*.{".implode(",", $allowed_extensions)."}", GLOB_BRACE);
    return count($files);
}


function getYouTubeVideoId($pageVideUrl) {
    $link = $pageVideUrl;
    $video_id = explode("?v=", $link);
    if (!isset($video_id[1])) {
        $video_id = explode("youtu.be/", $link);
    }
    $youtubeID = $video_id[1];
    if (empty($video_id[1])) $video_id = explode("/v/", $link);
    $video_id = explode("&", $video_id[1]);
    $youtubeVideoID = $video_id[0];
    if ($youtubeVideoID) {
        return $youtubeVideoID;
    } else {
        return false;
    }
}

function getUrlThumbnailYoutube($link_video)
{
    $youtubeID = getYouTubeVideoId($link_video);
    return 'https://img.youtube.com/vi/' . $youtubeID . '/mqdefault.jpg';
}