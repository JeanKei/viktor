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
          <div class="breadcrumb__title">Статьи</div>
          <div class="blog_b-wrap">
            <?php echo wpcourses_breadcrumb( ' / ' ); ?>
            <a href="/blog/">&nbsp;Статьи</a>
            <p>&nbsp;/&nbsp; </p>
            <p>Выбрать статью</p>
          </div>
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
                      <a href="<?php the_permalink(); ?>"><p class="blogCardText blogCardText--title"><?php the_title(); ?></p></a>
                      <?php the_excerpt(); ?>
                  </div>
              </div>

            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </main>


<?php get_footer(); ?>
