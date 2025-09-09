<?php while (have_rows("plex_page")):
    the_row(); ?>

    <?php if (get_row_layout() == "flex_main_title"): ?>
        <?php $title = get_sub_field('title'); ?>
        <?php set_query_var("title", $title); ?>

    <?php elseif (get_row_layout() == "flex_main_subs"): ?>
        <?php $subscribe = get_sub_field('subscribe'); ?>
        <?php set_query_var("subscribe", $subscribe); ?>

    <?php elseif (get_row_layout() === "flex_hero"): ?>
        <section class="hero-section paddingTop" id="hero">
            <div class="container">
                <?php get_template_part('templates/hero'); ?>
            </div>
        </section>

    <?php elseif (get_row_layout() === "flex_advantage"): ?>
        <section class="advantages-section" id="advantages">
            <div class="container">
                <?php get_my_title($title); ?>
                <?php get_template_part('templates/advantage'); ?>
            </div>
        </section>

    <?php elseif (get_row_layout() === "flex_bank"): ?>
        <section class="bank-partners-section">
            <div class="container">
                <?php get_my_title($title); ?>
                <?php get_template_part("templates/bank"); ?>
            </div>
        </section>

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

    <?php elseif (get_row_layout() === "flex_calc_home"): ?>
        <section class="calculator-section" id="calculator">
            <div class="container">
                <?php get_template_part("templates/calculate_home"); ?>
            </div>
        </section>

    <?php elseif (get_row_layout() === "flex_gift"): ?>
        <section class="gift-section">
            <div class="container">
                <?php get_template_part("templates/gift"); ?>
            </div>
        </section>

    <?php elseif (get_row_layout() === "flex_galary"): ?>
        <?php get_template_part("templates/our_project"); ?>

    <?php elseif (get_row_layout() === "setting_maps"): ?>
        <?php get_template_part("templates/map"); ?>

    <?php elseif (get_row_layout() === "flex_post"): ?>
        <?php get_template_part("templates/flex/flex_single"); ?>

    <?php endif; ?>
<?php endwhile; ?>