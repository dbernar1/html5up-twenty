<!DOCTYPE HTML>
<!--
	Twenty 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '-', true, 'right' ); ?></title>
		<?php wp_head() ?>
	</head>
	<body <?php body_class( 'loading' ); ?>>
	
		<!-- Header -->
		<header id="header" <?php if ( defined( 'HTML5UP_USE_ALT_HEADER' ) ): ?>class="alt"<?php endif ?>>
			<h1 id="logo">
				<a href="<?php echo home_url( '/' ) ?>">
					<?php bloginfo( 'name' ) ?> <span><?php bloginfo( 'description' ) ?></span>
				</a>
			</h1>

			<nav id="nav">
				<ul>
					<li class="current"><a href="index.html">Welcome</a></li>
					<li class="submenu">
						<a href="">Layouts</a>
						<ul>
							<li><a href="left-sidebar.html">Left Sidebar</a></li>
							<li><a href="right-sidebar.html">Right Sidebar</a></li>
							<li><a href="no-sidebar.html">No Sidebar</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li class="submenu">
								<a href="">Submenu</a>
								<ul>
									<li><a href="#">Dolore Sed</a></li>
									<li><a href="#">Consequat</a></li>
									<li><a href="#">Lorem Magna</a></li>
									<li><a href="#">Sed Magna</a></li>
									<li><a href="#">Ipsum Nisl</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#" class="button special">Sign Up</a></li>
				</ul>
			</nav>
		</header>
