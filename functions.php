<?php
/**
 * Functions and functionalities.
 *
 * @package Writer X
 */

use WritingTheme\Inc\WritingTheme;

if (!defined('WRITING_THEME_DIR_PATH')) {
    define('WRITING_THEME_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('WRITING_THEME_DIR_URI')) {
    define('WRITING_THEME_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
// autoloader
require_once 'inc/helpers/autoloader.php';
// load theme instance

function writingGetThemeInstance()
{
    WritingTheme::getInstance();
}
writingGetThemeInstance();
