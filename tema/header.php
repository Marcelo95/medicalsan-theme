<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
                                        echo ' :';
                                    } ?> <?php bloginfo('name'); ?></title>

    <link href="<?php echo asset('images/favicon.ico'); ?>" rel="shortcut icon" type="image/vnd.microsoft.icon">


    <link rel="stylesheet" href="<?php echo asset('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('slick/slick.min.css'); ?>">
    <script src="<?php echo asset('jquery/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo asset('slick/slick.min.js'); ?>"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="<?php echo asset('css/custom.css'); ?>">

    

    <?php wp_head(); ?>
</head>

<body <?php body_class(is_admin_bar_showing() ? "is_admin_bar_showing" : ""); ?>>

    <main class="page-wrapper">

        <?php get_template_part("templates/header"); ?>