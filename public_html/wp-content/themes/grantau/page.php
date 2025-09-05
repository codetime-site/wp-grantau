<?php get_header(); ?>
<main role="main">
    <div class="container">
        <?php if (get_the_content()): ?>
                <div><?php the_content(); ?></div>
        <?php endif; ?>
        <?php if(have_rows("plex_page")): ?>
            <?php  get_template_part("flex"); ?>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>