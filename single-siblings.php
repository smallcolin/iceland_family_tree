<?php get_header();

  if (have_posts()) :
    while (have_posts()) : the_post();

      $name = get_field('name');
      $image = get_field('image');
      $dob = get_field('date_of_birth');

      $addy_1 = get_field('address_1');
      $addy_2 = get_field('address_2');
      $postcode = get_field('postcode');
      $country = get_field('country');
      $job = get_field('job');

      $parent = get_field('parent');
      // $child = get_sub_field('child', $post_id);
      $child = get_field('children'); // ACF Repeater
      $grandchild = get_sub_field('grandchild');
      $partner = get_sub_field('partner');

    ?>
      <section class="single-person">

        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <?php
              if ($image) {
                echo '<img src="' . $image . '" class="person-image" />';
              }
              ?>
              <table class="person-details">
                <tbody>
                  <tr>
                    <?php
                      if ( $name ) {
                        echo '<td>Name: </td> ' . '<td><a href="#">' . $name . '</a></td>';
                      }
                    ?>
                  </tr>
                  <tr>
                    <?php
                      if ( $dob ) {
                        echo '<td>Date of Birth: </td>' . '<td>' . $dob . '</td>';
                      }
                    ?>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <?php
                      if ( $addy_1 ) {
                        echo '<td>' . $addy_1 . '</td>';
                      }
                    ?>
                  </tr>
                  <tr>
                    <td></td>
                    <?php
                      if ( $addy_2 ) {
                        echo '<td>' . $addy_2 . '</td>';
                      }
                    ?>
                  </tr>
                  <tr>
                    <td></td>
                      <?php
                        if ( $postcode ) {
                          echo '<td>' . $postcode . '</td>';
                        }
                      ?>
                  </tr>
                  <tr>
                    <?php
                      if ( $country ) {
                        echo '<td>Country: </td>' . '<td>' . $country . '</td>';
                      }
                    ?>
                  </tr>
                  <tr>
                    <?php
                      if ( $job ) {
                        echo '<td>Occupation: </td>' . '<td>' . $job . '</td>';
                      }
                    ?>
                  </tr>
                </tbody>
              </table>

            </div>

            <div class="col-xs-12 col-sm-6">  <!-- Family members -->
              <?php if ( $parent ) {
              echo $parent;
            }
            // CHILDREN
            if(have_rows('children')) :
              while(have_rows('children')) : the_row(); ?>
                <!-- <pre><?php //var_dump($child); ?></pre> -->
                <?php if ( get_sub_field('child') ) { ?>
                  <a href="<?php the_permalink(get_sub_field('child')); ?>"><?php the_sub_field('child', $post_object->ID); ?></a>

                <?php }
              endwhile;
            endif; ?>

            <!-- CHILDREN II -->
            <p>Test</p>
            <?php foreach ($child as $children) {
              // echo '<p>' . $children['child'] . '</p>';
            } ?>

             <!-- GRANDCHILDREN -->

            <!-- Need to test $child & $grandchild & $partner.  Need to be links -->

          </div>
        </div>
      </div>
    </section>





    <?php endwhile;
  endif;

get_footer(); ?>
