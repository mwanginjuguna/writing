<?php

/**
 * Bootstraps the theme.
 *
 * @package Writer X
 */

namespace WRITING_THEME\Inc;

use WRITING_THEME\Inc\Traits\Singleton;

class WritingTheme
{
    use Singleton;

    protected function __construct()
    {
        // load class
        Assets::getInstance();
        Menus::getInstance();
        $this->setupHooks();
    }

    protected function setupHooks() {
        // actions and filters
        add_action('after_setup_theme', [$this, 'setupTheme']);
    }

    public function setupTheme() {
        add_theme_support('title-tag'); // user should set the title on wp customizer

        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 100, // default height
            'width' => 400, // default width
            'flex-height' => true, // user can adjust height
            'flex-width' => true, // user can adjust width
        ]);

        add_theme_support('custom-background', [
            'default-color' => '#f8fafc',
            'default-image' => '',
        ]);

        add_theme_support('post-thumbnails');

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('automatic-feed-links');

        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style'
        ]);

        add_editor_style();

        add_theme_support('wp-block-styles');

        add_theme_support('align-wide');

        global $content_width; // max-width for the theme
        if (!isset($content_width)) {
            $content_width = 1240;
        }
    }
}
