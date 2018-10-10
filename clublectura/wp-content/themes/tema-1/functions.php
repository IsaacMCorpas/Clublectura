<?php
register_nav_menus( array(
    'menu-1' => __( 'Primary', 'dudaswp' ),
) );

// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

?>

