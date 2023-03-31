<?php
ini_set('display_errors', 'on');
ini_set('error_reporting', E_ALL);

include __DIR__ . "/core/configs.php";
include __DIR__ . "/core/widgets.php";
include __DIR__ . "/core/menu/menus.php";
include __DIR__ . "/core/loja/config.php";
include __DIR__ . "/core/breadcrumbs.php";
include __DIR__ . "/core/loja/custom-fields/init.php";
include __DIR__ . "/core/plugins/index.php";



function dd($v)
{
    echo '<pre>';
    var_dump($v);
    echo '</pre>';
}

add_filter('query_vars', 'addnew_query_vars', 10, 1);
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

add_filter('upload_mimes', 'my_myme_types', 1, 1);
function my_myme_types($mime_types)
{

    $mime_types['svg'] = 'image/svg+xml';  // Adiciona extensão .svg
    $mime_types['json'] = 'application/json';  // Adiciona extensão .json

    unset($mime_types['xls']); // Remove extensão .xls
    unset($mime_types['xlsx']); // Remove extensão .xlsx

    return $mime_types;
}



/*
 * Custom language switcher shortcode
 */
add_shortcode('language-switcher', 'trpc_custom_language_switcher', 10);
function trpc_custom_language_switcher()
{
    if (!function_exists("trp_custom_language_switcher")) return;
    $languages = trp_custom_language_switcher();

    $html = "<div class='container'>";

    $_html = '<a href="%s" data-no-translation><img src="%s" alt="%s"></a>';

    $html .= sprintf($_html, $languages['pt_BR']['current_page_url'], asset('images/potuguese.svg'), "Português");
    $html .= sprintf($_html, $languages['en_US']['current_page_url'], asset('images/en.svg'), "English");

    $html .= "</div>";
    return $html;
}

function custom_posts_per_page($query)
{

    if ($query->is_archive('produtos')) {
        set_query_var('posts_per_page', 10);
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');


function get_count_images($path, $allowed_extensions = array("jpg", "jpeg", "png", "gif"))
{
    $files = glob($path . "*.{" . implode(",", $allowed_extensions) . "}", GLOB_BRACE);
    return count($files);
}


function getYouTubeVideoId($pageVideUrl)
{
    try {
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
    } catch (\Throwable $th) {
        return false;
    }
}

function getUrlThumbnailYoutube($link_video)
{
    $youtubeID = getYouTubeVideoId($link_video);
    if (!$youtubeID) return false;
    return 'https://img.youtube.com/vi/' . $youtubeID . '/mqdefault.jpg';
}



function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'add_slug_body_class');

function cmb2_texto($content)
{
    global $wp_embed;
    $content = $wp_embed->autoembed($content);
    $content = $wp_embed->run_shortcode($content);
    // $content = wpautop($content);
    $content = do_shortcode($content);

    return $content;
}

//importando todas as actions de components Ex de action: MeuTestComponent
// Define o padrão de arquivo a ser importado
$pattern =  __DIR__ . '/templates/components/*/content.php';
// Usa a função glob para importar todos os arquivos que correspondem ao padrão
$files = glob($pattern);

// Itera sobre todos os arquivos importados e os inclui
foreach ($files as $file) {
    if (is_file($file)) {
        $pathComponent = basename(dirname($file));
        $component_name =  str_replace(' ', '', ucwords(str_replace('-', ' ', $pathComponent))) . 'Component';
        add_action($component_name, function ($params) use ($pathComponent, $component_name) {
            if (!is_array($params)) {
                $params = [];
            }

            $params = array_merge($params, ["theme" => wp_get_theme()->name, "first_run" => boolval(did_action($component_name) < 2)]);
            get_template_part(sprintf("templates/components/%s/content", $pathComponent), null, $params);
        }, 10, 1);
    }
}


add_filter('body_class', function ($classes) {
    $browser_info = strtolower($_SERVER['HTTP_USER_AGENT']);

    if (strpos($browser_info, 'macintosh') !== false || strpos($browser_info, 'iphone') !== false || strpos($browser_info, 'ipad') !== false || strpos($browser_info, 'ipod') !== false) { // checa se é Sistema APPLE
        return array_merge($classes, array('navegador-safari'));
    }
    return $classes;
});


add_action("add_body_class", function ($args = false) {

    add_filter('body_class', function ($classes) use ($args) {
        if ($args) {
            return array_merge($classes, $args);
        }
        return $classes;
    });
}, 10, 1);

function custom_shortcode_onde_estamos()
{
    do_action("OndeEstamosComponent");
}
add_shortcode('onde-estamos', 'custom_shortcode_onde_estamos');
