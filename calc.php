<?php
/*
Template Name: калькулятор
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
        <div class="calculation calculation-page" id="calculation">
          <div class="container">
              <div class="calculation_form_wrapper">
                  <div class="calculation_form">
                      <div class="calculation_form_padding_wrapper">
                          <p class="calculationFormMainText"><span>Заполните форму для заказа</span> расчета стоимости
                              <br> переезда.Мы перезвоним Вам, после подготовки расчета.
                          </p>
                          <form class="calculation_form_content_wrapper form-2" method="post" >
                          <div class="calculation_form_content">
                            <label class="form__label form__label--ab">
                              <input class="send__data input-data1" data-validate-field="data" name="Раздел" type="hidden" value="Калькулятор">
                            </label>
                            <div class="calculation_input_wrapper">
                                <label class="label">Ваше имя</label>
                                <input class="calculation_input input-name1" data-validate-field="name" name="Имя" type="text">
                            </div>

                            <div class="calculation_input_wrapper">
                                <label class="label">Ваш номер телефона</label>
                                <input class="calculation_input input-tel1" data-validate-field="tel" name="Телефон" type="tel">
                            </div>

                            <div class="calculation_input_wrapper">
                                <label class="label">Откуда</label>
                                <label class="turn_over_for_small_notebook" for="#"><img
                                        class="turn_over_for_small_notebook_item" src="<?php echo get_template_directory_uri() ?>/app/img/turn_over.svg"
                                        alt="TurnOver"></label>
                                <label class="turn_over_for_tablet" for="#"><img class="turn_over_for_tablet_item"
                                        src="<?php echo get_template_directory_uri() ?>/app/img/up_down_vector.svg" alt="Up_Down_Vector"></label>
                                <input class="calculation_input input-city1" data-validate-field="name" name="Откуда" type="text">
                            </div>
                            <div class="turn_over">
                                <!-- <img class="turn_over_img" src="<?php echo get_template_directory_uri() ?>/app/img/turn_over.svg" alt="turn_overimg"> -->
                            </div>

                            <div class="calculation_input_wrapper">
                                <label class="label">Куда</label>
                                <input class="calculation_input input-city2" data-validate-field="name" name="Куда" type="text">
                            </div>

                            <div class="calculation_input_wrapper">
                                <label class="label">Дата</label>

                                <input class="calculation_input input-date" data-validate-field="date" name="Дата" type="date" id="start"
                                   min="2023-01-01" max="2023-12-31">
                            </div>
                            <div class="calculation_input_wrapper">
                                <label class="label">Что планируете перевести</label>
                                <input class="calculation_input input-what" data-validate-field="name" name="Что" type="text">
                            </div>
                          </div>

                          <div class="calculation_input_wrapper widhMax">
                              <label class="label">Необходимый грузовой автомобиль</label>
                              <input class="calculation_input input-car" data-validate-field="name" name="Машина" type="text">
                          </div>

                          <div class="formButton_and_agreement">
                              <div class="formButton">
                                <!-- <a class="formButton_item" href="#">Отправить заявку</a> -->
                                <input class="formButton_item btn-reset" value="Отправить заявку" type="submit">
                              </div>
                              <p class="agreement">Заполняя форму, Вы даете согласие на обработку персональных
                                  данных. Данные не будут переданы 3м лицам.</p>
                          </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="container calculation-page-price">
          <h2 class="calculation-page-price__title">Что влияет на стоимость перевозки:</h2>
          <div class="calculation-page-price__wrap">
            <div class="calculation-page-price__card">
              <img class="calculation-page-price__img" src="<?php echo get_template_directory_uri() ?>/app/img/calc1.png" alt="Вес и объем груза">
              <p class="calculation-page-price__text">Вес и объем груза</p>
            </div>
            <div class="calculation-page-price__card">
              <img class="calculation-page-price__img" src="<?php echo get_template_directory_uri() ?>/app/img/calc2.png" alt="Габариты и характер груза">
              <p class="calculation-page-price__text">Габариты и характер груза</p>
            </div>
            <div class="calculation-page-price__card">
              <img class="calculation-page-price__img" src="<?php echo get_template_directory_uri() ?>/app/img/calc3.png" alt="Расстояние перевозки">
              <p class="calculation-page-price__text">Расстояние перевозки</p>
            </div>
            <div class="calculation-page-price__card">
              <img class="calculation-page-price__img" src="<?php echo get_template_directory_uri() ?>/app/img/calc4.png" alt="Состояние дороги">
              <p class="calculation-page-price__text">Состояние дороги</p>
            </div>
            <div class="calculation-page-price__card">
              <img class="calculation-page-price__img" src="<?php echo get_template_directory_uri() ?>/app/img/calc5.png" alt="Вид транспорта">
              <p class="calculation-page-price__text">Вид транспорта</p>
            </div>
            <div class="calculation-page-price__card">
              <img class="calculation-page-price__img" src="<?php echo get_template_directory_uri() ?>/app/img/calc6.png" alt="Дополнительные услуги">
              <p class="calculation-page-price__text">Дополнительные услуги</p>
            </div>
          </div>
          <p class="container calculation-page-price__descr">Наша организация занимается авто-транспортными услугами, мы работаем практически на всей территории России. В нашей работе мы делаем доставку по всем городам и населенным пунктам Российской федерации. Абсолютно для всех новых и постоянных клиентов мы предлагаем только выгодные тарифы на доставку и перевозки. Наши логисты по каждой перевозке прокладывают самый оптимальный маршрут следования доставки груза. Мы обслуживаем как частных лиц, предоставляя им услуги по домашним переездам, так и организации. </p>
          <p class="container calculation-page-price__descr">Сделать точный расчет стоимости по доставке вашего груза Вы можете на нашем «калькуляторе», также Вы можете просто позвонить к нам в компанию и узнать цену Вашей перевозки в режиме онлайн, сообщив маршрут перевозки и вес груза. Контактная информация представлена в разделе «контакты». Если вдруг вы не можете определить или не знаете вес перевозимого груза, к примеру у Вас домашний переезд, ничего страшного — просто перечислите менеджеру что именно будете перевозить, этого будет достаточно.</p>
        </div>
    </div>
  </main>
<?php get_footer(); ?>
