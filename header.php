<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>
		<?php wp_title(); ?>
	</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="fade"></div>
	<div id="modal"><img /></div>

	<header id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-4">
					<a href="<?php bloginfo("url"); ?>">
						<h2><?php bloginfo('site_name'); ?></h2>
					</a>
				</div>
				<!-- Search icon on mobile devices -->
				<div class="visible-xs visible-sm col-xs-2 aligncenter search-icon">
					<i class="fa fa-search"></i>
				</div>
				<!-- Facebook icon and menu full screen -->
				<div class="hidden-xs hidden-sm col-md-7 fullmenu">
					<a href="<?php echo get_field('facebook', 'options'); ?>" target="_blank">
						<i class="fa fa-facebook"></i>
					</a>
					<?php wp_nav_menu(); ?>
				</div>
				<!-- Search icon on full screen -->
				<div class="visible-md visible-lg col-md-1 search-icon">
					<i class="fa fa-search"></i>
				</div>
				<nav>
					<div class="col-xs-2 hidden-md hidden-lg menu-icon">
						<i class="fa fa-bars fa-2x"></i>
					</div>
					<div class="responsive-menu">
						<?php wp_nav_menu(); ?>
					</div>
				</nav>
			</div>
		</div>
	</header>

	<div class="container">
	  <div class="row">
	    <div class="col-xs-12">
				<?php get_search_form(); ?>
	    </div>
	  </div>
	</div>

	<div class="">
		<button onclick="window.location.href='#scroll-logo'" class="top-button">
			<i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i>
		</button>
	</div>

	<main id="main">
		<!-- Run Birthday query -->
		<?php birthday(); ?>
