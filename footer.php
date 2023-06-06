<?php
/**
 * Footer content
 *
 * @package Writer X
 */
?>

        <footer class="container text-center">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="navbar-collapse justify-content-center" id="navbarNav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'secondary',
                        'menu_class' => 'navbar-nav',
                        'container' => false,
                    ));
                    ?>
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
