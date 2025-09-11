<?php if (have_rows('rep_link', 'option')): ?>
    <?php while (have_rows('rep_link', 'option')): the_row(); ?>
        <?php $icon = get_sub_field('icon'); ?>
        <?php $link = get_sub_field('link'); ?>
        <?php if ($icon && $link): ?>
            <a href="<?php echo esc_url($link) ?>" class="social-link <?php echo esc_html($icon) ?>" target="_blank">
                <i class="fontello-<?php echo esc_html($icon) ?>"></i>
            </a>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>