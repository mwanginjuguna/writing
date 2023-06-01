<?php
/**
 * Content Template
 *
 * @package Writer X
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('px-2 px-lg-4 py-3 mb-3 bg-light shadow-sm border-bottom border-start-0 border-top-0 rounded-bottom border-dark-subtle'); ?> >
    <?php
    get_template_part('template-parts/blog/entry-header');
    get_template_part('template-parts/blog/entry-meta');
    get_template_part('template-parts/blog/entry-content');
    get_template_part('template-parts/blog/entry-footer');
    ?>
</article>