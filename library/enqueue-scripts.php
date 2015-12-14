<?php

function foundationpress_scripts() {

    // Enqueue the main Stylesheet.
    wp_enqueue_style( 'main-stylesheet', get_stylesheet_directory_uri() . '/assets/stylesheets/foundation.css', array(), '2.2.0', 'all' );

    // Deregister the jquery version bundled with WordPress.
    wp_deregister_script( 'jquery' );

    // CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

    // If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88.
    // It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
    wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() . '/assets/javascript/foundation.js', array('jquery'), '2.2.0', true );

    // Add the comment-reply library on pages where it is necessary
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}

add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );

?>
