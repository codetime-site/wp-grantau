<div id="contactModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3>Свяжитесь с нами</h3>
        
        <form action="process-form.php" method="POST" class="contact-form">
            <input type="hidden" name="form_type" value="contact">
            <div class="form-group">
                <input type="text" name="name" placeholder="Ваше имя" required>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" placeholder="Телефон" required>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Сообщение" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-paper-plane"></i>
                Отправить
            </button>
        </form>
    </div>
</div>