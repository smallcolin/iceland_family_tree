<?php get_header();

  if( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

      <section class="page-top">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="post-box">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </section>

    <?php endwhile;
  endif;

get_footer(); ?>
