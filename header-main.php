<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <title><?php echo wp_get_document_title() ?></title>
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/app/font/AlibabaSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/app/font/Golos-Text_Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/app/font/Golos-Text_DemiBold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/app/font/Golos-Text_Medium.woff2" as="font" type="font/woff2" crossorigin>
  <?php wp_head(); ?>
</head>
<body>
<!-- ==================== HEADER  ==================== -->

<div class="wrapper">
        <header class="header">
            <div class="header_up">
                <div class="header_up_content">
                    <div class="header_up_content_wrapper">
                      <div class="header_up_content_wrapper-link">
                          <div class="our_mission"><a class="header_up_item" href="/nasha-missiya">Наша миссия</a></div>
                          <div class="payments_method"><a class="header_up_item" href="/sposoby-oplaty">Способы оплаты</a></div>
                      </div>
                      <div class="Cargo_transportation">
                            <span class="header_up_item header_up_item--not" >Грузоперевозки по России</span>
                      </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="header_content">

                    <div class="header_down">
                        <div class="header_down_content">
                            <div class="hamburger">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </div>

                            <a class="logo" href="/"><img class="logo_img" src="<?php echo get_template_directory_uri() ?>/app/img/logo.svg" alt="logo"></a>
                            <div class="navigation_and_other">
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
                                <div class="phone_and_work">
                                    <div class="phone"><img class="phone_img" src="<?php echo get_template_directory_uri() ?>/app/img/phone.svg" alt=""></div>
                                    <div class="number_and_work">
                                        <a class="number" href="tel:+7009009090">+7 900 900 90 90</a>
                                        <p class="work">Работаем с 8:00 по 17:00 МСК</p>
                                    </div>
                                </div>
                                <div class="button forPhone">
                                  <button class="button_item" data-graph-path="lead">Обратный звонок</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="general">
            <div class="general_container">
                <div class="general_content">
                    <div class="general_content_left">
                        <p class="general_mainText">Гарантируем <br> своевременную доставку</p>
                        <p class="general_subText">Мы предлагаем индивидуальные условия для каждого заказчика,
                            в том числе предусматриваем особые гарантии по своевременной доставке грузов в договоре</p>
                        <div class="buttons_wrapper">
                            <div class="buttons_wrapper_content">
                                <div class="callBack_button">
                                  <button class="callBack_button_item" data-graph-path="lead">Обратный звонок</button>
                                </div>
                                <div class="button2">
                                    <div class="button2_wrapper">
                                        <img class="arrow_right_for_adaptive" src="<?php echo get_template_directory_uri() ?>/app/img/arrow_right.svg" alt="">
                                        <a class="button2_item" href="#calculation">Рассчитать стоимость перевозки</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="general_right">
                        <img class="general_right_img" src="<?php echo get_template_directory_uri() ?>/app/img/truck_with_logo.png" alt="truck_img">
                    </div>

                </div>
            </div>

        </div>
    </div>
