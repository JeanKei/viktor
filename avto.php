<?php
/*
Template Name: автопарк
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
      <div class="common__wrapper">
        <div class="container">
          <?php the_content(); ?>
          <div class="avto__wrap">
          <?php if( have_rows('avto') ): while( have_rows('avto') ) : the_row(); ?>
            <div class="avto__card">
              <div class="avto__left">
                <span class="avto__left-title"><?php echo get_sub_field('avto-title'); ?></span>
                <span class="avto__left-text">Длина: <span><?php echo get_sub_field('avto-text1'); ?></span></span>
                <span class="avto__left-text">Ширина: <span><?php echo get_sub_field('avto-text2'); ?></span></span>
                <span class="avto__left-text">Высота: <span><?php echo get_sub_field('avto-text3'); ?></span></span>
                <span class="avto__left-text">Объем: <span><?php echo get_sub_field('avto-text4'); ?></span></span>
                <span class="avto__left-text">Тип кузова: <span><?php echo get_sub_field('avto-text5'); ?></span></span>
                <div class="calculateCost_button avto__button">
                  <a href="#calculation" class="calculateCost_buttonItem">Рассчитать стоимость</a>
                </div>
              </div>
              <div class="avto__right">
                <img class="avto__mainimg" src="<?php echo get_sub_field('avto-mainimg'); ?>" alt="">
                <div class="avto__img-wrap">
                  <img class="avto__img" src="<?php echo get_sub_field('avto-img1'); ?>" alt="<?php echo get_sub_field('avto-title'); ?>">
                  <img class="avto__img" src="<?php echo get_sub_field('avto-img2'); ?>" alt="<?php echo get_sub_field('avto-title'); ?>">
                  <img class="avto__img" src="<?php echo get_sub_field('avto-img3'); ?>" alt="<?php echo get_sub_field('avto-title'); ?>">
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
      <div class="calculation avto__calculation" id="calculation">
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
    </div>
  </main>
<?php get_footer(); ?>
