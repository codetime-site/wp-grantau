<?php
$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
$btn = get_sub_field('btn');
?>
<div class="bank-partners-flex">
    <?php if (have_rows('rep_img')): ?>
        <div class="banks-column">
            <div class="banks-grid">
                <?php while (have_rows('rep_img')):
                    the_row(); ?>
                    <?php $img = get_sub_field('img');
                    if ($img): ?>
                        <div class="bank-logo">
                            <div class="bank-icon">
                                <img src="<?php out_content($img); ?>" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="mortgage-help">
        <h2><?php echo esc_html($title ?: " "); ?> </h2>

        <?php if ($sub_title): ?>
            <?php out_content($sub_title); ?>
        <?php endif; ?>

        <?php if ($btn): ?>
            <button class="btn btn-primary" onclick="openContactForm()">
                <i class="fas fa-phone"></i>
                <?php out_content($btn); ?>
            </button>
        <?php endif; ?>
    </div>
</div>