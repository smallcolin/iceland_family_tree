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
      $child = get_sub_field('child');
      $grandchild = get_sub_field('grandchild');
      $partner = get_field('partner');

      if ( $name ) {
        echo $name;
      }
      if ( $image ) {
        echo '<img src="';
        echo $image;
        echo '" />';
      }
      if ( $dob ) {
        echo $dob;
      }
      if ( $addy_1 ) {
        echo $addy_1;
      }
      if ( $addy_2 ) {
        echo $addy_2;
      }
      if ( $postcode ) {
        echo $postcode;
      }
      if ( $country ) {
        echo $country;
      }
      if ( $job ) {
        echo $job;
      }
      if ( $parent ) {
        echo $parent;
      }
      if ( $partner ) {
        echo $partner;  // post-object
      }

      //  Need to test $child & $grandchild




    endwhile;
  endif;

get_footer(); ?>