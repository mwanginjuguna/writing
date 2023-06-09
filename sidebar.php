<?php
/**
 * Sidebar Navigation
 *
 * @package Writer X
 */
?>
<aside class="sidebar">
    <div class="container">
        <div style="background-color: #66FFD1" class="p-2 px-lg-4 mb-4 pb-5 rounded-4 d-none d-lg-block">
            <h4 class="pb-3 mt-5 px-2" style="border-left: 0.5rem solid #FF410D;">Welcome to our professional custom writing services provided by a team of experts!</h4>
            <hr class="hr-separator"/>
            <p>With our custom writing services, you can expect personalized attention, high-quality work, and timely delivery. Trust our team of experts to provide you with the writing support you need to succeed!</p>

            <?php if (is_active_sidebar('sidebar-1')) : ?>
                <?php dynamic_sidebar('sidebar-1'); ?>
            <?php else :
                get_template_part('template-parts/components/small-order-form');
            endif; ?>

        </div>
    </div>
</aside>
