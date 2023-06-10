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

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
            <?php if (has_custom_logo()) : ?>

                <?php the_custom_logo(); ?>

            <?php else: ?>

                <?php bloginfo('name'); ?>
            <?php endif; ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mx-lg-auto" id="navbarSupportedContent">
            <?php
            if ($headerMenuId && is_array($headerMenuItems)) :
                ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php
                    foreach ($headerMenuItems as $menuItem) {
                        if (!$menuItem->menu_item_parent) {
                            $childMenuItems = $menuClass->get_child_menu_items($headerMenuItems, $menuItem->ID);
                            $hasChildren = !empty($childMenuItems) && is_array($childMenuItems);
                            if (!$hasChildren) {
                                ?>
                                <li class="nav-item px-2 text-dark">
                                    <a class="nav-link" href="<?php echo esc_url($menuItem->url); ?>">
                                        <?php echo esc_html($menuItem->title); ?>
                                    </a>
                                </li>
                                <?php
                            } else {
                                ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo esc_url($menuItem->url) ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php echo esc_html($menuItem->title) ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($childMenuItems as $item) {
                                            ?>
                                            <li class="">
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

            <div class="d-flex" >
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button onclick="saveSubForm()" class="btn my-auto border rounded-3 border-warning fs-5 fw-medium" style="background-color: #FF410D; color: yellow">
                    Get Started
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>