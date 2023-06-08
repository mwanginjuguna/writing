<?php
/**
 * Template for order-form
 *
 * @package write-x
 */

$assetClass = \WRITING_THEME\Inc\Assets::getInstance();
wp_enqueue_script('writing-theme-main-js');
?>

<section class="d-grid mx-auto mt-lg-5 shadow rounded p-3 pb-4 bg-warning-subtle" style="max-width: 20rem">
    <form action="fs-5" style="z-index: 3;">
        <p style="font-weight: bold; color: #6119FF" class="fs-4">Calculate Price</p>

        <hr class="hr-separator pb-3"/>

        <!--Service Types-->
        <div class="mt-2">
            <select onchange="setInits()" id="service_type" name="service_type" class="form-select" aria-label="Select service type">
                <option selected value="27">Case Study Writing</option>
                <?php
                foreach ($assetClass->services as $service) {
                    ?>
                    <option value="<?php echo $service['id'] ?>" ><?php echo $service['name'] ?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <!--Levels-->
        <div class="row mt-2 row-cols-2">
            <!--Academic Level-->
            <div class="col mt-2">
                <select onchange="setInits()" id="academic_level" name="academic_level" class="form-select" aria-label="Select task nature">
                    <option selected value="6">Personal</option>
                    <?php
                    foreach ($assetClass->levels as $level) {
                        ?>
                        <option value="<?php echo $level['id'] ?>" ><?php echo $level['name'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <!--Deadline-->
            <div class="col mt-2">
                <select id="deadline"
                        class="form-select"
                        name="deadline"
                        onchange="setInits()"
                >
                    <option selected value="168">7 Days</option>
                    <?php
                    foreach ($assetClass->rates as $rate) {
                        ?>
                        <option value="<?php echo $rate['hours'] ?>" ><?php echo $rate['name'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <!--Pages-->
        <div class="mt-2">

            <select onchange="setInits()" id="pages" name="pages"  class="form-select">
                <option selected value="2">2 Pages / 550 words</option>
                <option value="0">0 Pages/ 0 words</option>
                <?php
                foreach (range(1,100) as $page ) {
                    ?>
                    <option value="<?php  echo $page ?>">
                        <?php  echo $page ?> Pages/ <?php echo intval($page) * 275 ?> words
                    </option>
                <?php
                }
                ?>

            </select>
        </div>

        <!--price-->
        <div class="mt-2">
            <p class="p-1 font-bold text-end text-primary text-decoration-underline">
                Price: $<span id="price"></span>

                <script>
                    jQuery(document).ready(function() {
                        setInits();
                    });
                </script>

            </p>
        </div>

        <a href="/orders/new" class="btn my-auto border rounded-3 border-warning fs-5 fw-medium" style="background-color: #FF410D; color: yellow">
            Get Started
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
                <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
            </svg>
        </a>

    </form>

</section>
