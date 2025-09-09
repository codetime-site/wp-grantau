<?php
$calc_title = get_sub_field('calc_title');
$calc_text = get_sub_field('calc_text');
$calc_btn = get_sub_field('calc_btn');

$gift_title = get_sub_field('gift_title');
$gift_text = get_sub_field('gift_text');
$gift_img = get_sub_field('gift_img');
$gift_btn = get_sub_field('gift_btn');
$gift_btn2 = get_sub_field('gift_btn_2');
$rep_content = "rep_calc";
?>

<div class="gift-content">
    <div class="calculator-block">
        <?php if ($calc_title): ?>
            <h2> <?= esc_html($calc_title); ?></h2>
        <?php endif; ?>
        <?php if ($calc_text): ?>
            <p> <?= esc_html($calc_text); ?></p>
        <?php endif; ?>

        <form class="calculator-form" action="process-form.php" method="POST">
            <input type="hidden" name="form_type" value="calculator">
            <div class="calculator-options">
                <?php if (have_rows($rep_content)): ?>
                    <?php while (have_rows($rep_content)):
                        the_row(); ?>
                        <?php $label = get_sub_field('label'); ?>
                        <?php $select = get_sub_field('select'); ?>
                        <div class="calc-option">
                            <?php if ($label): ?><label> <?= $label; ?></label><?php endif; ?>
                            <?php if ($select): ?>             <?php echo ($select); ?>         <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php if ($calc_btn): ?>
                <button type="submit" class="btn btn-calculate">
                    <i class="fas fa-calculator"></i>
                    <?= esc_html($calc_btn); ?>
                </button>
            <?php endif; ?>
        </form>
    </div>

    <div class="gift-block">
        <?php if ($gift_title): ?>
            <h2> <?= esc_html($gift_title); ?></h2>
        <?php endif; ?>
        <?php if ($gift_text): ?>
            <p> <?= esc_html($gift_text); ?></p>
        <?php endif; ?>
        <?php if ($gift_img): ?>
            <div class="gift-visual">
                <img src="<?php echo esc_url($gift_img); ?>" class="gift-image">
            </div>
        <?php endif; ?>
        <?php if ($gift_btn || $gift_btn2): ?>
            <div class="gift-buttons">
                <?php if ($gift_btn): ?>
                    <button class="btn btn-gift" onclick="openGiftForm()">
                        <i class="fas fa-gift"></i>
                        <?php echo esc_html($gift_btn); ?>
                    </button>
                <?php endif; ?>
                <?php if ($gift_btn2): ?>
                    <button class="btn btn-secondary" onclick="openContactForm()">
                        <i class="fas fa-phone"></i>
                        <?php echo esc_html($gift_btn2); ?>
                    </button>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
