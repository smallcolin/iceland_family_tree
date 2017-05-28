<?php 

/* Template name: Splash Page */

//get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 aligncenter">

				<?php if ( have_posts() ) :

					while ( have_posts() ) : the_post(); ?>

						<a href="<?php echo get_permalink( get_option('page_for_posts')) ?>">
							<div style="background-image: url('<?php echo get_template_directory_uri().'/assets/img/akureyri_winter.jpg'; ?>'); height: 100%; background-repeat: no-repeat; background-size: cover;"></div>
						</a>
						

					<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'partials/content', 'none' ) ?>

				<?php endif; ?>
	
			</div>
		</div>
	</div>

<?php //get_footer(); ?>