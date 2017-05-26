<?php get_header(); 

  if( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>

      <section class="page-top">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <?php the_title(); ?>
            </div>
          </div>
        </div>
      </section>

      <section class="page-middle">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </section>

      <section class="page-bottom">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <?php the_post_thumbnail(); ?>
            </div>
          </div>
        </div>
      </section>

    <?php endwhile;
  endif;

get_footer(); ?>