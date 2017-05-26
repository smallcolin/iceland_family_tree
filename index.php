<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<section>
					
					<?php if ( have_posts ) : 

						while ( have_posts() ) : the_post() ?>

							<p>This site is currently being updated.</p>
							<p>Check back later</p>

							<?php the_title(); ?>

							<?php the_content(); 

						endwhile;

					endif; ?>

				</section>
			</div>
		</div>
	</div>

<?php get_footer(); ?>