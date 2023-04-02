<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <title><?php echo wp_get_document_title() ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <!-- ==================== HEADER  ==================== -->
  <header class="header common__header">
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

                    <a class="logo" href="/"><img class="logo_img" src="<?php echo get_template_directory_uri() ?>/app/img/logo-hei.svg" alt="logo"></a>
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
