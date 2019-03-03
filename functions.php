<?php

if( ! function_exists( 'reader_setup_theme' ) ) {

    function reader_setup_theme() {

        load_theme_textdomain( 'reader', get_template_directory() . '/languages' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list', 
                'gallery',
                'caption'
            )
        );

        add_theme_support( 'responsive-embeds' );

        register_nav_menus( array( 
            'primary' => __( 'Primary Header Navigation', 'reader' ),
            'social'  => __( 'The Social Navigation', 'reader' ),
            'footer'  => __( 'Primary Footer Navigation', 'reader' )
        ) );

    }

}
add_action( 'after_setup_theme', 'reader_setup_theme' );


function reader_enqueue_scripts() {

    wp_enqueue_style( 'reader-styles', get_template_directory_uri() . '/assets/css/reader.css', array(), date( 'h:i:s' ) );

    wp_enqueue_script( 'reader-script', get_template_directory_uri() . '/assets/js/reader.js', array(), date( 'h:i:s' ), true );

}
add_action( 'wp_enqueue_scripts', 'reader_enqueue_scripts' );

add_filter( 'show_admin_bar', '__return_false' );