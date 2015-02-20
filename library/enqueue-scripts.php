<?php

function FoundationPress_scripts() {

  // deregister the jquery version bundled with wordpress
  wp_deregister_script( 'jquery' );

  // enqueue modernizr, jquery and foundation
  wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . '/js/vendor/modernizr.js', array(), '1.0.0', false );
  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/vendor/jquery.js', array(), '1.0.0', true );
  wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() . '/js/foundation.js', array('jquery'), '1.0.0', true );

  // enqueue scripts
  wp_enqueue_script('modernizr');
  wp_enqueue_script('jquery');
  wp_enqueue_script('foundation');

  //if(is_home() || is_front_page()):
      //wp_register_script( 'foundation.slider', get_template_directory_uri() . '/js/foundation/js/foundation/foundation.slider.js', array('jquery'), '1.0.0', true );
      //wp_enqueue_script('foundation.slider');
  //endif;

}
add_action( 'wp_enqueue_scripts', 'FoundationPress_scripts' );


function FoundationPress_js_script() {
?>
<script type="text/javascript">

if ( undefined !== window.jQuery ) {

  jQuery( document ).ready(function( $ ) {

		(function( $ ) {

			$(document).foundation();

		})(jQuery);

	})
}

</script>
<?php
}
add_action( 'wp_footer', 'FoundationPress_js_script',10);

?>

