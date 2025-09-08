<?php 
$title = get_query_var('title');
$subscribe = get_query_var('subscribe');
$btn = get_sub_field('btn');
$img = get_sub_field('img');?>

<div class="hero-content">

    <div class="hero-text">
        <?php if($title):?>
            <h2 class="hero-title"><?php  out_content($title);?></h2>
        <?php endif;?>
        
        <?php if($subscribe):?>
            <p class="hero-description"><?php  out_content($subscribe);?> </p>
        <?php endif;?>

        <div class="hero-buttons">
            <button class="btn btn-primary" onclick="openCalculator()">
                <?php echo esc_html( $btn ?: 'Click' );?>
            </button>
        </div>
    </div>

    <div class="hero-image-container">
        <img src="<?php echo esc_url( $img ?: home_url('/') );?>" alt="Кирпичный дом" class="hero-house-image">
    </div>
</div>

<div class="hero-bottom">
    <div class="hero-contact">
        <div class="phone-section">
            <span class="phone-label">ТЕЛЕФОН</span>
            <a href="tel:8 (987) 414-60-60" class="phone-number">8 (987) 414-60-60</a href="tel:">
        </div>
        <div class="social-section">
            <a href="https://t.me/grantau" class="social-link telegram" target="_blank">
                <i class="fontello-telegram"></i>
            </a>
            <a href="https://wa.me/79874146060" class="social-link whatsapp" target="_blank">
                <i class="fontello-whatsapp"></i>
            </a>
        </div>
    </div>
</div>