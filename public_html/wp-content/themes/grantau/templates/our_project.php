<?php
$title = get_sub_field('title');
$logo = get_sub_field('logo');
$btn = get_sub_field('btn');
?>
<?php if (have_rows('rep_gap')): ?>
    <?php while (have_rows('rep_gap')):
        the_row(); ?>
        <?php $btn_key[] = get_sub_field('btn_key'); ?>
        <?php $btnin[] = get_sub_field('btn'); ?>
        <?php $main_img[] = get_sub_field('main_img'); ?>
        <?php $plan_img[] = get_sub_field('plan_img'); ?>
        <?php $myVariants[] = get_sub_field('varians'); ?>
        <?php $text_content[] = get_sub_field('spec'); ?>
    <?php endwhile; ?>
<?php endif; ?>


<section class="projects-section" id="ourProjects">
    <div class="container">
        <div class="project-showcase">

            <div class="project-header">
                <?php if ($title): ?>
                    <h2 class="project-title"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>

                <?php if ($logo): ?>
                    <div class="project-logo">
                        <div class="animated-logo">
                            <img src="<?php echo esc_url($logo); ?>" alt="">
                        </div>
                    </div>
                <?php endif; ?>

            </div>

            <div class="project-content">

                <!-- Left Controls -->
                <div class="project-controls">
                    <div class="floor-buttons">
                        <?php if ($btnin || $btn_key):
                            $classActive; ?>
                            <?php foreach ($btnin as $key => $value): ?>
                                <?php $classActive = ($key === 0) ? "active" : ""; ?>
                                <button class="floor-btn <?php echo esc_html($classActive); ?>"
                                    data-project="<?php echo esc_attr($btn_key[$key]); ?>"><?php echo esc_html($value); ?>
                                </button>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php $first = 0; ?>
                <!-- Center Content -->
                <div class="project-center">
                    <div class="house-main-image">
                        <img src="<?php echo $main_img[$first]; ?>" alt="Дом Армитис" id="main-house-image">
                    </div>
                    <div class="house-plan">
                        <img src="<?php echo $plan_img[$first]; ?>" alt="План дома" id="house-plan-image">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="project-right">
                    <div class="house-variants">
                        <div class="variant-image" data-variant="1">
                            <img src="<?php echo esc_url($myVariants[$first][0]); ?>" alt="Вариант 1">
                        </div>
                        <div class="variant-image" data-variant="2">
                            <img src="<?php echo esc_url($myVariants[$first][1]); ?>" alt="Вариант 2">
                        </div>
                        <div class="variant-image" data-variant="3">
                            <img src="<?php echo esc_url($myVariants[$first][2]); ?>" alt="Вариант 3">
                        </div>
                    </div>

                    <div class="house-info" style="">
                        <h3 id="project-name" style="display:none">АРМИТИС</h3>
                        <p id="project-description" class="project-description" style="display:none">
                            Элегантный двухэтажный дом с современной архитектурой. Просторные комнаты,
                            панорамные окна и продуманная планировка делают этот проект идеальным для
                            комфортной семейной жизни.
                        </p>
                        <div class="specs-box">
                            <h4 id="specs-area"><?php echo esc_html($text_content[$first]["area"]); ?></h4>
                            <ul class="specs-list">
                                <?php foreach ($text_content[$first] as $firsts_key => $firsts_val): ?>
                                    <?php if (!($firsts_key == 'area')): ?>
                                        <li>
                                            <i class="fontello-ok-1"></i>
                                            <span
                                                id="spec-<?php echo esc_attr($firsts_key); ?>"><?php echo esc_html($firsts_val); ?></span>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block_padding_40"></div>
        <?php if (!($btn)): ?>
            <div class="project-actions">
                <button class="btn btn-primary"
                    onclick="window.location.href='project_page.php'"><?php echo esc_html($btn); ?></button>
            </div>
        <?php endif; ?>
    </div>
</section>

<script>
    const key = <?php echo json_encode($btn_key); ?>;
    const btn_name = <?php echo json_encode($btnin); ?>;
    const main_img = <?php echo json_encode($main_img); ?>;
    const plan_img = <?php echo json_encode($plan_img); ?>;
    const myVariants = <?php echo json_encode($myVariants); ?>;
    const textCon = <?php echo json_encode($text_content); ?>;
</script>