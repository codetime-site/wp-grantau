<?php
$title = get_query_var('title');
$text = get_sub_field('text');
$logo = get_sub_field('logo');
$sub_title = get_sub_field('sub_title');
?>

<section class="about-section" id="about">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2><?php echo esc_html($title ?: " "); ?> </h2>

                <?php if ($text): ?>
                    <?php out_content($text); ?>
                <?php endif; ?>
            </div>
            <div class="about-logo">
                <?php if ($logo): ?>
                    <div class="company-logo-animated">
                        <div class="logo-circle">
                            <img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_html($title); ?>">
                        </div>
                        <?php if ($sub_title): ?>
                            <div class="logo-text"><?php echo esc_html($sub_title); ?></div>
                        <?php endif; ?>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>