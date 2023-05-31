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

    public function get_menu_id($location) {
        // get all locations
        $locations = get_nav_menu_locations();
        $menu_id = $locations[$location];
        return $menu_id;
    }

    public function get_child_menu_items($menu_array, $parent_id)
    {
        $child_menus = [];
        if (!empty($menu_array) && is_array($menu_array)) {
            foreach ($menu_array as $menu) {
                if (intval($menu->menu_item_parent) === $parent_id) {
                    array_push($child_menus, $menu);
                }
            }
        }
        return $child_menus;
    }
}
