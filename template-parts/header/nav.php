<?php
/**
 * Header Navigation template
 *
 * @package
 */
if (has_custom_logo()) : ?>
    <?php the_custom_logo(); ?>
<?php else : ?>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <h4 class="text-secondary-emphasis"><?php bloginfo('name'); ?></h4>
    </a>
<?php endif; ?>
<ul class="nav nav-pills">
    <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'primary-menu',
        ));
    ?>
</ul>
