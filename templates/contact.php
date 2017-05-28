<?php 

/* Template name: Contact Page */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 aligncenter">

				<?php if ( have_posts() ) :

					while ( have_posts() ) : the_post(); ?>

						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>

					<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'partials/content', 'none' ) ?>

				<?php endif; ?>
	
			</div>
		</div>
	</div>

<?php get_footer(); ?>