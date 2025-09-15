<?php get_template_part('templates/contact_form')?>
<div>
    <button id="btnUpper" class="btnUpper fontello-angle-up"></button>
</div>
<footer class="footer" id="contacts">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <div class="footer-logo">
                    <?php get_template_part('contacts/logo'); ?>
                    <div>
                        <?php get_template_part('contacts/title'); ?>
                        <?php get_template_part('contacts/subtitle'); ?>
                    </div>
                </div>
            </div>

            <div class="footer-section">
                <h4>Контакты</h4>
                <div class="con">
                    <div class="con_text">
                        <?php get_template_part('contacts/phone'); ?>
                        <?php get_template_part('contacts/email'); ?>
                        <?php get_template_part('contacts/inn'); ?>
                        <?php get_template_part('contacts/adress'); ?>
                        <div class="con__social">
                            <?php get_template_part('contacts/socials'); ?>
                        </div>
                    </div>
                    <div class="con_qr logo-icon">
                        <img src="http://grantau.codetime.site/wp-content/uploads/2025/09/screenshot_2025-09-09_083558-removebg-preview.png"
                            alt="">
                    </div>
                </div>

            </div>
            <div class="footer-section">
                <?php get_template_part('contacts/work_time'); ?>
            </div>
        </div>

        <div class="footer-bottom">
            <a href="https://grantau.codetime.site/?page_id=3" target="_blank">&copy; <?php echo date('Y'); ?> Грантау.
                Все права защищены.</a>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>


</body>

</html>