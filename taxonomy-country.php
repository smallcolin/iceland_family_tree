<?php get_header(); ?>

  <section class="archives">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 aligncenter">
          <!-- <button id="allCountries" class="btn btn-alert">All</button> -->
          <p>
            <?php
              $args = array(
                'hide_empty' => false
              );
              $terms = get_terms('country', $args);
              $currentterm = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
            ?>
              <?php if ( ! empty($terms) || ! is_wp_error($terms) ) {
                echo '<ul class="country-list">';
                // allCountries();
                // echo '<a href="';
                //echo all terms link here
                // echo '"><li>' . 'All' . '</li></a>';
                foreach ($terms as $term) {
                  $class = $currentterm->slug == $term->slug ? 'current-term' : '' ;
                  echo '<a href="';
                  echo esc_url(get_term_link($term));
                  echo '">';
                  echo '<li class="' . $class . '">' . esc_html($term->name) . '</li>';
                  echo '</a>';
                }
                echo '</ul>';
              }
            ?>
            <h2><?php single_term_title("Country of residence: "); ?></h2>
          </p>
        </div>
      </div>
      <div class="row">
        <?php if (have_posts()) :
          while (have_posts()) : the_post();
          $image = get_field( 'image' ); ?>

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
          <?php endwhile;
        ?>
      </div>
      <div class="row">
        <div class="col-xs-12 text-center">
          <?php paginator(); ?> <!-- pagination -->
        </div>
      </div>
        <?php else : ?>
          <div class="no-entries">No entries were found for this country!</div>
        <?php endif; ?>
    </div>
  </section>
<?php get_footer(); ?>
