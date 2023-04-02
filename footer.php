<footer class="footer">
        <div class="container">
            <div class="footer_content">
                <a href="/" class="footer_logo"><img src="<?php echo get_template_directory_uri() ?>/app/img/logo.svg" alt="logo"></a>
                <?php
                      if (has_nav_menu('head_menu')) {
                        wp_nav_menu(array(
                          'theme_location' => 'head_menu',
                          'depth' => 1,
                          'container' => false,
                          'menu_class' => 'menu navigation',
                        ));
                      }
                ?>
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
                    <div class="footer_button">
                      <button class="footer_button_Item" data-graph-path="lead">Обратный звонок</button>
                    </div>
                </div>

            </div>
            <div class="Privacy_Policy">
                <a class="Privacy_PolicyMainText" href="/privacy-policy">Политика конфиденциальности</a>
                <p class="Privacy_PolicySubText">2023 © Все права защищены. **Количественные данные приведены на
                    основании среднегодовых статистических расчетов.</p>
            </div>

        </div>
    </footer>
    <!-- СПАСИБО-->
    <div class="graph-modal">
      <div class="graph-modal__container graph-modal__content--more graph-modal__container-sps" role="dialog"
        aria-modal="true" data-graph-target="thanks">
        <button class="btn-reset js-modal-close graph-modal__close more-btn more-btn-sps"
          aria-label="Закрыть модальное окно">
          <img src="<?php echo get_template_directory_uri() ?>/app/img/close.svg" alt="Закрыть">
        </button>
        <div class="graph-modal__content graph-modal__content-sps">
          <span class="send__title-sps">Спасибо!</span>
          <div class="send__descr-sps">
              Заявка успешно <br> отправлена
          </div>
        </div>
      </div>
    <!--КОНЕЦ СПАСИБО-->
      <!-- МОДАЛКА-->
      <div class="graph-modal__container graph-modal__container--lead" role="dialog" aria-modal="true"
        data-graph-target="lead">
        <button class="btn-reset js-modal-close graph-modal__close more-btn" aria-label="Закрыть модальное окно">
          <img src="<?php echo get_template_directory_uri() ?>/app/img/close.svg" alt="Закрыть">
        </button>
        <section class="send">
          <div class="container">
            <span class="send__title">Оставьте заявку и мы с вами свяжемся</span>
            <form class="send__form-wrapper form-1" method="post" id="form">
              <label class="form__label">
                <input class="send__data input-data" data-validate-field="data" name="Раздел" type="hidden" value="Обратный звонок">
              </label>
              <label class="form__label">
                <input class="send__name input-name" placeholder="Введите имя" data-validate-field="name" name="Имя"
                  type="text">
              </label>
              <label class="form__label">
                <input class="send__tel input-tel" placeholder="Введите номер телефона" data-validate-field="tel" name="Телефон"
                  type="tel">
              </label>
              <div class="send__button-group">
                <input class="send__button  btn-reset" value="Отправить" type="submit">
              </div>
            </form>
          </div>
        </section>
      </div>
      <!-- КОНЕЦ МОДАЛКА -->
    </div>
    <button class="scrollToTopBtn">
      <img src="<?php echo get_template_directory_uri() ?>/app/img/up-arrow.svg">
    </button>
    <?php wp_footer() ?>
  </body>
</html>
