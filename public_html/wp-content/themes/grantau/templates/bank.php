<?php
$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
$sub_text = get_sub_field('sub_text');
$btn = get_sub_field('btn');
?>


<section class="bank-partners-section">
    <div class="container">
        <?php get_template_part('components/title', null, $title); ?>
        <div class="bank-partners-flex">
            <?php if (have_rows('rep_img')): ?>
                <div class="banks-column">
                    <div class="banks-grid">
                        <?php while (have_rows('rep_img')):the_row(); ?>
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
                <h2><?php echo esc_html($sub_title ?: " "); ?> </h2>

                <?php if ($sub_text): ?>
                    <?php out_content($sub_text); ?>
                <?php endif; ?>

                <?php if ($btn): ?>
                    <button class="btn btn-primary" onclick="openContactForm()">
                        <i class="fas fa-phone"></i>
                        <?php out_content($btn); ?>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>