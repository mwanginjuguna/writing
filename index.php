<?php
/**
 * Main File
 *
 * @package writing-theme
 */

get_header(); // Include header.php

?>

<main id="main-content" class="site-main">
    <!-- <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Welcome to Writers Pad</h1>
                <p class="col-lg-10 fs-4">
                    We create solutions to complex and difficult writing tasks. We help you meet tight deadlines and deliver top-quality deliveries within a short period.
                </p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form onsubmit="" class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Topic</label>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingTextarea">Instructions</label>
                        <textarea id="floatingTextarea" rows="6" class="w-100 rounded-3 border bg-white p-4 p-md-5"></textarea>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Order Now</button>
                    <hr class="my-4">
                    <small class="text-muted">Prices starting at $7 per page.</small>
                </form>
            </div>
        </div>
    </div> -->
    <div id="primary">
        <main id="main" class="site-main mt-5">
            <?php
            if (have_posts()) {
                ?>
                <div class="container">
                    <?php
                        if ( !is_front_page()) {
                            ?>
                            <header class="mb-5">
                                <h1 class="page-title">
                                    <?php echo single_post_title() ?>
                                </h1>
                            </header>
                            <?php
                        }
                    ?>
                    <div class="row pb-3 justify-content-between">
                        <?php
                        while (have_posts()) : the_post();
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-12 align-self-center">
                                    <?php
                                        get_template_part('/template-parts/content');
                                    ?>
                                </div>
                                <?php
                        endwhile;
                        ?>
                    </div>

                </div>
                <?php
            } else {

            ?>
            <div class="container">
                <?php
                    // Display a "No posts found" message if there are no posts
                    get_template_part('template-parts/content-none');
                ?>
            </div>
                <?php
            }
            ?>
        </main>
    </div>
</main>

<?php
get_sidebar(); // Include sidebar.php
get_footer(); // Include footer.php

?>
