<?php while (have_rows("plex_page")):the_row(); ?>
    <?php if (get_row_layout() == "flex_hero"): ?>
        <div class="text-block">
            <?php the_sub_field("text"); ?>
            <img src="<?php the_sub_field("img"); ?>" alt="">
        </div>
    <?php elseif (get_row_layout() === "flex_post"): ?>
        <?php  get_template_part("/templates/flex_single"); ?>
    <?php endif; ?>

<?php endwhile; ?>