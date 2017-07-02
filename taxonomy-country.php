<?php get_header(); ?>

  <section class="archives">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 aligncenter">
          <h2><?php single_term_title("Country of residence: "); ?></h2>
          <p><?php echo get_terms('country'); ?></p>
          <pre><?php var_dump(get_terms('country')); ?></pre>
        </div>
      </div>
      <div class="row">
        <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
            $child = get_sub_field('child');
            $image = get_field( 'image' );
          ?>
            <div class="col-xs-6 col-sm-4 col-md-3 aligncenter">
              <h3>
                <a href="<?php the_permalink($child); ?>">
                  <?php if ( $image ) { ?>
                    <div class="thumbs" style="background-image: url('<?php echo $image; ?>');">
                      <!-- Mobile Screen -->
                      <div class="mobile-title visible-xs">
                        <?php the_title($child) ?>
                      </div>
                      <!-- Full screen title -->
                      <div class="filter hidden-xs hidden-sm hidden-md">
                        <h2 class="hidden-title">
                          <?php the_title($child); ?>
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
