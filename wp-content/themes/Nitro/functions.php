<?php

$theme_root = get_template_directory();
$theme_uri  = get_template_directory_uri();

/* 
    Loading defined constant file
*/
require_once trailingslashit( wp_normalize_path( $theme_root ) ) . 'rawframework/helpers/constants.php';

/* 
    Loading helper function
*/
require_once HELPERS.'helper.php';

/* 
    Loading core framework
*/
require  RAWFRAMEWORK .'raw.php';






