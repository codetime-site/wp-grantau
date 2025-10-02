<?php while (have_rows("plex_page")):
    the_row(); ?>

    <?php if (get_row_layout() == "flex_main_title"): ?>
        <?php get_template_part('templates/logic_section/sendler'); ?>

    <?php elseif (get_row_layout() === "setting_maps"): ?>
        <?php get_template_part("templates/logic_section/sendler"); ?>


    <?php elseif (get_row_layout() == "flex_main_subs"): ?>
        <?php get_template_part("templates/logic_section/sendler"); ?>

    <?php elseif (get_row_layout() === "flex_hero"): ?>
        <section class="hero-section paddingTop" id="hero">
            <div class="container">
                <?php get_template_part('templates/hero'); ?>
            </div>
        </section>

    <?php elseif (get_row_layout() === "flex_advantage"): ?>
        <?php get_template_part('templates/advantage'); ?>

    <?php elseif (get_row_layout() === "flex_bank"): ?>
        <?php get_template_part("templates/bank"); ?>

    <?php elseif (get_row_layout() === "obaut"): ?>
        <?php get_template_part("templates/about"); ?>

    <?php elseif (get_row_layout() === "flex_our_home"): ?>
        <section class="built-houses-section" id="built-houses">
            <div class="container">
                <?php get_template_part("templates/our_house"); ?>
            </div>
        </section>

    <?php elseif (get_row_layout() === "flex_suplimier"): ?>
        <section class="suppliers-section">
            <div class="container">
                <?php get_template_part("templates/suplimier"); ?>
            </div>
        </section>

    <?php elseif (get_row_layout() === "flex_technology"): ?>
        <section class="technology-section">
            <div class="container">
                <?php get_my_title($title); ?>
                <?php get_template_part("templates/technology"); ?>
            </div>
        </section>

        <?php /*elseif (get_row_layout() === "flex_calc_home"): ?>
           <section class="calculator-section" id="calculator">
               <div class="container">
                   <?php get_template_part("templates/calculate_home"); ?>
               </div>
           </section>
           <?php */ ?>

    <?php elseif (get_row_layout() === "flex_gift"): ?>
        <section class="gift-section">
            <div class="container">
                <?php get_template_part("templates/gift"); ?>
            </div>
        </section>

    <?php elseif (get_row_layout() === "flex_galary"): ?>
        <?php get_template_part("templates/our_project"); ?>

    <?php elseif (get_row_layout() === "flex_post"): ?>
        <?php get_template_part("templates/flex/flex_single"); ?>

    <?php endif; ?>
<?php endwhile; ?>