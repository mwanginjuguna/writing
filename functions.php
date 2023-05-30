<?php
/**
 * Functions and functionalities.
 *
 * @package Writer X
 */

function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    wp_die();
}

if (!defined('WRITING_THEME_DIR_PATH')) {
    define('WRITING_THEME_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('WRITING_THEME_DIR_URI')) {
    define('WRITING_THEME_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
// autoloader
require_once WRITING_THEME_DIR_PATH.'/inc/helpers/autoloader.php';
// load theme instance
require_once WRITING_THEME_DIR_PATH.'/inc/classes/class-writing-theme.php';

function writingGetThemeInstance()
{
    \WRITING_THEME\Inc\WritingTheme::getInstance();
}
writingGetThemeInstance();
