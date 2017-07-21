<?php get_header(); ?>

  <section class="archives">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 aligncenter">
          <h1>Grandchildren</h1>
        </div>
      </div>
      <div class="row">
        <?php
          $posts = get_posts(array(
            'post_type' => 'grandchildren',
            'posts_per_page' => -1,
            'orderby' => 'name',
            'order' => 'ASC'
          ));
          // if (have_posts('grandchildren')) :
          //   while (have_posts('grandchildren')) : the_post();
          if ( $posts ) :
          //   $grandchild = get_sub_field('grandchild');
          foreach ($posts as $post) {
            $image = get_field( 'image' );
            setup_postdata($posts) ?>
            <div class="col-xs-6 col-sm-4 col-md-3 aligncenter">
              <h3>
                <a href="<?php the_permalink(); ?>">
                  <?php if ( $image ) { ?>
                    <div class="thumbs" style="background-image: url('<?php echo $image; ?>');">
                      <!-- Mobile Screen -->
                      <div class="mobile-title visible-xs">
                        <?php the_title() ?>
                      </div>
                      <!-- Full screen title -->
                      <div class="filter hidden-xs hidden-sm hidden-md">
                        <h2 class="hidden-title">
                          <?php the_title(); ?>
                        </h2>
                      </div>
                    </div>
                  <?php } else { ?>
                    <div class="thumbs">
                      <!-- Mobile Screen -->
                      <div class="mobile-title visible-xs">
                        <?php the_title() ?>
                      </div>
                      <!-- Full screen title -->
                      <div class="filter hidden-xs hidden-sm hidden-md">
                        <h2 class="no-image-title">
                          <?php the_title(); ?>
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
