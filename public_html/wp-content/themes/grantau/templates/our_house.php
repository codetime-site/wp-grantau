<?php $title = get_query_var('title'); ?>
<?php get_my_title($title); ?>
<div class="houses-gallery">
    <?php if(have_rows("rep_img")): ?>
        <?php while (have_rows("rep_img")): the_row(); ?>
        <?php $img = get_sub_field('img');?>
        <?php $sub_title = get_sub_field('title');?>
            <div class="house-item">
                <?php if($img):?>
                    <img src="<?php echo esc_url($img);?>">
                <?php endif;?>
                <?php if($sub_title):?>
                    <div class="house-info">
                        <p><?php echo esc_html($sub_title);?></p>
                    </div>
                <?php endif;?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>