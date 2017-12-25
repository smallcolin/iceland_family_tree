<!-- PARTNER PAGE (eg Emil, Colin, etc) -->

<?php get_header();

    $name = get_field('name');
    $image = get_field('image');
    $dob = get_field('date_of_birth');
    $addy_1 = get_field('address_1');
    $addy_2 = get_field('address_2');
    $postcode = get_field('postcode');
    $job = get_field('job');
    $partner = get_field('partner_partner');
    $partImage = get_field('image', $partner->ID);
?>
  <section class="single-person">
    <div class="container">
      <div class="row"> <!--Person Details-->
        <?php person_details(); ?>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 aligncenter">  <!-- Family members -->
          <!-- CHILDREN -->
          <h3>Börn</h3>
          <article class="slides">
            <?php if (have_rows('partner_children')) : ?>
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <?php while (have_rows('partner_children')) : the_row(); ?>
                    <div class="swiper-slide">
                      <?php
                        $child = get_sub_field('partner_child');
                        $childImage = get_field('image', $child->ID);
                      if ( $child ) {
                        if ( $childImage ) { ?>
                            <img class="slide-image" src="<?php echo $childImage; ?>" />
                            <a class="slide-link" href="<?php the_permalink($child); ?>">
                              <?php echo get_the_title($child); ?>
                            </a>
                          <?php } else { ?>
                            <img class="slide-image" />
                            <a class="no-slide-image" href="<?php the_permalink($child); ?>">
                              <?php echo get_the_title($child); ?>
                            </a>
                          <?php }
                        } ?>
                    </div>
                  <?php endwhile; ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>
            <?php else : ?>
              <div class="slide-image" placeholder>
                <p class="no-info">No info available…</p>
              </div>
            <?php endif; ?>
          </article>
        </div>
        <div class="col-xs-12 col-sm-6 aligncenter">
          <!-- GRANDCHILDREN -->
          <h3>Barnabörn</h3>
          <article class="slides">
            <?php if (have_rows('partner_grandchildren')) : ?>
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <?php while (have_rows('partner_grandchildren')) : the_row(); ?>
                    <div class="swiper-slide">
                      <?php
                        $grandchild = get_sub_field('partner_grandchild');
                        $grandchildImage = get_field('image', $grandchild->ID);
                      if ( $grandchild ) {
                        if ( $grandchildImage ) { ?>
                            <img class="slide-image" src="<?php echo $grandchildImage; ?>" />
                            <a class="slide-link" href="<?php the_permalink($grandchild); ?>">
                              <?php echo get_the_title($grandchild); ?>
                            </a>
                          <?php } else { ?>
                            <img class="slide-image" />
                            <a class="no-slide-image" href="<?php the_permalink($grandchild); ?>">
                              <?php echo get_the_title($grandchild); ?>
                            </a>
                          <?php }
                        } ?>
                    </div>
                  <?php endwhile; ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>
            <?php else : ?>
              <div class="slide-image" placeholder>
                <p class="no-info">No info available…</p>
              </div>
            <?php endif; ?>
          </article>
        </div>
      </div>
    </div>
  </section>
<?php get_footer();
