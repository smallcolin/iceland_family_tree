<?php

// Function to list out custom post type Categories

function cpt_taxonomy() {
  $taxonomy = 'country';
  $cats = get_the_terms( get_the_ID() , $taxonomy);
  $count = count($cats);
  $i = 1;

  if ( $cats ) {
    foreach ( $cats as $cat ) {
      echo '<a href="';
      echo get_term_link($cat->slug, $taxonomy);
      echo '">';
      echo $cat->name;
      if ($i < $count) {
        echo ', ';
        $i++;
      };
      echo '</a>';
    }
  }
}

// Function for single person details

  function person_details() {
      $name = get_field('name');
      $image = get_field('image');
      $dob = get_field('date_of_birth');
      $addy_1 = get_field('address_1');
      $addy_2 = get_field('address_2');
      $postcode = get_field('postcode');
      $job = get_field('job');
      // $partner variable
      if (get_field('partner')) {
        $partner = get_field('partner');
      } elseif (get_field('child_partner')) {
        $partner = get_field('child_partner');
      } elseif (get_field('partner_partner')) {
        $partner = get_field('partner_partner');
      }
      $partImage = get_field('image', $partner->ID);
    ?>
    <div class="col-xs-12 col-sm-6"> <!--Person Details-->
      <?php
        if ($image) { ?>
          <div class="thumbs person-image" style="background-image: url('<?php echo $image; ?>');"></div>
        <?php } else { ?>
          <div class="thumbs person-image"></div>
        <?php }
      ?>
    </div>
    <div class="col-xs-12 col-sm-6">
      <table class="person-details">
        <tbody>
          <tr>
            <td><h3>Nafn</h3></td>
            <td class="right"><h3><?php if ( $name ) { echo $name; } ?></h3></td>
          </tr>
          <tr>
            <?php if ($dob) { ?>
              <td>Faðingardagur</td>
              <td class="right"><?php echo $dob; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <?php if ($addy_1 || $addy_2) { ?>
              <td>Heimilisfang</td>
            <?php } ?>
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
            <td>Býr</td>
            <td class="right"><?php echo cpt_taxonomy(); ?></td>
          </tr>
          <tr>
            <?php if ( $job ) { ?>
              <td>Vinir</td>
              <td class="right"><?php echo $job; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <?php if ($partner) { ?>
              <td>Býr með</td>
              <td class="right">
                <a class="partner-link" href="<?php the_permalink($partner); ?>">
                  <?php echo get_the_title($partner); ?>
                </a>
              </td>
          </tr>
          <tr>
            <?php if ($partImage) { ?>
            <td></td>
            <td class="right">
              <img class="partner-image" src="<?php echo $partImage; ?>" alt="partner">
            </td>
            <?php }
            } ?>
          </tr>
        </tbody>
      </table>
    </div>
  <?php }

// Function to call all cpt with the same taxonomy

function allCountries() {
  $args = array(
    'post_type' => array('siblings', 'children', 'grandchildren', 'partners'),
    'posts_per_page' => -1,
    'orderby' => 'name',
    'order' => 'ASC',
    // 'tax_query' => array(
    //   'taxonomy' => 'country',
    //   'field' => 'slug',
    //   'terms' => array('sweden'),
    //   'include_children' => true,
    //   'operator' => 'IN'
    // )
    // 'taxonomy' => 'country'
  );

  $query = new WP_Query($args); ?>

  <section class="archives">
    <div class="container">
      <div class="row">
        <?php while ($query -> have_posts()) : $query -> the_post();
          $image = get_field('image'); ?>
          <div class="col-xs-6 col-sm-4 col-md-3">
            <a href="<?php the_permalink(); ?>">
              <?php if ($image) { ?>
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
              <?php }?>
            </a>
          </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </section>
<?php }

// Pagination stuff

  function paginator(){
    $args = array(
      'show_all' => true,
      'prev_next' => false
    );

    if (get_previous_posts_link() || get_next_posts_link()) { ?>
      <nav class="pagination">
        <!-- Previous button -->
        <?php if (get_previous_posts_link()) : ?>
          <button class="btn btn-danger">
            <span class="pages">
              <i class="fa fa-caret-left" aria-hidden="true"></i>
              <?php previous_posts_link('Fyrri'); ?>
            </span>
          </button>
        <?php endif; ?>
        <!-- Pagination pages button -->
        <?php if (get_the_posts_pagination()) { ?>
          <span class="pages-numbers">
            <?php echo paginate_links($args); ?>
          </span>
        <?php } ?>
        <!-- Next button -->
        <?php if (get_next_posts_link()) : ?>
          <button class="btn btn-danger">
            <span class="pages">
              <?php next_posts_link('Næsta'); ?>
              <i class="fa fa-caret-right" aria-hidden="true"></i>
            </span>
          </button>
        <?php endif; ?>
      </nav>
    <?php }
  }

  // Function for Gallery layout

  function one_more_gallery() {
    $images = get_field('gallery');

    if ($images) { ?>
      <div class="gallery-container">
        <ul class="gallery-list">
        <?php
          foreach ($images as $image) {
            $thumb = $image['sizes']['thumbnail'];
            $alt = $image['alt'];
            $fullsize = $image['url']; ?>
            <li>
              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" data-url="<?php echo $fullsize; ?>"/>
            </li>
          <?php }
        ?>
        </ul>
      </div>
    <?php }
  }

  // Another gallery that gets thumbnails from every post

  function another_gallery() {
    $every_post = get_posts(array(
      'post_type' => array('siblings', 'children', 'grandchildren', 'partners'),
      'posts_per_page' => -1,
      'numberposts' => -1
    )); ?>
    
    <div class="another-gallery-container">
      <?php 
        // Randomize the gallery
        shuffle($every_post); 
        // Display the images
        foreach ($every_post as $single_post) {
        $image_array = get_post_meta($single_post->image);
        $uri = $image_array['_wp_attached_file']['0'];
        $upload_dir = wp_upload_dir();
        $image = trailingslashit( $upload_dir['baseurl']) . $uri;
        
        if ($uri) { ?>
          <div class="gallery-image" style="background-image: url('<?php echo $image; ?>');">
          </div>
        <?php }
      } ?>
      </div>
  <?php }

  // Birthday

  function birthday() {
    // Check all posts for Birthday
    $every_post = get_posts(array(
      'post_type' => array('siblings', 'children', 'grandchildren', 'partners'),
      'posts_per_page' => -1,
      'posts_status' => 'publish'
    ));

    foreach ($every_post as $single_post) {
      $date = date('d/m/Y');
      $birthday = get_post_meta($single_post->ID, 'date_of_birth', true);
      $sex = get_post_meta($single_post->ID, 'sex', true);

      if($birthday != '') {
        $bday = date("d/m/Y", strtotime($birthday));
      }
      // Get useable values
      $sub_date = substr($date, 0, 5);
      $bday = substr($bday, 0, 5);
      $age = age($birthday);

      if ($bday == $sub_date) {
        // Content for each post
        $postTitle = 'Til hamingju með daginn ' . $single_post->post_title . ', ' . $date;
        $sex = ($sex == 'female') ? 'gömul' : 'gamall';

        $content = '<p>Í dag ertu ' . $age . ' ára ' . $sex . '</p><p>…áttu frábaran dag</p>';

        $post_data = array(
          'post_title' => $postTitle,
          'post_status' => 'publish',
          'post_content' => $content,
        );
        // Does a post already exist?
        $page_exists = get_page_by_title( $postTitle, OBJECT, 'post');

        // If not, create a new post
        if ($page_exists == null) {
          wp_insert_post($post_data);
        }
      }
    }
  }

  function age($birthday) {
    $dash = '-';
    $birthDate = substr_replace($birthday, $dash, 4, 0);
    $birthDate = substr_replace($birthDate, $dash, 7, 0);
    $birthDate = date("d-m-Y", strtotime($birthDate));
    $date = date('Y-m-d');
    $diff = date_diff(date_create($birthDate), date_create($today));
    $result = $diff->format('%y');
    return $result;
  }
