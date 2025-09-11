<?php
$title = get_sub_field('title');
$subscribe = get_sub_field('subscribe');
$btn = get_sub_field('btn');
$img = get_sub_field('img'); ?>

<div class="hero-content">

    <div class="hero-text">
        <?php if ($title): ?>
            <h2 class="hero-title"><?php out_content($title); ?></h2>
        <?php endif; ?>
        <?php if ($subscribe): ?>
            <p class="hero-description"><?php out_content($subscribe); ?> </p>
        <?php endif; ?>

        <div class="hero-buttons">
            <button class="btn btn-primary" onclick="openCalculator()">
                <?php echo esc_html($btn ?: 'Click'); ?>
            </button>
        </div>
    </div>

    <div class="hero-image-container">
        <img src="<?php echo esc_url($img ?: home_url('/')); ?>" alt="Кирпичный дом" class="hero-house-image">
    </div>
</div>

<div class="hero-bottom">
    <div class="hero-contact">
        <div class="phone-section">
            <span class="phone-label">ТЕЛЕФОН</span>
            <?php get_template_part('contacts/phone'); ?>
        </div>
        <div class="social-section">

            <?php get_template_part('contacts/socials'); ?>

        </div>
    </div>
</div>