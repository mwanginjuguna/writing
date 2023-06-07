<?php
/**
 * Template to display page content
 *
 * @package writer-x
 */

get_header();
?>

<div class="page-item container">
    <div class="row p-3 pt-lg-5 px-lg-5 py-lg-5 position-relative">
        <div class="col-12 col-lg-8">

            <?php
            if (is_page()) : the_post();
            ?>
            <div class="p-3 py-lg-5">
                <h1 class="pb-5 fw-bolder" style="color: #6119FF">
                    <?php
                    the_title();
                    ?>
                </h1>

                <div style="background-color: #19FFBA" class="p-2 px-lg-4 mb-4 rounded-4 d-block d-lg-none">
                    <h4 class="pb-3 mt-5">On This Page!</h4>
                    <hr class="hr-separator"/>
                    <?php
                    the_excerpt();
                    ?>
                </div>

                <p style="margin-top: 5rem"></p>
                <!--ad-->
                <div class="d-block d-lg-none">
                    <?php
                    get_template_part('template-parts/components/small-order-form');
                    ?>
                </div>

                <div class="mx-3 mx-lg-5 my-5 p-3 p-lg-5 bg-warning-subtle rounded-3 text-dark shadow-lg d-none d-lg-block">
                    <h3 class="mt-3 text-lg-center" style="">
                        A Team of Experts Ready to Help with any Writing, Analysis, or Programming task?
                    </h3>

                    <p class="mt-3 mt-lg-4 d-none d-lg-block">
                        Get expert assistance from professional services. We have a team of 36 expert analysts, programmers, researchers, and tutors from around the world ready to provide quality products.
                    </p>

                    <div class="d-flex justify-content-center mt-5 gap-3 gap-md-5 rounded-5">

                        <div class="p-2 p-lg-1 border border-warning rounded-3 d-flex" style="background-color: #FFFFFF; color: #B30936; max-width: fit-content">
                            <h5 class="text-center fs-lg-4 pt-lg-2 px-4">+200 Tasks Daily</h5>
                        </div>

                        <div class="p-2 border border-warning rounded-3 d-flex" style="background-color: #FFFFFF; color: #B30936; max-width: fit-content">
                            <h5 class="text-center fs-lg-4 pt-lg-2 px-4">+350 Customers</h5>
                        </div>

                    </div>

                    <div class="d-flex py-5 gap-md-3">
                        <?php
                        get_template_part('template-parts/components/primary-action-button')
                        ?>

                        <?php
                        get_template_part('template-parts/components/learn-more-link')
                        ?>
                    </div>

                </div>

                <!--content-->
                <div class="py-5 mt-4">
                    <?php
                    the_content();
                    ?>
                </div>
            </div>
                <?php
            else:
                get_template_part('template-parts/content-none');
            endif;
                ?>
        </div>

        <div class="col-12 col-lg-4 px-3 position-sticky"
             style="position: sticky;
                  top: 0;
                  height: max-content; /* Set the height of the sidebar to fill the viewport */
                  overflow-y: auto; /* Add vertical scrolling if the content overflows */"
        >
            <div style="background-color: #19FFBA" class="p-2 px-lg-4 mb-4 rounded-4 d-none d-lg-block">
                <h4 class="pb-3 mt-5">On This Page!</h4>
                <hr class="hr-separator"/>
                <?php
                the_excerpt();
                ?>
            </div>
            <?php
            get_template_part('template-parts/components/small-order-form');
            ?>
        </div>
    </div>

</div>

<?php
get_footer();
