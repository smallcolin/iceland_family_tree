<?php

/* Template name: Gallery Page */

get_header(); ?>

  <section class="gallery">
    <div class="container">
      <div class="row aligncenter">
        <h2>Myndir</h2>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <?php
            one_more_gallery();
          ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
