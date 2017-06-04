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
              if ($image) {
                echo '<img src="' . $image . '" class="person-image" />';
              }
            ?>
            <table class="person-details">
              <tbody>
                <tr>
                  <td><h3>Name</h3></td>
                  <td><h3><?php if ( $name ) { echo $name; } ?></h3></td>
                </tr>
                <tr>
                  <td>Date of Birth</td>
                  <td><?php if ( $dob ) { echo $dob; } ?></td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td><?php if ( $addy_1 ) { echo $addy_1; } ?></td>
                </tr>
                <tr>
                  <td></td>
                  <td><?php if ( $addy_2 ) { echo $addy_2; } ?></td>
                </tr>
                <tr>
                  <td></td>
                  <td><?php if ( $postcode ) { echo $postcode; } ?></td>
                </tr>
                <tr>
                  <td>Country</td>
                  <td><?php if ( $country ) { echo $country; } ?></td>
                </tr>
                <tr>
                  <td>Occupation</td>
                  <td><?php if ( $job ) { echo $job; } ?></td>
                </tr>
                <tr>
                  <td>Partner</td>
                  <td>
                    <?php if (get_field('partner')) { ?>
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
            <?php if (have_rows('siblings')) :
              while (have_rows('siblings')) : the_row();
                if ( get_sub_field('sibling') ) { ?>
                  <a href="<?php the_permalink(get_sub_field('sibling')); ?>"><?php echo get_the_title(get_sub_field('sibling')); ?></a>
                <?php }
              endwhile;
            endif;
            ?>
            <!-- CHILDREN -->
            <h3>Children</h3>
            <?php if(have_rows('children')) :
              while(have_rows('children')) : the_row(); ?>
                <?php if ( get_sub_field('child') ) { ?>
                  <a href="<?php the_permalink(get_sub_field('child')); ?>"><?php echo get_the_title(get_sub_field('child')); ?></a>
                <?php }
              endwhile;
            endif; ?>
            <!-- GRANDCHILDREN -->
            <h3>GrandChildren</h3>
            <?php if(have_rows('grandchildren')) :
              while(have_rows('grandchildren')) : the_row(); ?>
                <?php if ( get_sub_field('grandchild') ) { ?>
                  <a href="<?php the_permalink(get_sub_field('grandchild')); ?>"><?php echo get_the_title(get_sub_field('grandchild')); ?></a>
                <?php }
              endwhile;
            endif; ?>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
