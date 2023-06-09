<?php
/**
 * Footer content
 *
 * @package Writer X
 */
?>

        <footer class="" style="background-color: #ffffdd; padding: 5rem 0 0 5rem">
            <div class="container text-center">
                <div class="row row-cols-lg-3 mx-auto">
                    <div class="col-lg-4 p-3 px-lg-5 text-start">
                        <h6 class="mt-3 fs-4 fw-medium text-start" style="color: #6119FF">What We Do</h6>
                        <div>
                            <a href="/about" class="mt-3 fs-4 text-start text-dark">About Us</a>
                        </div>

                        <div>
                            <a href="/categories" class="mt-3 fs-4 text-start text-dark">Categories</a>
                        </div>

                        <div>
                            <a href="/services" class="mt-3 fs-4 text-start text-dark">Our Services</a>
                        </div>

                        <div>
                            <a href="/blog" class="mt-3 fs-4 text-start text-dark">Blog</a>
                        </div>

                        <div>
                            <a href="/pricing" class="mt-3 fs-4 text-start text-dark">Pricing</a>
                        </div>

                    </div>

                    <div class="col-lg-4 p-3 px-lg-5">
                        <p class="mt-3 fs-5 text-start text-dark-emphasis">Business Writing & Reports</p>
                        <p class="mt-3 fs-5 text-start text-dark-emphasis">Technical Writing Service</p>
                        <p class="mt-3 fs-5 text-start text-dark-emphasis">Professional PowerPoint Presentations</p>
                        <p class="mt-3 fs-5 text-start text-dark-emphasis">Statistics and Data Analysis</p>
                        <p class="mt-3 fs-5 text-start text-dark-emphasis">Programming and Coding</p>
                    </div>

                    <div class="col-lg-4 p-3 px-lg-5">
                        <h3 class="">Get In Touch</h3>
                    </div>
                </div>
            </div>

            <p class="mt-3 text-center">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        </footer>

    </div>
</div>
<?php
wp_footer();
?>
</body>
</html>
