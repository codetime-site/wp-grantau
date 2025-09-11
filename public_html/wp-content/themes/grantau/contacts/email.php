<?php if (settinfPage('mail')): ?>
    <a href="mailto:<?php echo esc_html(settinfPage('mail')); ?>" class="social-link">
        <i class="fas fa-envelope"></i> <?php echo esc_html(settinfPage('mail')); ?>
    </a>
<?php endif; ?>