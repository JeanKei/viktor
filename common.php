<?php
/*
Template Name: Общий
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
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>
