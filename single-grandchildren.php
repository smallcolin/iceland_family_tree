<!-- GRANDCHILDREN PAGE (eg Edda, Hekla, etc) -->

<?php get_header();

  $name = get_field('name');
  $image = get_field('image');
  $dob = get_field('date_of_birth');
  $addy_1 = get_field('address_1');
  $addy_2 = get_field('address_2');
  $postcode = get_field('postcode');
  $job = get_field('job');
  $partner = get_field('child_partner');
  $partImage = get_field('image', $partner->ID);
?>
  <section class="single-person">
    <div class="container">
      <div class="row"> <!--Person Details-->
        <?php person_details(); ?>
      </div>
      <div class="row"> <!-- Family members -->
        <div class="col-xs-12 col-sm-4 aligncenter">
          <!-- PARENT -->
          <h3>Parents</h3>
          <article class="slides">
            <?php if (have_rows('grandchild_parents')) : ?>
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <?php while(have_rows('grandchild_parents')) : the_row(); ?>
                    <div class="swiper-slide">
                      <?php
                        $parent = get_sub_field('grandchild_parent');
                        $parImage = get_field('image', $parent->ID);
                        if ( $parent ) {
                          if ( $parImage ) { ?>
                            <img class="slide-image" src="<?php echo $parImage; ?>" />
                            <a class="slide-link" href="<?php the_permalink($parent); ?>">
                              <?php echo get_the_title($parent); ?>
                            </a>
                          <?php } else { ?>
                            <img class="slide-image" />
                            <a class="no-slide-image" href="<?php the_permalink($parent); ?>">
                              <?php echo get_the_title($parent); ?>
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
        <div class="col-xs-12 col-sm-4 aligncenter">
          <!-- SIBLINGS -->
          <h3>Siblings</h3>
          <article class="slides">
            <?php if (have_rows('grandchild_siblings')) : ?>
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <?php while (have_rows('grandchild_siblings')) : the_row(); ?>
                    <div class="swiper-slide">
                      <?php
                        $sibling = get_sub_field('grandchild_sibling');
                        $sibImage = get_field('image', $sibling->ID);
                      if ( $sibling ) {
                        if ( $sibImage ) { ?>
                          <img class="slide-image" src="<?php echo $sibImage; ?>" />
                          <a class="slide-link" href="<?php the_permalink($sibling); ?>">
                            <?php echo get_the_title($sibling); ?>
                          </a>
                        <?php } else { ?>
                          <img class="slide-image" />
                          <a class="no-slide-image" href="<?php the_permalink($sibling); ?>">
                            <?php echo get_the_title($sibling); ?>
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
        <div class="col-xs-12 col-sm-4 aligncenter">
          <!-- GRANDPARENTS -->
          <h3>Grandparents</h3>
          <article class="slides">
            <?php if (have_rows('grandparents')) : ?>
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <?php while (have_rows('grandparents')) : the_row(); ?>
                    <div class="swiper-slide">
                      <?php
                        $child = get_sub_field('grandparent');
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
      </div>
    </div>
  </section>
<?php get_footer();
