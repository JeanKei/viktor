<?php
/*
Template Name: документы
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
          <div class="thanksgiving">
            <div class="breadcrumb__title breadcrumb__title--doc">Благодарственные</div>
            <p class="thanksgiving_p">письма</p>
            <div class="thanksgiving_content">
              <a href="<?php echo get_template_directory_uri() ?>/app/img/pismo3.jpg" data-fancybox="gallery" data-caption="Благодарственное письмо #1">
                <img src="<?php echo get_template_directory_uri() ?>/app/img/pismo3.jpg" />
              </a>
              <a href="<?php echo get_template_directory_uri() ?>/app/img/pismo1.jpg" data-fancybox="gallery" data-caption="Благодарственное письмо #2">
                <img src="<?php echo get_template_directory_uri() ?>/app/img/pismo1.jpg" />
              </a>
              <a href="<?php echo get_template_directory_uri() ?>/app/img/pismo2.jpg" data-fancybox="gallery" data-caption="Благодарственное письмо #3">
                <img src="<?php echo get_template_directory_uri() ?>/app/img/pismo2.jpg" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>
