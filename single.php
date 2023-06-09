<?php
/**
 * Display individual Post
 *
 * @package writer-x
 */

get_header()
?>
<div class="container">
    <div class="row g-5">
        <article class="col-md-8" style="padding: 3rem 0 0 3rem">

            <?php
            if (have_posts()) {
                the_post();
                echo '<h2 class="blog-post-title mb-1">'.get_the_title().'</h2>';

                echo '<p class="blog-post-meta"><span class="text-secondary-emphasis">'.get_the_date().'</span> by '.get_the_author_link().'</p>';

                // Display the content of the post
                echo '<div class="fs-4">'.the_content().'</div>';
            } else {
                // Display a "No posts found" message if there are no posts
                get_template_part('template-parts/content-none');
            }
                ?>

        </article>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4">
                    <?php
                    get_sidebar();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer()
?>
