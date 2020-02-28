<?php

/* 
    All the constant use for Nitro defined here..
*/

$theme_root = trailingslashit( wp_normalize_path( get_template_directory() ));

$theme_uri = trailingslashit( get_template_directory_uri() );

define('THEME_URI', $theme_uri);

define('ROOT_URI',$theme_root);

define('ASSETS', THEME_URI.'assets/');

define('CSS_URI', ASSETS.'css/');

define('JS_URI',ASSETS.'js/');

define('IMAGE_URI',ASSETS.'images/');

define('FONT_URI',ASSETS.'fonts/');

define('RAWFRAMEWORK',ROOT_URI.'rawframework/');

define( 'HELPERS', RAWFRAMEWORK . 'helpers/' );

define('METABOXES',RAWFRAMEWORK.'meta-boxes/');

define('POST_TYPES',RAWFRAMEWORK.'post_types/');

define('TAXONOMIES',RAWFRAMEWORK.'taxonomies/');

define('WIDGETS',RAWFRAMEWORK.'widgets/');
