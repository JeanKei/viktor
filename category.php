<?php
/*
Template Name: внутри рубрики
*/
?>
<?php get_header(); ?>

<main class="main">
    <div class="common blogmain">
      <div class="breadcrumb__wrap">
        <div class="container">
          <div class="breadcrumb__title"> <?php the_title(); ?></div>
          <?php echo wpcourses_breadcrumb( ' / ' ); ?>
        </div>
      </div>
      <div class="common__wrapper">
        <div class="container">
        <div class="blog_cards">
          <?php while (have_posts()) : the_post(); ?>

            <div class="blog_card">
                <div class="blog_img">
                    <?php the_post_thumbnail('mainpostimage') ?>
                </div>
                    <div class="blogCardDown">
                        <a href="<?php the_permalink(); ?>"><p class="blogCardText"><?php the_title(); ?></p></a>
                        <?php the_excerpt(); ?>
                    </div>
                </div>

            </div>

              <!-- <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br> -->
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </main>


<?php get_footer(); ?>
