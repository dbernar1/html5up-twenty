<?php

add_css_and_js_files_to_header_for__html5up_twenty();
























// details
function add_css_and_js_files_to_header_for__html5up_twenty(){
	add_action( 'wp_head', 'theme_css_and_js__html5up_twenty' );
}

function enqueue_script__html5up_twenty( $handle, $script_name, $deps ) {
	wp_enqueue_script(
		$handle,
		$src = get_template_directory_uri() . '/js/' . $script_name,
		$deps,
		$ver = filemtime( get_template_directory() . '/js/' . $script_name ),
		$in_footer = true
	);
}

function theme_css_and_js__html5up_twenty() {

	enqueue_script__html5up_twenty(
		$named = 'dropotron__html5up_twenty',
		$located_at = 'jquery.dropotron.min.js',
		$after_loading = array( 'jquery' )
	);

	enqueue_script__html5up_twenty(
		$named = 'skel__html5up_twenty',
		$located_at = 'skel.min.js',
		$after_loading = array( 'dropotron__html5up_twenty' )
	);

	enqueue_script__html5up_twenty(
		$named = 'skel-layers__html5up_twenty',
		$located_at = 'skel-layers.min.js',
		$after_loading = array( 'skel__html5up_twenty' )
	);

	enqueue_script__html5up_twenty(
		$named = 'init__html5up_twenty',
		$located_at = 'init.js',
		$after_loading = array( 'skel-layers__html5up_twenty' )
	);

	$theme_url = get_template_directory_uri() . '/';
	wp_localize_script( 'init__html5up_twenty', 'HTML5UPTWENTY', array( 'theme_url' => $theme_url ) );
?>
	<!--[if lte IE 8]><script src="<?php echo $theme_url ?>css/ie/html5shiv.js"></script><![endif]-->
	<noscript>
		<link rel="stylesheet" href="<?php echo $theme_url ?>css/skel.css" />
		<link rel="stylesheet" href="<?php echo $theme_url ?>css/style.css" />
		<link rel="stylesheet" href="<?php echo $theme_url ?>css/style-noscript.css" />
	</noscript>
	<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo $theme_url ?>css/ie/v8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo $theme_url ?>css/ie/v9.css" /><![endif]-->
<?php
}
