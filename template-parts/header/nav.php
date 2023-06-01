<?php
/**
 * Header Navigation template
 *
 * @package Writer X
 */

$menuClass = \WRITING_THEME\Inc\Menus::getInstance();
$headerMenuId = $menuClass->get_menu_id('writer-x-header-menu');
$headerMenuItems = wp_get_nav_menu_items($headerMenuId);
// dd($headerMenuItems);
?>

    <div class="col-md-3 mb-2 mb-md-0">
        <?php if (has_custom_logo()) : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="d-inline-flex link-body-emphasis text-decoration-none">
            <?php the_custom_logo(); ?>
        </a>
        <?php else: ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="d-flex align-items-center mb-md-0 me-md-auto link-body-emphasis text-white text-decoration-none">
            <h4 class="text-secondary-emphasis fs-6"><?php bloginfo('name'); ?></h4>
        </a>
        <?php endif; ?>

    </div>

<?php
if ($headerMenuId && is_array($headerMenuItems)) :
    ?>
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

        <?php
        foreach ($headerMenuItems as $menuItem) {
            if (!$menuItem->menu_item_parent) {
                $childMenuItems = $menuClass->get_child_menu_items($headerMenuItems, $menuItem->ID);
                $hasChildren = !empty($childMenuItems) && is_array($childMenuItems);
                if (!$hasChildren) {
                    ?>
                    <li class="nav-link px-2">
                        <a href="<?php echo esc_url($menuItem->url); ?>">
                            <?php echo esc_html($menuItem->title); ?>
                        </a>
                    </li>
                <?php } else {
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link px-2 dropdown-toggle" href="<?php echo esc_url($menuItem->url) ?>" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo esc_html($menuItem->title) ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($childMenuItems as $item) {
                                ?>
                                <li class="nav-link px-2">
                                    <a class="dropdown-item" href="<?php echo esc_url($item->url) ?>">
                                        <?php echo esc_html($item->title) ?>
                                    </a>
                                </li>
                                <?php
                            } ?>
                        </ul>
                    </li>
                    <?php
                }

            }

        }
        ?>
    </ul>
<?php endif; ?>

<div class="col-md-3 text-end">
    <button type="button" class="btn btn-outline-primary me-2">Login</button>
    <button type="button" class="btn btn-primary">Order Now</button>
</div>
