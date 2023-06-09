<?php
/**
 * Header Navigation template
 *
 * @package Writer X
 */

$menuClass = \WRITING_THEME\Inc\Menus::getInstance();
$footerMenuId = $menuClass->get_menu_id('writer-x-footer-menu');
$footerMenuItems = wp_get_nav_menu_items($footerMenuId);
// dd($headerMenuItems);
?>

<?php
if ($footerMenuId && is_array($footerMenuItems)) :
    ?>
    <ul class="nav col-12 col-md-auto mb-2 fs-5 justify-content-center mb-md-0">

        <?php
        foreach ($footerMenuItems as $menuItem) {
            if (!$menuItem->menu_item_parent) {
                $childMenuItems = $menuClass->get_child_menu_items($footerMenuItems, $menuItem->ID);
                $hasChildren = !empty($childMenuItems) && is_array($childMenuItems);
                if (!$hasChildren) {
                    ?>
                    <li class="px-2 text-dark">
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
