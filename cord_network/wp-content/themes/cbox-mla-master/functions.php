<?php
//Custom functionality for your CBOX Child Theme.
require_once( 'engine/includes/custom.php' );
require_once( 'bp-custom.php' ); 

/**
 * Set this to true to put Infinity into developer mode. Developer mode will refresh the dynamic.css on every page load.
 */
function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function custom_login_css() {
echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/login/login-styles.css">';
}
add_action('login_head', 'custom_login_css');


define( 'INFINITY_DEV_MODE', false );
?>
