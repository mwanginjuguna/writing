<?php
/**
 * Content Not found template
 *
 * @package Writer X
 */

?>

<div class="no-results nothing-found">
    <h3 class="page-title"><?php esc_html_e('Nothing Found', 'write-x'); ?></h3>
    <div class="page-content">
        <?php if (is_home() && current_user_can('publish_posts')) { ?>
        <p>
            <?php
            printf(
                wp_kses(
                    __('Publish Your First Post? <a href="%s">Get Started Here!</a>', 'write-x'),
                    [
                        'a' => [
                                    'href' => []
                            ]
                    ]
                ),
                esc_url(admin_url('post-new.php')));
            ?>
        </p>
        <?php
        } elseif (is_search()) {
        ?>
        <p>
            <?php esc_html_e('Sorry, nothing in the records matched your query. Try again with a different query.', 'write-x'); ?>
        </p>
        <?php
        get_search_form();
        } else {
        ?>
        <p>
            <?php esc_html_e('We cannot find what you are looking for!', 'write-x'); ?>
        </p>
        <?php
        }
        ?>
    </div>
</div>
