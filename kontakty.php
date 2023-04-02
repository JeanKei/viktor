<?php
/*
Template Name: контакты
*/
?>
<?php get_header(); ?>
  <main class="main">
    <div class="common">
      <div class="breadcrumb__wrap">
        <div class="container">
          <div class="breadcrumb__title"> <?php the_title(); ?></div>
          <?php echo wpcourses_breadcrumb( ' / ' ); ?>
        </div>
      </div>
      <div class="container">
        <div class="kontakty__page">
          <h2 class="calculation-page-price__title kontakty__title">Контакты компании</h2>
          <div class="calculation-page-price__wrap">
            <div class="calculation-page-price__card kontakty__card">
              <img class="calculation-page-price__img kontakty__img" src="<?php echo get_template_directory_uri() ?>/app/img/k1.png" alt="Электронная почта">
              <div class="kontakty__wrap">
                <p class="calculation-page-price__text kontakty__text">Электронная почта</p>
                <p class="calculation-page-price__text kontakty__text">tk-soyz@mail.ru</p>
              </div>
            </div>
            <div class="calculation-page-price__card kontakty__card">
              <img class="calculation-page-price__img kontakty__img" src="<?php echo get_template_directory_uri() ?>/app/img/k2.png" alt="Адрес">
              <div class="kontakty__wrap">
                <p class="calculation-page-price__text kontakty__text">Адрес</p>
                <p class="calculation-page-price__text kontakty__text">РБ, г. Нефтекамск, ул. Ленина 25</p>
              </div>
            </div>
            <div class="calculation-page-price__card kontakty__card">
              <img class="calculation-page-price__img kontakty__img" src="<?php echo get_template_directory_uri() ?>/app/img/k3.png" alt="Телефон">
              <div class="kontakty__wrap">
                <p class="calculation-page-price__text kontakty__text">Телефон</p>
                <p class="calculation-page-price__text kontakty__text">8 (937) 349-49-54</p>
              </div>
            </div>
            <div class="calculation-page-price__card kontakty__card">
              <img class="calculation-page-price__img kontakty__img" src="<?php echo get_template_directory_uri() ?>/app/img/k4.png" alt="Режим работы">
              <div class="kontakty__wrap">
                <p class="calculation-page-price__text kontakty__text">Режим работы</p>
                <p class="calculation-page-price__text kontakty__text">ПН – ПТ: 09:00 – 18:00</p>
                <p class="calculation-page-price__text kontakty__text">СБ – ВС: 10:00 – 17:00</p>
              </div>
            </div>
          </div>
          <h2 class="calculation-page-price__title">Контакты менеджеров</h2>
          <div class="calculation-page-price__wrap">
            <div class="calculation-page-price__card">
              <img class="calculation-page-price__img kontakty__img" src="<?php echo get_template_directory_uri() ?>/app/img/calc1.png" alt="Электронная почта">
              <div class="kontakty__wrap">
                <p class="calculation-page-price__text kontakty__text">Телефон</p>
                <p class="calculation-page-price__text kontakty__text">8 (937) 349-49-54</p>
              </div>
            </div>
            <div class="calculation-page-price__card">
              <img class="calculation-page-price__img kontakty__img" src="<?php echo get_template_directory_uri() ?>/app/img/calc2.png" alt="Адрес">
              <div class="kontakty__wrap">
                <p class="calculation-page-price__text kontakty__text">Телефон</p>
                <p class="calculation-page-price__text kontakty__text">8 (937) 349-49-54</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>
