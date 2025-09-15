<?php $title = get_sub_field('title'); ?>
<?php $btn = get_sub_field('btn'); ?>
<?php $rep_content = "rep_content"; ?>

<?php get_template_part('components/title', null, $title); ?>
<?php if (have_rows($rep_content)): ?>
    <div class="technology-grid">
        <?php while (have_rows($rep_content)): the_row() ?>
            <?php $title = get_sub_field('sub_title'); ?>
            <?php $item = get_sub_field('item'); ?>
            <div class="tech-item">
                <div class="tech-icon">
                    <i class="fas <?php echo $key['icon']; ?>"></i>
                    <h3><?php echo esc_html($title); ?></h3>
                </div>
                <ul>
                    <?php echo wp_kses_post($item); ?>
                </ul>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<div class="section-actions">
    <button class="btn btn-primary" onclick="openContactForm()">
        <i class="fas fa-phone"></i>
        <?php echo esc_html($btn); ?>
    </button>
</div>