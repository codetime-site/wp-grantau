<?php
$dir = "assets/img/bank/";
$files = glob($dir . "*.png");
?>
<section class="bank-partners-section">
    <div class="container">
        <div class="section-header">
            <h2>Наши банки-партнёры</h2>
        </div>

        <div class="bank-partners-flex">
            <div class="banks-column">
                <div class="banks-grid">
                    <?php if ($files): ?>
                        <?php foreach ($files as $file): ?>
                            <div class="bank-logo">
                                <div class="bank-icon">
                                    <img src="<?php echo $file; ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="mortgage-help">
                <h3>Поможем с ипотекой</h3>
                <p>Мы аккредитованы в крупных банках страны и поможем Вам в короткие сроки получить ипотеку на
                    строительство дома по минимальным ставкам.</p>
                <ul class="mortgage-benefits">
                    <li><i class="fas fa-check-circle"></i> Ипотека от 5.5% годовых</li>
                    <li><i class="fas fa-check-circle"></i> Быстрое одобрение</li>
                    <li><i class="fas fa-check-circle"></i> Минимальный пакет документов</li>
                    <li><i class="fas fa-check-circle"></i> Работаем с материнским капиталом</li>
                </ul>
                <button class="btn btn-primary" onclick="openContactForm()">
                    <i class="fas fa-phone"></i>
                    Свяжитесь с нами
                </button>
            </div>
        </div>
    </div>
</section>
