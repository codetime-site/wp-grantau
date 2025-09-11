<?php $maps = get_sub_field('link_map'); ?>
<?php if ($maps): ?>
    <div class="maps">
        <iframe class="maps" src="<?php echo esc_url($maps); ?>" frameborder="0"></iframe>
    </div>
<?php endif ?>