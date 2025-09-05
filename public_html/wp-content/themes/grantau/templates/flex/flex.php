<?php while (have_rows("plex_page")): the_row(); ?>

    <?php if (get_row_layout() == "flex_main_title"): ?>
        <?php $title = get_sub_field('title') ?: "Заголовок"; ?>
        <?php elseif (get_row_layout() === "flex_hero"): ?>
        <section class="hero-section paddingTop" id="hero">
            <div class="container">
                <?php get_template_part('templates/hero'); ?>
            </div>
        </section>

    <?php elseif (get_row_layout() === "flex_advantage"): ?>
        <section class="advantages-section" id="advantages">
            <div class="container">
                <div class="section-header">
                    <h2><?php echo wp_kses_post($title);?></h2>
                    <div class="section-divider">
                </div>
                <?php get_template_part('templates/advantage'); ?>
            </div>
        </section>

    <?php  elseif (get_row_layout() ==="flex_post"): ?>
        <?php get_template_part("templates/flex/flex_single"); ?>

    <?php endif; ?>

<?php endwhile; ?>