<?php get_header(); ?>

  <section class="archives">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 aligncenter">
          <h1>Siblings</h1>
        </div>
      </div>
      <div class="row">
          <?php
            if (have_posts('siblings')) :
              while (have_posts('siblings')) : the_post();
              $sibling = get_sub_field('sibling');
              $image = get_field( 'image' );
            ?>
              <div class="col-xs-6 col-sm-4 col-md-3 aligncenter">
                <h3>
                  <a href="<?php the_permalink($sibling); ?>">
                    <?php if ( $image ) { ?>
                      <div class="thumbs" style="background-image: url('<?php echo $image; ?>');">
                        <!-- Mobile Screen -->
                        <div class="mobile-title visible-xs">
                          <?php the_title($sibling) ?>
                        </div>
                        <!-- Full screen title -->
                        <div class="filter hidden-xs hidden-sm hidden-md">
                          <h2 class="hidden-title">
                            <?php the_title($sibling); ?>
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
  <section style="height: 300px; background-color: red">

  </section>
<?php get_footer(); ?>
