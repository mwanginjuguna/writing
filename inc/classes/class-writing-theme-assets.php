<?php
/**
 * Enqueue theme assets.
 *
 * @package Writer X
 */

namespace WritingTheme\Inc;

use WritingTheme\Inc\Traits\Singleton;

class WritingThemeAssets
{
    use Singleton;
    protected function __construct()
    {
        // init class
    }

    /**
     * Actions and Filters
     * @return void
     */
    protected function setupHooks()
    {
        /**
         * actions
         */
        add_action('wp_enqueue_scripts', [$this, 'registerStyles']);
        add_action('wp_enqueue_scripts', [$this, 'registerScripts']);
    }

    public function registerStyles()
    {
        // register styles
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(WRITING_THEME_DIR_PATH.'/style.css'), 'all');
        wp_register_style('bootstrap-css', WRITING_THEME_DIR_URI.'/assets/bootstrap/css/bootstrap.min.css', array(), '5.3.0', 'all');
        // enqueue styles
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
    }

    public function registerScripts()
    {
        // register scripts
        wp_register_script('bootstrap-js', WRITING_THEME_DIR_URI . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '5.3.0', true);

        // enqueue script
        wp_enqueue_script('bootstrap-js');
    }
}
