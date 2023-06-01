<?php
/**
 * Template for blog-entry meta tags - author, date, category, tags
 *
 * @package writer-x
 */
?>

<div class="container">
    <?php
        $categories = get_the_category();
        if (!empty($categories) && is_array($categories)) {
            ?>
            <div class="row">
            <?php
            foreach ($categories as $category) {
                ?>
                <a href="<?php echo get_category_link($category->term_id) ?>"
                   class="px-2 link-underline link-primary link-offset-2-hover">
                    <?php echo $category->name; ?>
                </a>
            <?php
            }
            ?>
            </div>
            <?php
        }
    ?>
</div>
