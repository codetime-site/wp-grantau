<?php $acf_post_obj = get_sub_field('obj_post_obj'); ?>
<?php if ($acf_post_obj): ?>
    <?php foreach ($acf_post_obj as $post): setup_postdata($post); ?>

        <?php if (have_rows("plex_page")): ?>
            <?php get_template_part("flex"); ?>
        <?php endif; ?>

    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>