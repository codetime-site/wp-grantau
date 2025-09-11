<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php echo bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo("name") ?></title>
    <meta name="description" content="<?php echo bloginfo("description") ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header" id="header-get">
        <div class="container">
            <div class="header-content">
                <?php get_template_part('contacts/logo'); ?>
                <div class="brand-text">
                    <?php get_template_part('contacts/title'); ?>
                    <?php get_template_part('contacts/subtitle'); ?>
                </div>
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
                            <?php get_template_part('contacts/phone'); ?>
                        </div>
                        <div class="social-links__btm">
                            <?php get_template_part('contacts/socials'); ?>
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