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

<nav class="navbar navbar-expand-md bg-white rounded-2 w-100" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <?php if (has_custom_logo()) : the_custom_logo(); endif; ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="d-flex align-items-center mb-md-0 me-md-auto link-body-emphasis text-white text-decoration-none">
            <h4 class="text-secondary-emphasis fs-6"><?php bloginfo('name'); ?></h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse px-2" id="navbarsExample04">
            <?php
            if ($headerMenuId && is_array($headerMenuItems)) :
                ?>
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <?php
                        foreach ($headerMenuItems as $menuItem) {
                            if (!$menuItem->menu_item_parent) {
                                $childMenuItems = $menuClass->get_child_menu_items($headerMenuItems, $menuItem->ID);
                                $hasChildren = !empty($childMenuItems) && is_array($childMenuItems);
                                if (!$hasChildren) {
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php esc_url($menuItem->url); ?>">
                                            <?php echo esc_html($menuItem->title); ?>
                                        </a>
                                    </li>
                                <?php } else {
                                    ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="<?php echo esc_url($menuItem->url) ?>" data-bs-toggle="dropdown" aria-expanded="false"><?php echo esc_html($menuItem->title) ?></a>
                                        <ul class="dropdown-menu">
                                            <?php foreach ($childMenuItems as $item) {
                                                ?>
                                                <li>
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
            <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
