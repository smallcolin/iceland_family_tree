<?php get_header(); ?>

  <section class="archives">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 aligncenter">
          <h1>Partners</h1>
        </div>
      </div>
      <div class="row">
        <?php
          $posts = get_posts(array(
            'post_type' => 'partners',
            'posts_per_page' => -1,
            'orderby' => 'name',
            'order' => 'ASC'
          ));
          // if (have_posts('partners')) :
          //   while (have_posts('partners')) : the_post();
          if ( $posts ) :
          // $partner = get_sub_field('partner');
            foreach ($posts as $post) {
              $image = get_field( 'image' );
              setup_postdata($post) ?>
              <div class="col-xs-6 col-sm-4 col-md-3 aligncenter">
                <h3>
                  <a href="<?php the_permalink($partner); ?>">
                    <?php if ( $image ) { ?>
                      <div class="thumbs" style="background-image: url('<?php echo $image; ?>');">
                        <!-- Mobile Screen -->
                        <div class="mobile-title visible-xs">
                          <?php the_title($partner) ?>
                        </div>
                        <!-- Full screen title -->
                        <div class="filter hidden-xs hidden-sm hidden-md">
                          <h2 class="hidden-title">
                            <?php the_title($partner); ?>
                          </h2>
                        </div>
                      </div>
                      <?php } ?>
                    </a>
                  </h3>
                </div>
            <?php }
          ?>
            <?php //endwhile;
            wp_reset_postdata();
          endif;
        ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
