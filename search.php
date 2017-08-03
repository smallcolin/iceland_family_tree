<?php get_header(); ?>

  <section class="searched">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 aligncenter">
          <h2>Search results for: <?php the_search_query(); ?></h2>
        </div>
      </div>
    </div>
  </section>

  <section class="results">
    <div class="container">
      <div class="row">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
            $image = get_field('image', $post->ID);
            if (count($posts) > 1) { ?>
              <div class="col-xs-6 col-sm-3">
                <a href="<?php echo the_permalink(); ?>">
                  <div class="search-results-box" style="background-image: url('<?php echo $image ?>');">
                    <h3><?php the_title(); ?></h3>
                  </div>
                </a>
              </div>
            <?php } else { ?>
              <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                <a href="<?php echo the_permalink(); ?>">
                  <div class="search-results-box" style="background-image: url('<?php echo $image ?>');">
                    <h3><?php the_title(); ?></h3>
                  </div>
                </a>
              </div>
            <?php }
          endwhile; ?>
      </div>
    </div>
      <?php else : ?>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 aligncenter">
              No results have been found.  Try again?
            </div>
          </div>
      	  <div class="row">
            <div class="col-xs-12">
              <?php
                $value = $_GET['s'];
              ?>
              <form class="repeat-searchform aligncenter" action="<?php bloginfo("url");?>" method="get" role="search">
                <div class="inner-search">
                  <input type="text" name="s" id="search-input" placeholder=" ex. Eyrun, Idunn, etc" class="text-input" value="<?php echo $value; ?>" autofocus />
                  <input class="btn btn-danger button detail submit-search" type="submit" value="Search" />
                </div>
              </form>

            </div>
      	  </div>
      	</div>
      <?php endif;
    ?>
  </section>


<?php get_footer(); ?>
