<?php
/**
 * Header content
 *
 * @package Writer X
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="theme-container">
    <div class="header-container container">
        <header id="masthead" role="banner" class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <?php get_template_part('template-parts/header/nav'); ?>
            <?php // get_template_part('template-parts/content', 'post'); ?>
        </header>
    </div>

    <div id="main-content">
