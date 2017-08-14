<!-- SIBLINGS PAGE (eg Systa, Maggi, etc) -->

<?php get_header();

      $name = get_field('name');
      $image = get_field('image');
      $dob = get_field('date_of_birth');
      $addy_1 = get_field('address_1');
      $addy_2 = get_field('address_2');
      $postcode = get_field('postcode');
      $job = get_field('job');
      $partner = get_field('partner');
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
          </div>
          <div class="col-xs-12 col-sm-6">
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
                  <td>Lives</td>
                  <td class="right"><?php echo cpt_taxonomy(); ?></td>
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
                      <a class="partner-link" href="<?php the_permalink($partner); ?>">
                        <?php echo get_the_title($partner); ?>
                      </a>
                    </td>
                </tr>
                <tr>
                  <td></td>
                  <td class="right">
                    <img class="partner-image" src="<?php echo $partImage; ?>" alt="partner">
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row"> <!-- Family members -->
          <div class="col-xs-12 col-sm-4 aligncenter">
            <!-- SIBLINGS -->
            <h3>Siblings</h3>
            <article class="slides">
              <?php if (have_rows('siblings_2')) : ?>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php while (have_rows('siblings_2')) : the_row(); ?>
                      <div class="swiper-slide">
                        <?php
                          $sibling = get_sub_field('sibling');
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
            <!-- CHILDREN -->
            <h3>Children</h3>
            <article class="slides">
              <?php if (have_rows('children')) : ?>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php while (have_rows('children')) : the_row(); ?>
                      <div class="swiper-slide">
                        <?php
                          $child = get_sub_field('child');
                          $childImage = get_field('image', $child->ID);
                          // var_dump($childImage);
                        if ( $child ) { ?>
                          <img class="slide-image" src="<?php echo $childImage; ?>" />
                          <a class="slide-link" href="<?php the_permalink($child); ?>">
                            <?php echo get_the_title($child); ?>
                          </a>
                        <?php } ?>
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
            <!-- GRANDCHILDREN -->
            <h3>GrandChildren</h3>
            <article class="slides">
              <?php if(have_rows('grandchildren')) : ?>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php while(have_rows('grandchildren')) : the_row(); ?>
                      <div class="swiper-slide">
                        <?php
                          $grandchild = get_sub_field('grandchild');
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
