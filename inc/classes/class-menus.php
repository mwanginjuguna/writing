<?php

/**
 * Register menus.
 *
 * @package Writer X
 */

namespace WRITING_THEME\Inc;

use WRITING_THEME\Inc\Traits\Singleton;

class Menus
{
    use Singleton;
    public function __construct()
    {
        // load class
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * Actions
         */
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus()
    {
        register_nav_menus([
            'writer-x-header-menu'=> esc_html__('Header Menu', 'writer-x'),
            'writer-x-footer-menu'=> esc_html__('Footer Menu', 'writer-x')
        ]);
    }
}
