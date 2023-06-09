<?php
/**
 * Header content
 *
 * @package Writer X
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> style="font-family: serif">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="theme-container" class="position-relative">
    <div class="header-container position-sticky shadow-sm top-0 right-0 py-1" style="z-index: 2000; background-color: #ffffdd">
        <header id="masthead" role="banner" class="container d-flex flex-wrap align-items-center justify-content-md-between py-2">
            <?php get_template_part('template-parts/header/nav'); ?>
            <?php // get_template_part('template-parts/content', 'post'); ?>
        </header>
    </div>

    <div id="main-content" class="">
