<?php
/* 
    Entire Applications Logic Here...

*/
class framework {

    /* 
        Initializing all the methods in constructor.
    */
    public function __construct()
    {
        $this->add_action();
    }

    /* 
        Almost all the actions are registered here.
    */
    public function add_action()
    {
        add_action( 'wp_enqueue_scripts', [ $this,'nitro_enqueue_style' ] );
        add_action( 'init', [ $this,'loadPosts' ] );
        add_action( 'init', [ $this,'theme_sidebar' ] );

    }

    /*
        Loading the custom posts here.
     */
    public function loadPosts()
    {
        $post_types = ['banner'];

        foreach($post_types as $post_type){

            require_once POST_TYPES . $post_type . '.php';
        }        
    }

    /* 
        Loading the custom metaboxes  here.
    */
    public function loadMetaboxes()
    {
        
    }

    /* 
        Loading the custom taxonomies here.
    */
    public function loadTaxonomies()
    {
        
    }

    /* 
        Loading the custom widgets here.
    */
    public function loadWidgets()
    {
        
    }

    /* 
        Adding sidebar
    */
    public function theme_sidebar()
    {
        add_theme_support( 'post-thumbnails' );

    }

    /* 
        Enqueueing all the style and script here.     
    */
    public function nitro_enqueue_style()
    {
        /* Loading CSS */
        wp_enqueue_style( 'style-css', FONT_URI.'icomoon/style.css' );
        wp_enqueue_style( 'bootstrap', CSS_URI .'bootstrap.min.css' );
        wp_enqueue_style( 'jquery-ui', CSS_URI .'jquery-ui.css' );
        wp_enqueue_style( 'carousel' , CSS_URI . 'owl.carousel.min.css' );
        wp_enqueue_style( 'theme.default.min',CSS_URI.'owl.theme.default.min.css' );
        wp_enqueue_style( 'jquery.fancybox',CSS_URI.'jquery.fancybox.min.css' );  
        wp_enqueue_style( 'bootstrap-datepicker',CSS_URI.'bootstrap-datepicker.css' );
        wp_enqueue_style( 'flaticon', FONT_URI . 'flaticon/font/flaticon.css' );
        wp_enqueue_style( 'aos',CSS_URI.'aos.css' );
        wp_enqueue_style( 'nitros', CSS_URI.'style.css' );

        /* Loading JS */
        wp_enqueue_script( 'jquery-3.3.1', JS_URI . 'jquery-3.3.1.min.js', array('jquery') , false, true );
        wp_enqueue_script( 'jquery-ui' , JS_URI .'jquery-ui.js' , array(), false , true ); 
        wp_enqueue_script( 'popper.min' , JS_URI .'popper.min.js' , array(), false , true ); 
        wp_enqueue_script( 'bootstrap.min' , JS_URI .'bootstrap.min.js' , array(), false , true ); 
        wp_enqueue_script( 'owl.carousel' , JS_URI .'owl.carousel.min.js' , array(), false , true ); 
        wp_enqueue_script( 'jquery.countdown.min' , JS_URI .'jquery.countdown.min.js' , array('jquery'), false , true ); 
        wp_enqueue_script( 'jquery.easing' , JS_URI .'jquery.easing.1.3.js' , array(), false , true ); 
        wp_enqueue_script( 'aos' , JS_URI .'aos.js' , array(), false , true ); 
        wp_enqueue_script( 'jquery.fancybox' , JS_URI .'jquery.fancybox.min.js' , array(), false , true ); 
        wp_enqueue_script( 'jquery.sticky' , JS_URI .'jquery.sticky.js' , array(), false , true ); 
        wp_enqueue_script( 'isotope.pkgd' , JS_URI .'isotope.pkgd.min.js' , array(), false , true ); 
        wp_enqueue_script( 'main' , JS_URI .'main.js' , array(), false , true ); 

        
    }
    
}

$framework = new framework();