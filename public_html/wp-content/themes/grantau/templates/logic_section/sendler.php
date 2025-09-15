<?php $title = get_sub_field('title'); ?>
<?php $color = get_sub_field('color'); ?>
<?php $className = get_sub_field('class'); ?>
<?php $subscribe = get_sub_field('subscribe'); ?>

<?php if ($className && $className === 'section'): ?>

    <section class="nonclass <?php echo esc_attr($color) ?>">
        <div class="container">
            <?php get_template_part('components/title', null, $title); ?>
            <?php get_template_part('templates/map'); ?>
            <?php echo wp_kses_post($subscribe); ?>

        </div>
    </section>

<?php elseif ($className && $className === 'div'): ?>

    <div class="nonclass <?php echo esc_attr($color) ?>">
        <div class="container">
            <?php get_template_part('components/title', null, $title); ?>
            <?php get_template_part('templates/map'); ?>
            <?php echo wp_kses_post($subscribe); ?>
        </div>
    </div>

<?php endif; ?>