<?php if(settinfPage('logo')): ?>
    <div class="logo-icon">
        <a href="/" class="logo-section">
            <img src="<?php echo esc_url(settinfPage('logo')); ?>" alt="<?php echo esc_html(settinfPage('title')); ?>">
        </a>
    </div>
<?php endif; ?>