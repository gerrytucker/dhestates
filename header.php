<!DOCTYPE html>
<html lang="<?php bloginfo('lang'); ?>">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui">
		<title><?php wp_title('|'); ?></title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="Dutchy's">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<link rel="apple-touch-icon" href="http://dutchystavern.co.uk/wp-content/themes/dutchys-2015/images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="76x76" href="http://dutchystavern.co.uk/wp-content/themes/dutchys-2015/images/apple-touch-icon-76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="http://dutchystavern.co.uk/wp-content/themes/dutchys-2015/images/apple-touch-icon-60@2.png">
		<link rel="apple-touch-icon" sizes="152x152" href="http://dutchystavern.co.uk/wp-content/themes/dutchys-2015/images/apple-touch-icon-76@2.png">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<nav class="top-nav white-text purple darken-4">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">Logo</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="#">Link 1</a></li>
						<li><a href="#">Link 2</a></li>
						<li><a href="#">Link 3</a></li>
					</ul>
				</div>
			</div>
		</nav>
