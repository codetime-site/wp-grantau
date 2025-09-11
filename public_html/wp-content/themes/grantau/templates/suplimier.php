<?php $title = get_sub_field('title'); ?>
<?php $subscribe = get_sub_field('subscribe'); ?>

<div class="section-header">
    <h2><?php out_content($title); ?></h2>
    <p><?php out_content($subscribe); ?></p>
</div>

<div class="suppliers-grid">

    <?php if (have_rows("rep_img")): ?>
        <?php while (have_rows("rep_img")): the_row(); ?>
            <?php $img = get_sub_field('img'); ?>
            <?php $sub_title = get_sub_field('title'); ?>

            <div class="supplier-logo">
                <div class="supplier-icon">
                    <?php if ($img): ?>
                        <img src="<?php echo esc_url($img); ?>">
                    <?php endif; ?>

                    <?php if ($sub_title): ?>
                        <span><?php echo esc_html($sub_title); ?></span>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>