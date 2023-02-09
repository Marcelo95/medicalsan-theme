<?php
// ini_set('display_errors','on');
// ini_set('error_reporting', E_ALL );
 
include __DIR__ . "/core/configs.php";
include __DIR__ . "/core/widgets.php";
include __DIR__ . "/core/menu/menus.php";
include __DIR__ . "/core/loja/config.php";
include __DIR__ . "/core/breadcrumbs.php";
include __DIR__ . "/core/loja/custom-fields/init.php";
include __DIR__ . "/core/plugins/index.php";





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