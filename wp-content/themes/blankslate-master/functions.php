<?php
	add_action( 'after_setup_theme', 'brofist_setup' );
	function brofist_setup() {
		load_theme_textdomain( 'brofist', get_template_directory() . '/languages' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array( 'header-menu' => esc_html__( 'Header Menu', 'brofist' ) ) );
		register_nav_menus( array( 'footer-menu' => esc_html__( 'Footer Menu', 'brofist' ) ) );
	}
	
	include 'include/post-types.php';
	
	function brofist_load_scripts() {
		wp_register_style('owl-carousel', get_stylesheet_directory_uri() . '/assets/css/css/owl.carousel.min.css', array(), null, false);
		wp_register_style('owl-theme', get_stylesheet_directory_uri() . '/assets/css/css/owl.theme.default.min.css', array(), null);
		wp_register_style('main', get_stylesheet_directory_uri() . '/assets/css/css/main.css', array(), null);
		wp_register_style('animate', get_stylesheet_directory_uri() . '/assets/css/css/animate.css', array(), null);
		wp_register_style('fonts', get_stylesheet_directory_uri() . '/assets/fonts/fonts.css', array(), null);

		// wp_deregister_script('jquery');
		wp_register_script('jquery-js', get_stylesheet_directory_uri() . '/assets/js/jquery.js', array(), null, true);
		wp_register_script('owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array(), null, true);
		wp_register_script('TweenMax', get_stylesheet_directory_uri() . '/assets/js/TweenMax.min.js', array(), null, true);
		wp_register_script('wow', get_stylesheet_directory_uri() . '/assets/js/wow.js', array(), null, true);
		wp_register_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), null, true);
		
		if (is_front_page()) {
			wp_enqueue_style('owl-carousel');
			wp_enqueue_style('owl-carousel');
			wp_enqueue_style('owl-theme');
			wp_enqueue_style('main');
			wp_enqueue_style('animate');
			wp_enqueue_style('fonts');
		} elseif(is_singular()) {
			wp_enqueue_style('main');
			wp_enqueue_style('fonts');
		} elseif(is_post_type_archive('post')) {
			wp_enqueue_style('owl-carousel');
			wp_enqueue_style('owl-theme');
			wp_enqueue_style('main');
			wp_enqueue_style('animate');
			wp_enqueue_style('fonts');
		}

		wp_enqueue_script('jquery-js');
		wp_enqueue_script('owl-carousel');
		wp_enqueue_script('TweenMax');
		wp_enqueue_script('wow');
		wp_enqueue_script('main');
	}
	add_action( 'wp_enqueue_scripts', 'brofist_load_scripts' );	


	add_filter( 'document_title_separator', 'brofist_document_title_separator' );
	function brofist_document_title_separator( $sep ) {
		$sep = '|';
		return $sep;
	}


	add_filter( 'intermediate_image_sizes_advanced', 'brofist_image_insert_override' );
	function brofist_image_insert_override( $sizes ) {
		unset( $sizes['medium_large'] );
		return $sizes;
	}
	
	
	function wpse_setup_theme() {
		 add_theme_support( 'post-thumbnails' );
		 add_image_size( 'reviews', 190 );
	}
	add_action( 'after_setup_theme', 'wpse_setup_theme' );
	

	add_action( 'wp_head', 'brofist_pingback_header' );
	function brofist_pingback_header() {
		if ( is_singular() && pings_open() ) {
			printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
		}
		echo '<style>.logged-in.admin-bar .header, .logged-in.admin-bar .menu-container .menu-header { margin-top: 32px; } .logged-in.admin-bar .menu-container .menu-body-container { margin-top: 102px; }</style>';
	}
	
	
	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> true
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Header Settings',
			'menu_title'	=> 'Header',
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Footer Settings',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Blocks Settings',
			'menu_title'	=> 'Blocks',
			'parent_slug'	=> 'theme-general-settings',
		));
	}
	
	

	function mycustom_wp_footer() {
?>
	<script type="text/javascript">
		document.addEventListener( 'wpcf7invalid', function( event ) {
				$("form.wpcf7-form.invalid").prepend($('.wpcf7-response-output'));
				// $("form.wpcf7-form.invalid .two-field span:before").css("color", "#FF6E00!important");
		}, false );
		
		document.addEventListener( 'wpcf7mailsent', function( event ) {
			if ( '239' == event.detail.contactFormId ) { 
				jQuery('#myModal2').modal(); 
			}
		}, false );
		
		document.addEventListener( 'wpcf7mailsent', function( event ) {
			$('#myModal').modal();
			$('.wpcf7-response-output').css("display", "none");
		}, false );
	</script>
<?php 
	} 
add_action( 'wp_footer', 'mycustom_wp_footer' );




//function pll_custom_flag( $flag, $code ) {
//    $flag['url']    = "/wp-content/polylang/{$code}.png";
//    $flag['width']  = 14;
//    $flag['height'] = 14;
//    return $flag;
//}
//add_filter( 'pll_custom_flag', 'pll_custom_flag', 10, 2 );

