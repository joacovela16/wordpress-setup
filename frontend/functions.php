<?php

// funtions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well


// Main switch to get fontend assets from a Vite dev server OR from production built folder
// it is recommeded to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', true);

require_once "vendor/autoload.php";
include "inc/inc.vite.php";


function twentytwenty_menus() {

    $locations = array(
//        'primary'  => __( 'Desktop Horizontal Menu', 'twentytwenty' ),
//        'expanded' => __( 'Desktop Expanded Menu', 'twentytwenty' ),
//        'mobile'   => __( 'Mobile Menu', 'twentytwenty' ),
//        'footer'   => __( 'Footer Menu', 'twentytwenty' ),
//        'social'   => __( 'Social Menu', 'twentytwenty' ),
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'twentytwenty_menus' );
