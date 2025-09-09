<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php echo bloginfo( "charset" )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo( "name" )?></title>
    <meta name="description" content="<?php echo bloginfo( "description" )?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@200;300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- <script src="script.js"></script> -->
    <?php wp_head(); ?>
</head>

<body>

    <header class="header" id="header-get">
        <div class="container">
            <div class="header-content">

                <a href="/" class="logo-section">
                    <div class="logo-icon">
                        <img src="assets/img/logo.png" alt="">
                    </div>
                    <div class="brand-text">
                        <h1 class="brand-name">ГранТау</h1>
                        <p class="brand-slogan">Фундамент вашего счастья</p>
                    </div>
                </a>

                <nav class="nav-menu">
                    <ul>
                        <li><a href="#ourProjects">Наши проекты</a></li>
                        <li><a href="#built-houses">Построенные дома</a></li>
                        <li><a href="#about">О нас</a></li>
                        <li><a href="#contacts">Контакты</a></li>
                    </ul>
                </nav>

                <div class="contact-info coderIcon">
                    <div class="social-links">
                        <div class="social-links__top">
                            <a href="tel:8 (987) 414-60-60" class="social-link phone" target="_blank">
                                <i class="fontello-phone-call"></i>
                                <p>8 (987) 414-60-60</p>
                            </a>
                        </div>
                        <div class="social-links__btm">
                            <a href="https://t.me/grantau" class="social-link telegram" target="_blank">
                                <i class="fontello-telegram"></i>
                            </a>
                            <a href="https://wa.me/79874146060" class="social-link whatsapp" target="_blank">
                                <i class="fontello-whatsapp"></i>
                            </a>
                        </div>
                        <button class="testBtn" id="blc">🌗</button>
                    </div>
                </div>

                <button class="mobile-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>