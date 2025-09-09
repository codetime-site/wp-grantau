<?php
$title = get_query_var('title');
$logo = get_sub_field('logo');
$btn = get_sub_field('btn');
?>
<?php if (have_rows('rep_gap')): ?>
    <?php while (have_rows('rep_gap')): the_row(); ?>
        <?php $btn_key[] = get_sub_field('btn_key'); ?>
        <?php $btnin[] = get_sub_field('btn'); ?>
        <?php $main_img[] = get_sub_field('main_img'); ?>
        <?php $plan_img[] = get_sub_field('plan_img'); ?>
        <?php $myVariants[] = get_sub_field('varians'); ?>
        <?php $text_content[] = get_sub_field('text_content'); ?>
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

                <!-- Center Content -->
                <div class="project-center">
                    <div class="house-main-image">
                        <img src="<?php echo $main_img[0]; ?>" alt="Дом Армитис" id="main-house-image">
                    </div>
                    <div class="house-plan">
                        <img src="<?php echo $plan_img[0]; ?>" alt="План дома" id="house-plan-image">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="project-right">
                    <div class="house-variants">

                        <div class="variant-image" data-variant="1">
                            <img src="<?php echo esc_url($myVariants[0][0]);?>" alt="Вариант 1">
                        </div>
                        <div class="variant-image" data-variant="2">
                            <img src="<?php echo esc_url($myVariants[0][1]);?>" alt="Вариант 2">
                        </div>
                        <div class="variant-image" data-variant="3">
                            <img src="<?php echo esc_url($myVariants[0][2]);?>" alt="Вариант 3">
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
                            <h4 id="specs-area">ПЛОЩАДЬ ДОМА 125 М<sup>2</sup></h4>
                            <ul class="specs-list">
                                <li>
                                    <i class="fas fa-door-open"></i>
                                    <span id="spec-entrance">Вх. группа</span>
                                </li>
                                <li>
                                    <i class="fas fa-fire"></i>
                                    <span id="spec-boiler">Котельная</span>
                                </li>
                                <li>
                                    <i class="fas fa-bed"></i>
                                    <span id="spec-bedrooms">3 спальни</span>
                                </li>
                                <li>
                                    <i class="fas fa-bath"></i>
                                    <span id="spec-bathrooms">2 сан/узла</span>
                                </li>
                                <li>
                                    <i class="fas fa-couch"></i>
                                    <span id="spec-kitchen">Кухня-гостиная</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block_padding_40"></div>
        <?php if ($btn): ?>
            <div class="project-actions">
                <button class="btn btn-primary"
                    onclick="window.location.href='project_page.php'"><?php echo esc_html($btn); ?></button>
            </div>
        <?php endif; ?>
    </div>
</section>

<script>

    function initAmethystCalculator() {

        // кнопки с лева 
        const projectButtons = document.querySelectorAll('.floor-btn');

        // мини картинки 
        const variantImages = document.querySelectorAll('.variant-image');

        // центральные картинки 
        const mainImage = document.getElementById('main-house-image');
        const planImage = document.getElementById('house-plan-image');

        // временно отключил  
        const projectName = document.getElementById('project-name');
        const projectDescription = document.getElementById('project-description');

        // другая страница  
        const h3 = document.getElementById('project-info__h3');
        const h32 = document.getElementById('project-info__h32');
        if (h3 && h32) {
            var cur = h3.innerText;
            var cur2 = h32.innerText;
        }

        // текстовый контент 
        // const specArea = document.getElementById('specs-area');
        // const specEntrance = document.getElementById('spec-entrance');
        // const specBoiler = document.getElementById('spec-boiler');
        // const specBedrooms = document.getElementById('spec-bedrooms');
        // const specBathrooms = document.getElementById('spec-bathrooms');
        // const specKitchen = document.getElementById('spec-kitchen');


        const projectData = {};
        const key = <?php echo json_encode($btn_key); ?>;
        const btn_name = <?php echo json_encode($btnin); ?>;
        const main_img = <?php echo json_encode($main_img); ?>;
        const plan_img = <?php echo json_encode($plan_img); ?>;
        const myVariants = <?php echo json_encode($myVariants); ?>;
        const textCon = <?php echo json_encode($text_content); ?>;

        key.forEach((projKey, index) => {
            projectData[projKey] = {
                name: btn_name[index],
                mainImage: main_img[index],
                planImage: plan_img[index],
                variants: myVariants[index] || [],  // Массив вариантов для этого проекта
                text: textCon[index]
            };
        })

        console.log(projectData)

        /*
                        const projectData = {
                            'armitis': {
                                name: 'АРМИТИС',
                                description: 'Современный дом с продуманной планировкой, идеальный для семьи. Большие окна и функциональные пространства обеспечивают комфорт и стиль.',  // Добавлено по примеру
                                mainImage: 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=600&h=400&fit=crop&crop=center',
                                planImage: 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=500&h=350&fit=crop&crop=center',
                                text: 'Проект АРМИТИС был разработан нашей командой архитекторов и инженеров в течение 6 месяцев. Мы начали с анализа потребностей современной семьи.',  // Исправлено и добавлено
                                variants: [  // Уже было
                                    'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=200&h=150&fit=crop&crop=center',
                                    'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=200&h=150&fit=crop&crop=center',
                                    'https://images.unsplash.com/photo-1600047509358-9dc75507daeb?w=200&h=150&fit=crop&crop=center'
                                ],
                                specs: {
                                    area: 'ПЛОЩАДЬ ДОМА 125 М²',
                                    entrance: 'Вх. группа',
                                    boiler: 'Котельная',
                                    bedrooms: '3 спальни',
                                    bathrooms: '2 сан/узла',
                                    kitchen: 'Кухня-гостиная'
                                }
                            },
                            'agat': {
                                name: 'АГАТ',
                                description: 'Современный одноэтажный дом в скандинавском стиле. Функциональная планировка, высокие потолки и большие окна создают ощущение простора и наполняют дом естественным светом.',
                                mainImage: 'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=600&h=400&fit=crop&crop=center',
                                planImage: 'https://images.unsplash.com/photo-1484154218962-a197022b5858?w=500&h=350&fit=crop&crop=center',
                                text: 'Проект АГАТ был разработан нашей командой архитекторов и инженеров в течение 6 месяцев. Мы начали с анализа потребностей современной семьи.',  // Исправлено
                                variants: [  // Из variantImagesData
                                    'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=200&h=150&fit=crop&crop=center',
                                    'https://images.unsplash.com/photo-1564013434775-f71db0030976?w=200&h=150&fit=crop&crop=center',
                                    'https://images.unsplash.com/photo-1564013411270-43d32ba75cd1?w=200&h=150&fit=crop&crop=center'
                                ],
                                specs: {
                                    area: 'ПЛОЩАДЬ ДОМА 110 М²',
                                    entrance: 'Вх. группа',
                                    boiler: 'Котельная',
                                    bedrooms: '2 спальни',
                                    bathrooms: '1 сан/узел',
                                    kitchen: 'Отдельная кухня'
                                }
                            },
                            'ametist': {
                                name: 'АМЕТИСТ',
                                description: 'Роскошный двухэтажный дом в средиземноморском стиле. Просторная терраса, высокие потолки и изысканные детали создают атмосферу итальянской виллы.',
                                mainImage: 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?w=600&h=400&fit=crop&crop=center',
                                planImage: 'https://images.unsplash.com/photo-1536376072261-38c75010e6c9?w=500&h=350&fit=crop&crop=center',
                                text: 'Проект АМЕТИСТ был разработан нашей командой архитекторов и инженеров в течение 6 месяцев. Мы начали с анализа потребностей современной семьи.',  // Исправлено
                                variants: [  // Из variantImagesData
                                    'https://images.unsplash.com/photo-1570129477492-45c003edd2be?w=200&h=150&fit=crop&crop=center',
                                    'https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=200&h=150&fit=crop&crop=center',
                                    'https://images.unsplash.com/photo-1576941089067-2de3c901e126?w=200&h=150&fit=crop&crop=center'
                                ],
                                specs: {
                                    area: 'ПЛОЩАДЬ ДОМА 180 М²',
                                    entrance: 'Вх. группа',
                                    boiler: 'Котельная',
                                    bedrooms: '4 спальни',
                                    bathrooms: '3 сан/узла',
                                    kitchen: 'Кухня-столовая'
                                }
                            },
                            'rubin': {
                                name: 'РУБИН',
                                description: 'Компактный и экологичный дом в скандинавском стиле. Минималистичный дизайн, натуральные материалы и энергоэффективные решения делают этот дом идеальным для ценителей экостиля.',
                                mainImage: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=400&fit=crop&crop=center',
                                planImage: 'https://images.unsplash.com/photo-1502005097973-6a7082348e28?w=500&h=350&fit=crop&crop=center',
                                text: 'Проект РУБИН был разработан нашей командой архитекторов и инженеров в течение 6 месяцев. Мы начали с анализа потребностей современной семьи.',  // Исправлено
                                variants: [  // Из variantImagesData
                                    'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=200&h=150&fit=crop&crop=center',
                                    'https://images.unsplash.com/photo-1523217582562-09d0def993a6?w=200&h=150&fit=crop&crop=center',
                                    'https://images.unsplash.com/photo-1502005097973-6a7082348e28?w=200&h=150&fit=crop&crop=center'
                                ],
                                specs: {
                                    area: 'ПЛОЩАДЬ ДОМА 95 М²',
                                    entrance: 'Вх. группа',
                                    boiler: 'Котельная',
                                    bedrooms: '2 спальни',
                                    bathrooms: '1 сан/узел',
                                    kitchen: 'Кухня-гостиная'
                                }
                            },
                            'almaz': {
                                name: 'АЛМАЗ',
                                description: 'Просторный дом с мансардой, сочетающий классическую архитектуру и современные технологии. Большие окна и открытая планировка создают ощущение легкости и простора.',
                                mainImage: 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&h=400&fit=crop&crop=center',
                                planImage: 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=500&h=350&fit=crop&crop=center',
                                text: 'Проект АЛМАЗ был разработан нашей командой архитекторов и инженеров в течение 6 месяцев. Мы начали с анализа потребностей современной семьи.',  // Исправлено
                                variants: [  // Из variantImagesData
                                    'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=200&h=150&fit=crop&crop=center',
                                    'https://images.unsplash.com/photo-1600047509358-9dc75507daeb?w=200&h=150&fit=crop&crop=center',
                                    'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=200&h=150&fit=crop&crop=center'
                                ],
                                specs: {
                                    area: 'ПЛОЩАДЬ ДОМА 140 М²',
                                    entrance: 'Вх. группа',
                                    boiler: 'Котельная',
                                    bedrooms: '3 спальни',
                                    bathrooms: '2 сан/узла',
                                    kitchen: 'Кухня-гостиная'
                                }
                            },
                            'moonstone': {
                                name: 'ЛУННЫЙ КАМЕНЬ',
                                description: 'Уютный одноэтажный дом с террасой, идеально подходящий для небольшой семьи. Продуманная планировка и качественные материалы обеспечивают комфорт и долговечность.',
                                mainImage: 'https://images.unsplash.com/photo-1600047509358-9dc75507daeb?w=600&h=400&fit=crop&crop=center',
                                planImage: 'https://images.unsplash.com/photo-1484154218962-a197022b5858?w=500&h=350&fit=crop&crop=center',
                                text: 'Проект ЛУННЫЙ КАМЕНЬ был разработан нашей командой архитекторов и инженеров в течение 6 месяцев. Мы начали с анализа потребностей современной семьи.',  // Исправлено
                                variants: [  // Из variantImagesData
                                    'https://images.unsplash.com/photo-1600047509358-9dc75507daeb?w=200&h=150&fit=crop&crop=center',
                                    'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=200&h=150&fit=crop&crop=center',
                                    'https://images.unsplash.com/photo-1564013434775-f71db0030976?w=200&h=150&fit=crop&crop=center'
                                ],
                                specs: {
                                    area: 'ПЛОЩАДЬ ДОМА 85 М²',
                                    entrance: 'Вх. группа',
                                    boiler: 'Котельная',
                                    bedrooms: '2 спальни',
                                    bathrooms: '1 сан/узел',
                                    kitchen: 'Кухня-гостиная'
                                }
                            }
                        };
                
                */
        // Function to update project content


        function updateProjectContent(projectKey) {
            const project = projectData[projectKey];
            if (project) {
                // Update project name and description
                projectName.textContent = project.name;
                projectDescription.textContent = project.description;

                // проверка 
                if (h3 && h32) {
                    h3.textContent = cur + "  " + project.name;
                    h32.textContent = cur2 + " для проекта " + project.name;
                }

                // Update main and plan images with fade effect
                mainImage.style.opacity = '0';
                planImage.style.opacity = '0';

                setTimeout(() => {
                    mainImage.src = project.mainImage;
                    mainImage.style.transition = 'opacity 0.5s ease';
                    mainImage.style.opacity = '1';

                    planImage.src = project.planImage;
                    planImage.style.transition = 'opacity 0.5s ease';
                    planImage.style.opacity = '1';
                }, 300);

                // specArea.innerHTML = project.specs.area + '<sup>2</sup>';
                // specEntrance.textContent = project.specs.entrance;
                // specBoiler.textContent = project.specs.boiler;
                // specBedrooms.textContent = project.specs.bedrooms;
                // specBathrooms.textContent = project.specs.bathrooms;
                // specKitchen.textContent = project.specs.kitchen;

                // const variants = projectData.variants[projectKey];
                variantImages.forEach((variant, index) => {
                    variant.querySelector('img').src = project.variants[index];
                    console.log(projectData);
                });


            }
        }

        // Project buttons functionality
        projectButtons.forEach(button => {
            button.addEventListener('click', function () {
                const projectKey = this.getAttribute('data-project');

                // Remove active class from all buttons
                projectButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                this.classList.add('active');

                // Add click animation
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);

                // Update project content
                updateProjectContent(projectKey);
            });
        });

        // Variant images functionality
        variantImages.forEach((variant, index) => {
            variant.addEventListener('click', function () {
                // Get active project
                const activeProject = document.querySelector('.floor-btn.active').getAttribute('data-project');
                const projectItem = projectData[activeProject]
                const variants = projectItem.variants

                if (variants && variants[index]) {
                    // Update main image
                    mainImage.style.opacity = '0';
                    setTimeout(() => {
                        mainImage.src = variants[index].replace('w=200&h=150', 'w=600&h=400');
                        mainImage.style.transition = 'opacity 0.3s ease';
                        mainImage.style.opacity = '1';
                    }, 150);
                }

                // Add selection effect
                variantImages.forEach(v => v.style.border = 'none');
                this.style.border = '3px solid #d4af37';
            });

            // Add hover effect
            variant.addEventListener('mouseenter', function () {
                this.style.transform = 'scale(1.05)';
            });

            variant.addEventListener('mouseleave', function () {
                this.style.transform = 'scale(1)';
            });
        });

        // Initialize with first project
        updateProjectContent('armitis');
    }


</script>