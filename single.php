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
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                From the Firehose
            </h3>

            <article class="blog-post">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        echo '<h2 class="blog-post-title mb-1">'.get_the_title().'</h2>';

                        echo '<p class="blog-post-meta"><span class="text-secondary-emphasis">'.get_the_date().'</span> by '.get_the_author_link().'</p>';

                        // Display the content of the post
                        echo '<p>'.the_content().'</p>';
                    }
                } else {
                    // Display a "No posts found" message if there are no posts
                    get_template_part('template-parts/content-none');
                }
                ?>
                <nav class="blog-pagination" aria-label="Pagination">
                    <p class="btn btn-outline-primary bg-info-subtle rounded-pill" href="">
                        <?php echo get_previous_post_link() ?>
                    </p>
                    <p class="btn btn-outline-secondary bg-secondary-subtle rounded-pill">
                        <?php echo get_next_post_link() ?>
                    </p>
                </nav>

            </article>



        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0"><?php echo get_the_excerpt(); ?></p>
                </div>

                <div class="p-4">
                    <?php
                    get_sidebar();
                    ?>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer()
?>
