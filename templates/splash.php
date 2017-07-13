<?php
/* Template name: Splash Page */
get_header('alt');
?>

	<section class="splash">
		<?php
			$image = get_field('splash_image', 'options');
			$title = get_field('splash_title', 'options');
			if ( $image ) : ?>
				<a href="<?php echo get_permalink( get_option('page_for_posts')); ?>">
					<div class="front-image" style="background-image: url('<?php echo $image; ?>');">
						<h1 class="frontpage-title"><?php echo $title; ?></h1>
					</div>
				</a>
			<?php else : ?>
				<a href="<?php echo get_permalink( get_option('page_for_posts')); ?>">
					<h1 class="frontpage-title"><?php echo $title; ?></h1>
				</a>
			<?php endif;
		?>
	</section>

<?php get_footer('alt');
