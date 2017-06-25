<!-- CHILDREN PAGE (eg Eyrun, Sara, etc) -->

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
        <div class="row">
          <div class="col-xs-12 col-sm-6"> <!--Person Details-->
            <?php
              if ($image) { ?>
                <div class="thumbs person-image" style="background-image: url('<?php echo $image; ?>');"></div>
              <?php }
            ?>
            <table class="person-details">
              <tbody>
                <tr>
                  <td><h3>Name</h3></td>
                  <td class="right"><h3><?php if ( $name ) { echo $name; } ?></h3></td>
                </tr>
                <tr>
                  <?php if ($dob) { ?>
                    <td>Date of Birth</td>
                    <td class="right"><?php echo $dob; ?></td>
                  <?php } ?>
                </tr>
                <tr>
                  <td>Address</td>
                  <td class="right"><?php if ( $addy_1 ) { echo $addy_1; } ?></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="right"><?php if ( $addy_2 ) { echo $addy_2; } ?></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="right"><?php if ( $postcode ) { echo $postcode; } ?></td>
                </tr>
                <tr>
                  <td>Country</td>
                  <td class="right"><?php echo cpt_categories('children'); ?></td>
                </tr>
                <tr>
                  <?php if ( $job ) { ?>
                    <td>Occupation</td>
                    <td class="right"><?php echo $job; ?></td>
                  <?php } ?>
                </tr>
                <tr>
                  <?php if ($partner) { ?>
                    <td>Partner</td>
                    <td class="right">
                      <img class="partner-image" src="<?php echo $partImage; ?>" alt="partner">
                      <a class="partner-link" href="<?php the_permalink($partner); ?>">
                        <?php echo get_the_title($partner); ?>
                      </a>
                      <?php }
                      ?>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-xs-12 col-sm-6 aligncenter">  <!-- Family members -->

            <!-- PARENT -->
            <?php if (have_rows('child_parents')) : ?>
              <h3>Parents</h3>
              <article class="slides">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php while(have_rows('child_parents')) : the_row(); ?>
                      <div class="swiper-slide">
                        <?php
                          $parent = get_sub_field('child_parent');
                          $parImage = get_field('image', $parent->ID);
                          if ( $parent ) { ?>
                            <img class="slide-image" src="<?php echo $parImage; ?>" />
                            <a class="slide-link" href="<?php the_permalink($parent); ?>">
                              <?php echo get_the_title($parent); ?>
                            </a>
                          <?php } ?>
                      </div>
                    <?php endwhile; ?>
                  </div>
                  <div class="swiper-button-next hidden-xs"></div>
                  <div class="swiper-button-prev hidden-xs"></div>
                  <div class="swiper-pagination"></div>
                </div>
              </article>
            <?php endif; ?>

            <!-- SIBLINGS -->
            <?php if (have_rows('child_siblings')) : ?>
              <h3>Siblings</h3>
              <article class="slides">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php while (have_rows('child_siblings')) : the_row(); ?>
                      <div class="swiper-slide">
                        <?php
                          $sibling = get_sub_field('child_sibling');
                          $sibImage = get_field('image', $sibling->ID);
                        if ( $sibling ) { ?>
                          <img class="slide-image" src="<?php echo $sibImage; ?>" />
                          <a class="slide-link" href="<?php the_permalink($sibling); ?>">
                            <?php echo get_the_title($sibling); ?>
                          </a>
                        <?php } ?>
                      </div>
                    <?php endwhile; ?>
                  </div>
                  <div class="swiper-button-next hidden-xs"></div>
                  <div class="swiper-button-prev hidden-xs"></div>
                  <div class="swiper-pagination"></div>
                </div>
              </article>
            <?php endif; ?>

            <!-- CHILDREN -->
            <?php if (have_rows('child_children')) : ?>
              <h3>Children</h3>
              <article class="slides">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php while (have_rows('child_children')) : the_row(); ?>
                      <div class="swiper-slide">
                        <?php
                          $child = get_sub_field('child_child');
                          $childImage = get_field('image', $child->ID);
                        if ( $child ) { ?>
                          <img class="slide-image" src="<?php echo $childImage; ?>" />
                          <a class="slide-link" href="<?php the_permalink($child); ?>">
                            <?php echo get_the_title($child); ?>
                          </a>
                        <?php } ?>
                      </div>
                    <?php endwhile; ?>
                  </div>
                  <div class="swiper-button-next hidden-xs"></div>
                  <div class="swiper-button-prev hidden-xs"></div>
                  <div class="swiper-pagination"></div>
                </div>
              </article>
            <?php endif; ?>

            <!-- RELATIVES -->
            <?php if(have_rows('child_relatives')) : ?>
              <h3>Relatives</h3>
              <article class="slides">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php while(have_rows('child_relatives')) : the_row(); ?>
                      <div class="swiper-slide">
                        <?php
                          $grandchild = get_sub_field('child_relative');
                          $granImage = get_field('image', $grandchild->ID);
                        if ( $grandchild ) { ?>
                          <img class="slide-image" src="<?php echo $granImage; ?>" />
                          <a class="slide-link" href="<?php the_permalink($grandchild); ?>">
                            <?php echo get_the_title($grandchild); ?>
                          </a>
                        <?php } ?>
                      </div>
                    <?php endwhile; ?>
                  </div>
                  <div class="swiper-button-next hidden-xs"></div>
                  <div class="swiper-button-prev hidden-xs"></div>
                  <div class="swiper-pagination"></div>
                </div>
              </article>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
<?php get_footer();
