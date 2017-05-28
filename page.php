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
              PAGE CONTEXT
            </div>
          </div>
        </div>
      </section>

      <section class="page-bottom">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <?php the_post_thumbnail(); ?>
              PAGE BOTTOM CONTEXT WITH AN IMAGE
              <div style="background-image: url('<?php echo get_template_directory_uri().'/assets/img/akureyri_winter.jpg'; ?>'); height: 500px;"></div>
            </div>
          </div>
        </div>
      </section>

    <?php endwhile;
  endif;

get_footer(); ?>