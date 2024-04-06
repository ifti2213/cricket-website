<?php
/**
 * Cricket Tournament functions and definitions
 *
 * @package Cricket Tournament
 * @subpackage cricket_tournament
 */

function cricket_tournament_setup() {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'cricket-tournament-featured-image', 2000, 1200, true );
	add_image_size( 'cricket-tournament-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary-menu'    => __( 'Primary Menu', 'cricket-tournament' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', cricket_tournament_fonts_url() ) );
}
add_action( 'after_setup_theme', 'cricket_tournament_setup' );

/**
 * Register custom fonts.
 */
function cricket_tournament_fonts_url(){
	$cricket_tournament_font_url = '';
	$cricket_tournament_font_family = array();
	$cricket_tournament_font_family[] = 'Inter:wght@100;200;300;400;500;600;700;800;900';
	$cricket_tournament_font_family[] = 'Lexend:wght@100;200;300;400;500;600;700;800;900';

	$cricket_tournament_font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$cricket_tournament_font_family[] = 'Bad Script';
	$cricket_tournament_font_family[] = 'Bebas Neue';
	$cricket_tournament_font_family[] = 'Fjalla One';
	$cricket_tournament_font_family[] = 'PT Sans:ital,wght@0,400;0,700;1,400;1,700';
	$cricket_tournament_font_family[] = 'PT Serif:ital,wght@0,400;0,700;1,400;1,700';
	$cricket_tournament_font_family[] = 'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900';
	$cricket_tournament_font_family[] = 'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$cricket_tournament_font_family[] = 'Alex Brush';
	$cricket_tournament_font_family[] = 'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$cricket_tournament_font_family[] = 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$cricket_tournament_font_family[] = 'Playball';
	$cricket_tournament_font_family[] = 'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$cricket_tournament_font_family[] = 'Julius Sans One';
	$cricket_tournament_font_family[] = 'Arsenal:ital,wght@0,400;0,700;1,400;1,700';
	$cricket_tournament_font_family[] = 'Slabo 13px';
	$cricket_tournament_font_family[] = 'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900';
	$cricket_tournament_font_family[] = 'Overpass Mono:wght@300;400;500;600;700';
	$cricket_tournament_font_family[] = 'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900';
	$cricket_tournament_font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$cricket_tournament_font_family[] = 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900';
	$cricket_tournament_font_family[] = 'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$cricket_tournament_font_family[] = 'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$cricket_tournament_font_family[] = 'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700';
	$cricket_tournament_font_family[] = 'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$cricket_tournament_font_family[] = 'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$cricket_tournament_font_family[] = 'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$cricket_tournament_font_family[] = 'Quicksand:wght@300;400;500;600;700';
	$cricket_tournament_font_family[] = 'Padauk:wght@400;700';
	$cricket_tournament_font_family[] = 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$cricket_tournament_font_family[] = 'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$cricket_tournament_font_family[] = 'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$cricket_tournament_font_family[] = 'Pacifico';
	$cricket_tournament_font_family[] = 'Indie Flower';
	$cricket_tournament_font_family[] = 'VT323';
	$cricket_tournament_font_family[] = 'Dosis:wght@200;300;400;500;600;700;800';
	$cricket_tournament_font_family[] = 'Frank Ruhl Libre:wght@300;400;500;700;900';
	$cricket_tournament_font_family[] = 'Fjalla One';
	$cricket_tournament_font_family[] = 'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$cricket_tournament_font_family[] = 'Oxygen:wght@300;400;700';
	$cricket_tournament_font_family[] = 'Arvo:ital,wght@0,400;0,700;1,400;1,700';
	$cricket_tournament_font_family[] = 'Noto Serif:ital,wght@0,400;0,700;1,400;1,700';
	$cricket_tournament_font_family[] = 'Lobster';
	$cricket_tournament_font_family[] = 'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
	$cricket_tournament_font_family[] = 'Yanone Kaffeesatz:wght@200;300;400;500;600;700';
	$cricket_tournament_font_family[] = 'Anton';
	$cricket_tournament_font_family[] = 'Libre Baskerville:ital,wght@0,400;0,700;1,400';
	$cricket_tournament_font_family[] = 'Bree Serif';
	$cricket_tournament_font_family[] = 'Gloria Hallelujah';
	$cricket_tournament_font_family[] = 'Abril Fatface';
	$cricket_tournament_font_family[] = 'Varela Round';
	$cricket_tournament_font_family[] = 'Vampiro One';
	$cricket_tournament_font_family[] = 'Shadows Into Light';
	$cricket_tournament_font_family[] = 'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$cricket_tournament_font_family[] = 'Rokkitt:wght@100;200;300;400;500;600;700;800;900';
	$cricket_tournament_font_family[] = 'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$cricket_tournament_font_family[] = 'Francois One';
	$cricket_tournament_font_family[] = 'Orbitron:wght@400;500;600;700;800;900';
	$cricket_tournament_font_family[] = 'Patua One';
	$cricket_tournament_font_family[] = 'Acme';
	$cricket_tournament_font_family[] = 'Satisfy';
	$cricket_tournament_font_family[] = 'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$cricket_tournament_font_family[] = 'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700';
	$cricket_tournament_font_family[] = 'Architects Daughter';
	$cricket_tournament_font_family[] = 'Russo One';
	$cricket_tournament_font_family[] = 'Monda:wght@400;700';
	$cricket_tournament_font_family[] = 'Righteous';
	$cricket_tournament_font_family[] = 'Lobster Two:ital,wght@0,400;0,700;1,400;1,700';
	$cricket_tournament_font_family[] = 'Hammersmith One';
	$cricket_tournament_font_family[] = 'Courgette';
	$cricket_tournament_font_family[] = 'Permanent Marke';
	$cricket_tournament_font_family[] = 'Cherry Swash:wght@400;700';
	$cricket_tournament_font_family[] = 'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
	$cricket_tournament_font_family[] = 'Poiret One';
	$cricket_tournament_font_family[] = 'BenchNine:wght@300;400;700';
	$cricket_tournament_font_family[] = 'Economica:ital,wght@0,400;0,700;1,400;1,700';
	$cricket_tournament_font_family[] = 'Handlee';
	$cricket_tournament_font_family[] = 'Cardo:ital,wght@0,400;0,700;1,400';
	$cricket_tournament_font_family[] = 'Alfa Slab One';
	$cricket_tournament_font_family[] = 'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$cricket_tournament_font_family[] = 'Cookie';
	$cricket_tournament_font_family[] = 'Chewy';
	$cricket_tournament_font_family[] = 'Great Vibes';
	$cricket_tournament_font_family[] = 'Coming Soon';
	$cricket_tournament_font_family[] = 'Philosopher:ital,wght@0,400;0,700;1,400;1,700';
	$cricket_tournament_font_family[] = 'Days One';
	$cricket_tournament_font_family[] = 'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$cricket_tournament_font_family[] = 'Shrikhand';
	$cricket_tournament_font_family[] = 'Tangerine:wght@400;700';
	$cricket_tournament_font_family[] = 'IM Fell English SC';
	$cricket_tournament_font_family[] = 'Boogaloo';
	$cricket_tournament_font_family[] = 'Bangers';
	$cricket_tournament_font_family[] = 'Fredoka One';
	$cricket_tournament_font_family[] = 'Volkhov:ital,wght@0,400;0,700;1,400;1,700';
	$cricket_tournament_font_family[] = 'Shadows Into Light Two';
	$cricket_tournament_font_family[] = 'Marck Script';
	$cricket_tournament_font_family[] = 'Sacramento';
	$cricket_tournament_font_family[] = 'Unica One';
	$cricket_tournament_font_family[] = 'Dancing Script:wght@400;500;600;700';
	$cricket_tournament_font_family[] = 'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$cricket_tournament_font_family[] = 'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$cricket_tournament_font_family[] = 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$cricket_tournament_font_family[] = 'DM Serif Display:ital@0;1';
	$cricket_tournament_font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800';

	$cricket_tournament_query_args = array(
		'family'	=> rawurlencode(implode('|',$cricket_tournament_font_family)),
	);
	$cricket_tournament_font_url = add_query_arg($cricket_tournament_query_args,'//fonts.googleapis.com/css');
	return $cricket_tournament_font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $cricket_tournament_font_url ) );
}

/**
 * Register widget area.
 */
function cricket_tournament_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'cricket-tournament' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'cricket-tournament' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'cricket-tournament' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'cricket-tournament' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'cricket-tournament' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'cricket-tournament' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'cricket-tournament' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'cricket-tournament' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'cricket-tournament' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'cricket-tournament' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'cricket-tournament' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'cricket-tournament' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'cricket-tournament' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'cricket-tournament' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'cricket_tournament_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cricket_tournament_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'cricket-tournament-fonts', cricket_tournament_fonts_url(), array(), null );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

	// Theme stylesheet.
	wp_enqueue_style( 'cricket-tournament-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-body-width-layout.php' );
	wp_add_inline_style( 'cricket-tournament-style',$cricket_tournament_tp_theme_css );
	wp_enqueue_style( 'cricket-tournament-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-theme-color.php' );
	wp_add_inline_style( 'cricket-tournament-style',$cricket_tournament_tp_theme_css );
	wp_style_add_data('cricket-tournament-style', 'rtl', 'replace');
	// owl
	wp_enqueue_style( 'owl-carousel-css', get_theme_file_uri( '/assets/css/owl.carousel.css' ) );

	// Theme stylesheet.
	wp_enqueue_style( 'cricket-tournament-style', get_stylesheet_uri() );

	// Theme block stylesheet.
	wp_enqueue_style( 'cricket-tournament-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'cricket-tournament-style' ), '1.0' );

	// Fontawesome
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/css/fontawesome-all.css' ) );

	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );

	wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri( '/assets/js/owl.carousel.js' ), array( 'jquery' ), true );

	wp_enqueue_script( 'cricket-tournament-custom-scripts', esc_url( get_template_directory_uri() ) . '/assets/js/custom.js', array('jquery'), true );

	wp_enqueue_script( 'cricket-tournament-focus-nav', esc_url( get_template_directory_uri() ) . '/assets/js/focus-nav.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$cricket_tournament_body_font_family = get_theme_mod('cricket_tournament_body_font_family', '');

	$cricket_tournament_heading_font_family = get_theme_mod('cricket_tournament_heading_font_family', '');

	$cricket_tournament_menu_font_family = get_theme_mod('cricket_tournament_menu_font_family', '');

	$cricket_tournament_tp_theme_css = '
		body{
		    font-family: '.esc_html($cricket_tournament_body_font_family).';
		}
		.more-btn a{
		    font-family: '.esc_html($cricket_tournament_body_font_family).';
		}
		h1{
		    font-family: '.esc_html($cricket_tournament_heading_font_family).';
		}
		h2{
		    font-family: '.esc_html($cricket_tournament_heading_font_family).';
		}
		h3{
		    font-family: '.esc_html($cricket_tournament_heading_font_family).';
		}
		h4{
		    font-family: '.esc_html($cricket_tournament_heading_font_family).';
		}
		h5{
		    font-family: '.esc_html($cricket_tournament_heading_font_family).';
		}
		h6{
		    font-family: '.esc_html($cricket_tournament_heading_font_family).';
		}
		#theme-sidebar .wp-block-search .wp-block-search__label{
		    font-family: '.esc_html($cricket_tournament_heading_font_family).';
		}
		.menubar{
		    font-family: '.esc_html($cricket_tournament_menu_font_family).';
		}
	';
	wp_add_inline_style('cricket-tournament-style', $cricket_tournament_tp_theme_css);
}
add_action( 'wp_enqueue_scripts', 'cricket_tournament_scripts' );

//Admin Enqueue for Admin
function cricket_tournament_admin_enqueue_scripts(){
	wp_enqueue_style('cricket-tournament-admin-style', esc_url( get_template_directory_uri() ) . '/assets/css/admin.css');
	wp_enqueue_script( 'cricket-tournament-custom-scripts', esc_url( get_template_directory_uri() ). '/assets/js/custom.js', array('jquery'), true);
	wp_register_script( 'cricket-tournament-admin-script', get_template_directory_uri() . '/assets/js/cricket-tournament-admin.js', array( 'jquery' ), '', true );

	wp_localize_script(
		'cricket-tournament-admin-script',
		'cricket_tournament',
		array(
			'admin_ajax'	=>	admin_url('admin-ajax.php'),
			'wpnonce'			=>	wp_create_nonce('cricket_tournament_dismissed_notice_nonce')
		)
	);
	wp_enqueue_script('cricket-tournament-admin-script');

    wp_localize_script( 'cricket-tournament-admin-script', 'cricket_tournament_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'cricket_tournament_admin_enqueue_scripts' );

add_action( 'wp_ajax_cricket_tournament_dismissed_notice_handler', 'cricket_tournament_ajax_notice_handler' );

function cricket_tournament_ajax_notice_handler() {
	if (!wp_verify_nonce($_POST['wpnonce'], 'cricket_tournament_dismissed_notice_nonce')) {
		exit;
	}
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function cricket_tournament_activation_notice() { 

	if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>

    <div class="cricket-tournament-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
        <div class="cricket-tournament-getting-started-notice clearfix">
            <div class="cricket-tournament-theme-notice-content">
                <h2 class="cricket-tournament-notice-h2">
                    <?php
                printf(
                /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                    esc_html__( 'Welcome! Thank you for choosing %1$s!', 'cricket-tournament' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                ?>
                </h2>

                <p class="plugin-install-notice"><?php echo sprintf(__('Click here to get started with the theme set-up.', 'cricket-tournament')) ?></p>

                <a class="cricket-tournament-btn-get-started button button-primary button-hero cricket-tournament-button-padding" href="<?php echo esc_url( admin_url( 'themes.php?page=cricket-tournament-about' )); ?>" ><?php esc_html_e( 'Get started', 'cricket-tournament' ) ?></a><span class="cricket-tournament-push-down">
                <?php
                    /* translators: %1$s: Anchor link start %2$s: Anchor link end */
                    printf(
                        'or %1$sCustomize theme%2$s</a></span>',
                        '<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
                        '</a>'
                    );
                ?>
            </div>
        </div>
    </div>
<?php }

}

add_action( 'admin_notices', 'cricket_tournament_activation_notice' );

add_action('after_switch_theme', 'cricket_tournament_setup_options');
function cricket_tournament_setup_options () {
    update_option('dismissed-get_started', FALSE );
}
define('CRICKET_TOURNAMENT_CREDIT',__('https://www.themespride.com/themes/free-cricket-wordpress-theme/','cricket-tournament') );
if ( ! function_exists( 'cricket_tournament_credit' ) ) {
	function cricket_tournament_credit(){
		echo "<a href=".esc_url(CRICKET_TOURNAMENT_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('cricket_tournament_footer_text',__('Cricket Tournament WordPress Theme','cricket-tournament')))."</a>";
	}
}

// Category count 
function cricket_tournament_display_post_category_count() {
    $cricket_tournament_category = get_the_category();
    $cricket_tournament_category_count = ($cricket_tournament_category) ? count($cricket_tournament_category) : 0;
    $cricket_tournament_category_text = ($cricket_tournament_category_count === 1) ? 'category' : 'categories'; // Check for pluralization
    echo $cricket_tournament_category_count . ' ' . $cricket_tournament_category_text;
}

//post tag
function custom_tags_filter($cricket_tournament_tag_list) {
    // Replace the comma (,) with an empty string
    $cricket_tournament_tag_list = str_replace(', ', '', $cricket_tournament_tag_list);

    return $cricket_tournament_tag_list;
}
add_filter('the_tags', 'custom_tags_filter');

function custom_output_tags() {
    $cricket_tournament_tags = get_the_tags();

    if ($cricket_tournament_tags) {
        $cricket_tournament_tags_output = '<div class="post_tag">Tags: ';

        $cricket_tournament_first_tag = reset($cricket_tournament_tags);

        foreach ($cricket_tournament_tags as $tag) {
            $cricket_tournament_tags_output .= '<a href="' . esc_url(get_tag_link($tag)) . '" rel="tag" class="mr-2">' . esc_html($tag->name) . '</a>';
            if ($tag !== $cricket_tournament_first_tag) {
                $cricket_tournament_tags_output .= ' ';
            }
        }

        $cricket_tournament_tags_output .= '</div>';

        echo $cricket_tournament_tags_output;
    }
}

/*radio button sanitization*/
function cricket_tournament_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}


function cricket_tournament_sanitize_dropdown_pages( $page_id, $setting ) {
	$page_id = absint( $page_id );
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'cricket_tournament_loop_columns');
if (!function_exists('cricket_tournament_loop_columns')) {
	function cricket_tournament_loop_columns() {
		$columns = get_theme_mod( 'cricket_tournament_per_columns', 3 );
		return $columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'cricket_tournament_per_page', 20 );
function cricket_tournament_per_page( $cricket_tournament_cols ) {
  	$cricket_tournament_cols = get_theme_mod( 'cricket_tournament_product_per_page', 9 );
	return $cricket_tournament_cols;
}

function cricket_tournament_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function cricket_tournament_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

// Sanitize Sortable control.
function cricket_tournament_sanitize_sortable( $val, $setting ) {
	if ( is_string( $val ) || is_numeric( $val ) ) {
		return array(
			esc_attr( $val ),
		);
	}
	$sanitized_value = array();
	foreach ( $val as $item ) {
		if ( isset( $setting->manager->get_control( $setting->id )->choices[ $item ] ) ) {
			$sanitized_value[] = esc_attr( $item );
		}
	}
	return $sanitized_value;
}
/* Excerpt Limit Begin */
function cricket_tournament_excerpt_function($excerpt_count = 35) {
    $cricket_tournament_excerpt = get_the_excerpt();

    $cricket_tournament_text_excerpt = wp_strip_all_tags($cricket_tournament_excerpt);

    $cricket_tournament_excerpt_limit = esc_attr(get_theme_mod('cricket_tournament_excerpt_count', $excerpt_count));

    $cricket_tournament_theme_excerpt = implode(' ', array_slice(explode(' ', $cricket_tournament_text_excerpt), 0, $cricket_tournament_excerpt_limit));

    return $cricket_tournament_theme_excerpt;
}
function cricket_tournament_sanitize_number_range( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

/**
 * Use front-page.php when Front page displays is set to a static page.
 */
function cricket_tournament_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'cricket_tournament_front_page_template' );

/**
 * Logo Custamization.
 */

function cricket_tournament_logo_width(){

	$cricket_tournament_logo_width   = get_theme_mod( 'cricket_tournament_logo_width', 150 );

	echo "<style type='text/css' media='all'>"; ?>
		img.custom-logo{
		    width: <?php echo absint( $cricket_tournament_logo_width ); ?>px;
		    max-width: 100%;
		}
	<?php echo "</style>";
}

add_action( 'wp_head', 'cricket_tournament_logo_width' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * Load Theme Web File
 */
require get_parent_theme_file_path('/inc/wptt-webfont-loader.php' );
/**
 * Load Toggle file
 */
require get_parent_theme_file_path( '/inc/controls/customize-control-toggle.php' );

/**
 * TGM Recommendation
 */
require get_parent_theme_file_path( '/inc/TGM/tgm.php' );

/**
 * Load Theme About Page
 */
require get_parent_theme_file_path( '/inc/about-theme.php' );

/**
 * load sortable file
 */
require get_parent_theme_file_path( '/inc/controls/sortable-control.php' );
