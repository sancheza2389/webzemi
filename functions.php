
<?php
/**
 * Enqueue a script
 */
function myprefix_enqueue_scripts() {
    wp_enqueue_script( 'my-script', get_stylesheet_directory_uri() . '/js/functions.js' );
}
add_action( 'wp_enqueue_scripts', 'myprefix_enqueue_scripts' );





function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


 ?>
