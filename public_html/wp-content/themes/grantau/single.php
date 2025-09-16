<?php get_header(); ?>
<main role="main">
    <?php if (get_the_content()): ?>
        <div><?php the_content(); ?></div>
    <?php endif; ?>

    <?php if (have_rows("plex_page")): ?>
        <?php get_template_part("templates/flex/flex"); ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>