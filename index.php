<?php
/**
 * Main File
 *
 * @package writing-theme
 */

get_header(); // Include header.php
?>

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
    </div>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            // Display the content of each post
            the_content();
        }
    } else {
        // Display a "No posts found" message if there are no posts
        echo '<p>No posts found.</p>';
    }
    ?>
</main>

<?php
get_sidebar(); // Include sidebar.php
get_footer(); // Include footer.php

?>
