<?php
  $grandmother = get_field('grandmother_image', 'options' );
  $grandmother_name = get_field('grandmother_name', 'options');
  $grandfather = get_field('grandfather_image', 'options');
  $grandfather_name = get_field('grandfather_name', 'options');

get_header(); ?>

  <section class="originals">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="parents" style="background-image: url('<?php echo $grandmother; ?>');">
          </div>
          <h3>
            <?php echo $grandmother_name; ?>
          </h3>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="parents" style="background-image: url('<?php echo $grandfather; ?>');">
          </div>
          <h3>
            <?php echo $grandfather_name; ?>
          </h3>
        </div>
      </div>
    </div>
  </section>

  <?php if( have_posts() ) :
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
