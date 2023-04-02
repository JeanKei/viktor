
<?php
/*
Template Name: отзывы
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
      <div class="container review__wrapper">
        <div class="codepen-wrapper">
          <?php if( have_rows('review') ): while( have_rows('review') ) : the_row(); ?>
            <figure class="review">
              <blockquote class="review__text">
                <?php echo get_sub_field('review-text'); ?>
              </blockquote>
              <figcaption class="review__person">
                <img src="<?php echo get_sub_field('review-img'); ?>" alt="<?php echo get_sub_field('review-name'); ?>" class="review__photo">
                <div class="review__info">
                  <p class="review__info--name"><?php echo get_sub_field('review-name'); ?></p>
                  <p class="review__info--date"><?php echo get_sub_field('review-date'); ?></p>
                </div>
                <div class="review__rating"><?php echo get_sub_field('review-ball'); ?></div>
              </figcaption>
            </figure>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>
