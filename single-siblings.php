<!-- SIBLINGS PAGE (eg Systa, Maggi, etc) -->

<?php get_header();

      $name = get_field('name');
      $image = get_field('image');
      $dob = get_field('date_of_birth');
      $addy_1 = get_field('address_1');
      $addy_2 = get_field('address_2');
      $postcode = get_field('postcode');
      $country = get_field('country');
      $job = get_field('job');
      $parent = get_field('parent');
    ?>
    <section class="single-person">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6"> <!--Person Details-->
            <?php
              if ($image) { ?>
                <div class="thumbs person-image" style="background-image: url('<?php echo $image; ?>');"></div>
                <!-- echo '<img src="' . $image . '" class="person-image" />'; -->
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
                  <td class="right"><?php echo cpt_categories(); ?></td>
                </tr>
                <tr>
                  <?php if ( $job ) { ?>
                    <td>Occupation</td>
                    <td class="right"><?php echo $job; ?></td>
                  <?php } ?>
                </tr>
                <tr>
                  <?php if (get_field('partner')) { ?>
                    <td>Partner</td>
                    <td class="right">
                        <a href="<?php the_permalink(get_field('partner')); ?>"><?php echo get_the_title(get_field('partner')); ?></a>
                      <?php }
                      ?>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-xs-12 col-sm-6 aligncenter">  <!-- Family members -->
            <h2>Family</h2>

            <!-- SIBLINGS -->
            <h3>Siblings</h3>
            <article class="slides">
              <?php if(have_rows('siblings_2')) : ?>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php while(have_rows('siblings_2')) : the_row(); ?>
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
                  <div class="swiper-button-next hidden-xs"></div>
                  <div class="swiper-button-prev hidden-xs"></div>
                  <div class="swiper-pagination"></div>
                </div>
              <?php endif; ?>
            </article>

            <!-- CHILDREN -->
            <h3>Children</h3>
            <?php if(have_rows('children')) : ?>
              <ul class="family-list">
                <?php while(have_rows('children')) : the_row();
                  $child = get_sub_field('child');
                  if ( $child ) { ?>
                    <li>
                      <a href="<?php the_permalink($child); ?>">
                        <?php echo get_the_title($child); ?>
                      </a>
                    </li>
                  <?php }
                endwhile; ?>
              </ul>
            <?php endif; ?>
            <!-- GRANDCHILDREN -->
            <h3>GrandChildren</h3>
            <?php if(have_rows('grandchildren')) : ?>
              <ul class="family-list">
                <?php while(have_rows('grandchildren')) : the_row();
                  $grandchild = get_sub_field('grandchild');
                  if ( $grandchild ) { ?>
                    <li>
                      <a href="<?php the_permalink($grandchild); ?>">
                        <?php echo get_the_title($grandchild); ?>
                      </a>
                    </li>
                  <?php }
                endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
