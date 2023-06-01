<?php
/**
 * Template for post entry header
 *
 * @package write-x
 */

$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail($the_post_id);
?>

<header class="entry-header">
    <?php
    // get featured image
    if ($has_post_thumbnail) {
        ?>
        <div class="entry-image mb-3 w-100 text-center">
            <a href="<?php echo esc_url(get_permalink())?>" class="rounded w-auto">
                <?php
                the_post_thumbnail(size: 'medium');
                ?>
            </a>

        </div>

        <h3 class="fs-5">
            <a class="link-primary link-offset-1" href="<?php echo esc_url(get_permalink())?>">
                <?php the_title(); ?>
            </a>
        </h3>
    <?php
    }
    ?>
</header>
