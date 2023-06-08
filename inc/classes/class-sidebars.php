<?php

/**
 * Register Sidebars.
 *
 * @package Writer X
 */

namespace WRITING_THEME\Inc;

use WRITING_THEME\Inc\Traits\Singleton;

class Sidebars
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
        add_action('widgets_init', [$this, 'register_custom_sidebars']);
        add_action('widgets_init', [$this, 'register_order_form_widget']);
    }

    public function register_custom_sidebars()
    {
        register_sidebar(array(
            'name' => __('Primary Sidebar', 'write-x'),
            'id' => 'sidebar-1',
            'description' => 'Main sidebar',
            'before_widget' => '<aside id="%1$s" class="widget widget-sidebar %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => __('Footer Sidebar', 'write-x'),
            'id' => 'sidebar-2',
            'description' => 'Footer sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ));
    }


    /**
     * Register the new order form widget
     */
    public function register_order_form_widget()
    {
        register_widget('WRITING_THEME\Inc\Order_Form_Widget');
    }
}
