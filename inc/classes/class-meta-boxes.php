<?php

/**
 * Register Meta-Boxes.
 *
 * @package Writer X
 */

namespace WRITING_THEME\Inc;

use WRITING_THEME\Inc\Traits\Singleton;

class Meta_Boxes
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
        add_action('add_meta_boxes', [$this, 'add_custom_meta_box']);
        add_action( 'save_post', [$this, 'save_custom_post_meta_data'] );
    }

    public function add_custom_meta_box($post)
    {
        $screens = [ 'post'];

        foreach ($screens as $screen) {
            add_meta_box(
                'hide-page-title', // unique id
                __('Hide page title', 'write-x'), // Box title
                [$this, 'custom_meta_box_html'], // Content callback, must be of type callback
                $screen, // Post type
            'side' // context - show on side
            );
        }
    }

/**
 * Html template to Allow user to show/hide post title in the editor
 * @param $post
 * @return void
 */
    public function custom_meta_box_html($post)
    {
        $value = get_post_meta($post->ID, '_hide_post_title', true);

        /**
         * Use nonce for verification
         */
        wp_nonce_field(plugin_basename(__FILE__), 'hide_title_meta_box_nonce_name')

        ?>
        <label for="write_x_field"><?php esc_html_e('Hide the page title', 'write-x'); ?></label>
        <select name="write_x_field" id="write_x_field" class="postbox">
            <option value=""><?php esc_html_e('Select...', 'write-x'); ?></option>
            <option value="hide" <?php selected($value, 'hide') ?> >
                <?php esc_html_e('Hide', 'write-x'); ?>
            </option>
            <option value="show" <?php selected($value, 'show') ?> >
                <?php esc_html_e('Show', 'write-x'); ?>
            </option>
        </select>
    <?php
    }

    /**
     * Save the meta data to the database
     * @param
     * @return void
     */
    public function save_custom_post_meta_data($post_id)
    {
        /**
         * On saving post, use $_POST to authorize user and nonce
         */
        if (! current_user_can('edit_post', $post_id)) {
            return;
        }

        // verify nonce
        if (!isset($_POST['hide_title_meta_box_nonce_name']) || !wp_verify_nonce($_POST['hide_title_meta_box_nonce_name'], plugin_basename(__FILE__))) {
            return;
        }

        if ( array_key_exists( 'write_x_field', $_POST ) ) {
            update_post_meta(
                $post_id,
                '_hide_post_title',
                $_POST['write_x_field']
            );
        }
    }
}
