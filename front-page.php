<?php
/**
 * Theme Landing Page
 *
 * @package Write-X
 */

get_header(); // Include header.php
?>
<p class="my-5" id="total-container"></p>
<main id="main-content" class="site-main">
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
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
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                    <hr class="my-4">
                    <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                </form>
            </div>
        </div>

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

                                echo '<p class="blog-post-meta">'.get_the_date().' by '.get_the_author_link().'</p>';
                                // Display the content of each post

                                echo '<p>'.the_content().'</p>';
                            }
                        } else {
                            // Display a "No posts found" message if there are no posts
                            echo '<p>No posts found.</p>';
                        }
                echo '<nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary rounded-pill" href="#">'.previous_post_link().'</a>
                    <a class="btn btn-outline-secondary rounded-pill disabled">'.next_post_link().'</a>
                </nav>'
                    ?>

                </article>



            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2021</a></li>
                            <li><a href="#">February 2021</a></li>
                            <li><a href="#">January 2021</a></li>
                            <li><a href="#">December 2020</a></li>
                            <li><a href="#">November 2020</a></li>
                            <li><a href="#">October 2020</a></li>
                            <li><a href="#">September 2020</a></li>
                            <li><a href="#">August 2020</a></li>
                            <li><a href="#">July 2020</a></li>
                            <li><a href="#">June 2020</a></li>
                            <li><a href="#">May 2020</a></li>
                            <li><a href="#">April 2020</a></li>
                        </ol>
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



</main>

<?php
get_sidebar(); // Include sidebar.php
get_footer(); // Include footer.php

?>
