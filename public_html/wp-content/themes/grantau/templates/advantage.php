<?php if (have_rows('rep_content')): ?>
    <div class="advantages-grid">
        <?php while (have_rows('rep_content')):the_row();?>
        
            <?php $title_rep = get_sub_field('title'); ?>
            <?php $sub_title = get_sub_field('sub_title'); ?>
            <div class="advantage-item">
                <div class="advantage-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3><?php echo esc_html($title_rep);?></h3>
                <p><?php echo wp_kses_post($sub_title);?></p>
            </div>

        <?php endwhile; ?>
    </div>
<?php endif; ?>

