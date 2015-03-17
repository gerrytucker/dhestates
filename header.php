<!DOCTYPE html>
<html lang="<?php bloginfo('lang'); ?>">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui">
		<title><?php wp_title('|'); ?></title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<header>
			
			<nav class="row" role="navigation">
				
				<div class="large-4 columns">
				</div>
				
				<div class="large-8 columns">
					
					<ul class="inline-list">

	<?php wp_list_pages('sort_column=menu_order&title_li=&depth=2&child_of=22'); ?>

					</ul>

				</div>
				
			</nav>
			
		</header>