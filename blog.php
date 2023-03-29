<?php
/*
Template Name: блог
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
      <?php
          $args = array(
            'show_option_all'    => '',
            'show_option_none'   => __('No categories'),
            'orderby'            => 'name',
            'order'              => 'ASC',
            'style'              => 'list',
            'show_count'         => 0,
            'hide_empty'         => 0,
            'use_desc_for_title' => 0,
            'child_of'           => 0,
            'feed'               => '',
            'feed_type'          => '',
            'feed_image'         => '',
            'exclude'            => '1',
            'exclude_tree'       => '',
            'include'            => '',
            'hierarchical'       => true,
            'title_li'           => __( 'Выбрать категорию' ),
            'number'             => NULL,
            'echo'               => 1,
            'depth'              => 0,
            'current_category'   => 0,
            'pad_counts'         => 0,
            'taxonomy'           => 'category',
            'walker'             => 'Walker_Category',
            'hide_title_if_empty' => false,
            'separator'          => '<br />',
          );
          ?>

          <ul>
            <?php wp_list_categories( $args ); ?>
          </ul>
      </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
