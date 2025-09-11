<?php if (settinfPage('info_adress')): ?>
    <a href="<?php echo esc_url(get_query_var('link_obaut')); ?>" class="social-link">
        <i class="fas fa-envelope"></i> <?php echo esc_html(settinfPage('info_adress')); ?>
    </a>

<?php endif; ?>
