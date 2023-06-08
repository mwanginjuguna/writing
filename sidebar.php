<?php
/**
 * Sidebar Navigation
 *
 * @package Writer X
 */
?>
<aside class="sidebar">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <?php if (is_active_sidebar('sidebar-1')) : ?>
                    <?php dynamic_sidebar('sidebar-1'); ?>
                <?php else : ?>
                    <!-- Default sidebar content -->
                    <h5 class="card-title">Sidebar</h5>
                    <p class="card-text">This is the default sidebar content.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</aside>
