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

	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-xs-9 col-sm-6">
					<a href="<?php bloginfo("url"); ?>"><h2><?php bloginfo('site_name'); ?></h2></a>
				</div>
				<div class="hidden-xs col-sm-6 fullmenu">
					<?php wp_nav_menu(); ?>
				</div>
				<nav>
					<div class="col-xs-3 hidden-sm hidden-md hidden-lg menu-icon">
						<i class="fa fa-bars"></i>
					</div>
					<div class="responsive-menu">
						<?php wp_nav_menu(); ?>
					</div>
				</nav>
			</div>
		</div>
		</div>
		</div>
		</div>
	</header>

	<main>


