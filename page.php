<?php
/**
 * Template to display page content
 *
 * @package writer-x
 */

get_header();
?>

<div class="page-item container">
    <div class="py-5">
        <?php
        get_template_part('template-parts/components/small-order-form');
        ?>
    </div>
</div>

<?php
get_footer();
