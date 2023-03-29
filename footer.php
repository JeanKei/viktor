<footer class="footer">
        <div class="container">
            <div class="footer_content">
                <div class="footer_logo"><img src="<?php echo get_template_directory_uri() ?>/app/img/logo.svg" alt="logo"></div>
                <ul class="footer_Section">
                    <p class="footer_SectionMainText">Главная</p>
                    <li><a class="footer_SectionItem" href="#">Расчет расстояний</a></li>
                    <li><a class="footer_SectionItem" href="#">Статьи</a></li>
                    <li><a class="footer_SectionItem" href="#">Автопарк</a></li>
                    <li><a class="footer_SectionItem" href="#">Калькулятор</a></li>
                    <li><a class="footer_SectionItem" href="#">Документы</a></li>
                    <li><a class="footer_SectionItem" href="#">Отзывы</a></li>
                </ul>

                <ul class="footer_Section_socail">
                    <p class="footer_SectionMainText">Контакты</p>
                    <div class="footer_mail">
                        <div class="footerMail_img"><img src="<?php echo get_template_directory_uri() ?>/app/img/gmail_blue_Icon.svg" alt="gmail_blue"></div>
                        <a href="mailto:aaaaaaaa@gmail.com" class="gmail_two">aaaaaaaa@gmail.com</a>
                    </div>
                    <div class="footer_phone">
                        <img src="<?php echo get_template_directory_uri() ?>/app/img/phone_blue_icon.svg" alt="phone_blue" class="footerPhone_img">
                        <a href="tel:89999990099" class="tel_two">8 (999) 999-00-99</a>
                    </div>

                </ul>
                <div class="footer_button_wrapper">
                    <div class="footer_button"><a class="footer_button_Item" href="#">Обратный звонок</a></div>
                </div>

            </div>
            <div class="Privacy_Policy">
                <a class="Privacy_PolicyMainText" href="/privacy-policy">Политика конфиденциальности</p>
                <p class="Privacy_PolicySubText">2023 © Все права защищены. **Количественные данные приведены на
                    основании среднегодовых статистических расчетов.</p>
            </div>

        </div>
    </footer>

    <?php wp_footer() ?>
  </body>
</html>
