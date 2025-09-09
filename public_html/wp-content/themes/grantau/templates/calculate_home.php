<?php
$title = get_sub_field('title');
$subtitle = get_sub_field('sub_title');
$btn = get_sub_field('btn');    
$rep_content = "rep_option";
?>

<?php $main_title = get_query_var('title'); ?>
<?php $subscribe = get_query_var('subscribe'); ?>

<div class="section-header">
    <h2><?php echo esc_html($main_title); ?></h2>
    <p class="discount-text"><?php echo esc_html($subscribe); ?></p>
</div>

<div class="calculator-content">
    <div class="calculator-advanced">
        <h3><?php echo esc_html($subtitle); ?></h3>

        <div class="calculator-options">
            <?php if (have_rows($rep_content)): ?>
                <?php while (have_rows($rep_content)):
                    the_row(); ?>
                    <div class="calc-option">
                        <?php
                        $id = get_sub_field('attr_id') ?: '';
                        $label = get_sub_field('label');
                        $input_num = get_sub_field('input_number');
                        $input_tel = get_sub_field('input_tel');
                        $select = get_sub_field('select');
                        ?>

                        <?php if ($label): ?>
                            <label for="<?php echo esc_attr($id); ?>"><?php echo wp_kses_post($label) ?></label>
                        <?php endif; ?>

                        <?php if ($input_num): ?>
                            <input type="number" id="<?php echo esc_attr($id); ?>" <?php echo wp_kses_post($input_num); ?>>
                        <?php endif; ?>

                        <?php if ($select): ?>
                            <select id="<?php echo esc_attr($id); ?>">
                                <?php echo ($select); ?>
                            </select>
                        <?php endif; ?>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <?php if ($btn): ?>
            <div class="calculator-actions">
                <button class="btn btn-primary coderBtn" onclick="calculateHouseCost()">
                    <i class="fas fa-calculator"></i>
                    <?php echo esc_html($btn); ?>
                </button>
            </div>
        <?php endif; ?>

        <div id="calculationResult"
            style="display: none; margin-top: 2rem; padding: 1rem; background: rgba(212,175,55,0.1); border: 1px solid #d4af37; border-radius: 10px;">
            <!-- Результаты расчета будут отображаться здесь -->
        </div>
    </div>
</div>