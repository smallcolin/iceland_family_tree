<?php get_header(); ?>

  <section class="archives">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 aligncenter">
        </div>
      </div>
      <div class="row">
        <h2>Country of residence: <?php single_term_title(); ?></h2>
        <?php
          if (have_posts('grandchildren')) :
            while (have_posts('grandchildren')) : the_post();
            $grandchild = get_sub_field('grandchild');
            $image = get_field( 'image' );
          ?>
            <div class="col-xs-6 col-sm-4 col-md-3 aligncenter">
              <h3>
                <a href="<?php the_permalink($grandchild); ?>">
                  <?php if ( $image ) { ?>
                    <div class="thumbs" style="background-image: url('<?php echo $image; ?>');">
                      <!-- Mobile Screen -->
                      <div class="mobile-title visible-xs">
                        <?php the_title($grandchild) ?>
                      </div>
                      <!-- Full screen title -->
                      <div class="filter hidden-xs hidden-sm hidden-md">
                        <h2 class="hidden-title">
                          <?php the_title($grandchild); ?>
                        </h2>
                      </div>
                    </div>
                  <?php } ?>
                </a>
              </h3>
            </div>
            <?php endwhile;
          endif;
        ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
