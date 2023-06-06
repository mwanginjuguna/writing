<?php
/**
 * Footer content
 *
 * @package Writer X
 */
?>

        <footer class="container text-center">
            <nav class="navbar navbar-expand-lg navbar-light bg-light row row-cols-lg-3 mx-auto">
                <div class="col navbar-collapse justify-content-start" id="navbarNav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'secondary',
                        'menu_class' => 'navbar-nav',
                        'container' => false,
                    ));
                    ?>
                </div>

                <div class="col p-3 px-lg-5">
                    <div class="mt-2">Report Writing Service</div>
                    <div class="mt-2">Technical Writing Service</div>
                    <div class="mt-2">PowerPoint Writing Service</div>
                    <div class="mt-2">Coursework Writing Service</div>
                    <div class="mt-2">Case Study Writing Service</div>
                </div>

                <div class="col p-3 px-lg-5">
                    <h3 class="">Contact Us</h3>
                    <a href="mailto::info@writeessayscheap.org">info@writeessayscheap.org</a>
                </div>
            </nav>
            <p class="mt-3">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        </footer>

    </div>
</div>
<?php
wp_footer();
?>
</body>
</html>
