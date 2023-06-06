<?php
/**
 * Template for order-form
 *
 * @package write-x
 */

$assetClass = \WRITING_THEME\Inc\Assets::getInstance();
wp_enqueue_script('writing-theme-main-js');
?>

<section class="w-25 shadow rounded p-3" style="background-color: #F01851">
    <form action="" style="z-index: 3;">
        <p>Calculate Price</p>

        <!--Service Types-->
        <div class="mt-2">
            <select onchange="setInits()" id="service_type" name="service_type" class="form-select form-select-sm" aria-label="Select service type">
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

        <div id="levelAndDeadlineHelp" class="form-text">
            Select an appropriate nature and deadline for your task.
        </div>

        <div class="row row-cols-2">
            <!--Academic Level-->
            <div class="col mt-2">
                <select onchange="setInits()" id="academic_level" name="academic_level" class="form-select form-select-sm" aria-label="Select task nature">
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
                        class="form-select form-select-sm"
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

            <select onchange="setInits()" id="pages" name="pages"  class="form-select form-select-sm">
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
            <p class="p-1 font-bold text-end">
                Price: $ <span id="price" class="px-1 italic text-decoration-underline">
                    <script>
                        jQuery(document).ready(() => {
                            setInits();
                        });
                    </script>
                </span>
            </p>
        </div>

        <button type="submit" class="btn border rounded-3 border-warning fw-bold" style="background-color: #F0E101;">
            Get Started >
        </button>

    </form>

</section>
