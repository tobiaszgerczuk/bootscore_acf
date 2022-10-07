<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>




 <div class="hero">
 <div class="swiper mySwiper">
      <div class="swiper-wrapper">

      <?php
        if( have_rows('slider') ):

            // Loop through rows.
            while( have_rows('slider') ) : the_row();

            $grafika =  get_sub_field('grafika');
            $title =  get_sub_field('tytul');
            $subtitle =  get_sub_field('podtytul');
            $link_url =  get_sub_field('link')['url'];
            $link_title =  get_sub_field('link')['title'];
            ?>

            <div class="swiper-slide hero__slide" style=" background: url('<?php echo $grafika; ?>') no-repeat center center; background-size: cover;">
                <div class="hero__slide__title">
                  <h2><?php echo $title; ?></h2>
                  <p><?php echo $subtitle; ?></p>
                  <a href="<?php echo $link_url; ?>" class="button_default"><?php echo $link_title; ?></a>
                </div>
            </div>
            <?php

            endwhile;

        // No value.
        else :
            // Do something...
        endif;
      ?>

        
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="hero__socials">
      <ul>
      <?php
        if( have_rows('sociale') ):

            // Loop through rows.
            while( have_rows('sociale') ) : the_row();

            $ikonka =  get_sub_field('ikonka');
            $link =  get_sub_field('link');
            ?>

            <li><a href="<?php echo $link; ?>"><i class="<?php echo $ikonka; ?>"></i></a></li>
            <?php

            endwhile;

        // No value.
        else :
            // Do something...
        endif;
      ?>
      </ul>
    </div>
    <a href="#news" class="hero__down"><img src="<?php echo get_template_directory_uri(); ?>/img/down.png" alt=""></a>
 </div>

 <section class="news" id="news">
  <div class="container">
  <div class="section_title">
    <h2><?php echo esc_html('AKTUALNOŚCI'); ?></h2>
  </div>
    <div class="wrap">
    <div id="primary" class="content-area">
      <?php $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '4',
        'paged' => 1,
      );
      $blog_posts = new WP_Query( $args ); ?>
      <?php if ( $blog_posts->have_posts() ) : ?>
        <div class="news__posts">
          <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
          <?php get_template_part( '/template-parts/content', 'news' ); ?>
          <?php endwhile; ?>
        </div>
        <div class="loadmore button_dark"><?php echo esc_html('Zobacz więcej'); ?></div>
        <span class="no-more-post"></span>
      <?php endif; ?>
    </div>
  </div>

  </div>


</section>



<section class="cars" >
  <div class="container">
  <div class="section_title">
    <h2><?php echo esc_html('SAMOCHODY'); ?></h2>
  </div>
    <div class="wrap">
    <div id="primary" class="content-area">
      <?php $args = array(
        'post_type' => 'samochody',
        'post_status' => 'publish',
      );
      $blog_posts = new WP_Query( $args ); ?>
      <?php if ( $blog_posts->have_posts() ) : ?>
        <div class="samochody__posts">
          <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
          <?php get_template_part( '/template-parts/content', 'samochody' ); ?>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  </div>


</section>



    <div id="overlay">
      <div id="popup">
        <div id="close">X</div>
        <?php echo do_shortcode('[contact-form-7 id="40" title="Contact form 1"]'); ?>
      </div>
    </div>



<?php
get_footer();
