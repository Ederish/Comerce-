<?php 
/**
 * ComercePlus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ComercePlus
 */
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cemerceplus_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ComercePlus, use a find and replace
		* to change 'cemerceplus' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'cemerceplus', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'cemerceplus' ),
		)
	);
	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'cemerceplus_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'cemerceplus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cemerceplus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cemerceplus_content_width', 640 );
}
add_action( 'after_setup_theme', 'cemerceplus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cemerceplus_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cemerceplus' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cemerceplus' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
function custom_rewrite_rule() {
    add_rewrite_rule('^mi-ruta/([^/]+)/?', 'index.php?custom_param=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rule');

function custom_query_vars($query_vars) {
    $query_vars[] = 'custom_param';
    $query_vars[] = 'movieId';
    $query_vars[] = 'brand';
    return $query_vars;
}
add_filter('query_vars', 'custom_query_vars');

add_action( 'widgets_init', 'cemerceplus_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function cemerceplus_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());

    // Enqueue CSS files from the 'css' folder
    $css_files = array(
        'Footer.css',
        'Header.css',
        'Home.css',
        'MovieCard.css',
        'MoviesRows.css',
        'SingleRow.css',
        'Navbar.css',
        'UserSelector.css',
    );
    foreach ($css_files as $css_file) {
        wp_enqueue_style(
            basename($css_file, '.css'), // Handle
            get_theme_file_uri('css/' . $css_file), // URL
            array(), // Dependencies
            filemtime(get_theme_file_path('css/' . $css_file)) // Version (file modification time)
        );
    }
    $urlPage = get_query_var('custom_param');

    if ($urlPage === 'brand') {
        wp_enqueue_style(
            'brandPage',
            get_theme_file_uri('css/BrandPage.css'),
            array(),
            filemtime(get_theme_file_path('css/BrandPage.css'))
        );
    } elseif ($urlPage === 'details') {
        wp_enqueue_style(
            'DetailPage',
            get_theme_file_uri('css/DetailPage.css'),
            array(),
            filemtime(get_theme_file_path('css/DetailPage.css'))
        );
    } elseif ($urlPage === 'search') {
        wp_enqueue_style(
            'SearchPage',
            get_theme_file_uri('css/SearchPage.css'),
            array(),
            filemtime(get_theme_file_path('css/SearchPage.css'))
        );
    } else {
        wp_enqueue_style(
            'Home',
            get_theme_file_uri('css/Home.css'),
            array(),
            filemtime(get_theme_file_path('css/Home.css'))
        );
        wp_enqueue_style(
            'CollectionsCards',
            get_theme_file_uri('css/CollectionsCards.css'),
            array(),
            filemtime(get_theme_file_path('css/CollectionsCards.css'))
        );
        wp_enqueue_style(
            'Collections',
            get_theme_file_uri('css/Collections.css'),
            array(),
            filemtime(get_theme_file_path('css/Collections.css'))
        );
        wp_enqueue_style(
            'ImageSlider',
            get_theme_file_uri('css/ImageSlider.css'),
            array(),
            filemtime(get_theme_file_path('css/ImageSlider.css'))
        );
    }
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' );
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), '1.0', true );
	wp_enqueue_script( 'sliders-js', get_template_directory_uri() . 'js\slider.js', array(), '1.0', true );
	wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css'); 
	wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css'); 

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'cemerceplus_scripts');
/*** Implement the Custom Header feature.*/
require get_template_directory() . '/inc/custom-header.php';
/** * Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.*/
require get_template_directory() . '/inc/template-functions.php';
/*** Customizer additions.*/
require get_template_directory() . '/inc/customizer.php';
/*** Load Jetpack compatibility file.*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
$apiKey="";
function useSingleRows($request){
    global $apiKey;
    $requestUrl ="https://api.themoviedb.org/3/list/{$request}?api_key={$apiKey}&language=es-MX";
    $response = file_get_contents($requestUrl);
    $data = json_decode($response, true);
    $results = $data['items'];
    return $results;
}
function useDetailPage($movieId){
    global $apiKey;
    $requestUrl ="https://api.themoviedb.org/3/movie/{$movieId}/recommendations?api_key={$apiKey}&language=es-MX&page=1";
    $response = file_get_contents($requestUrl);
    $data = json_decode($response, true);
    $results = $data['results'];
    return $results;
}
function useSearch($query){
    global $apiKey;
    $requestUrl ="https://api.themoviedb.org/3/search/movie?api_key={$apiKey}&query={$query}";
    $response = file_get_contents($requestUrl);
    $data = json_decode($response, true);
    $results = $data['results'];
    return $results;
}
function MovieData($movieId)
{
  global $apiKey;
  $requestUrl = "https://api.themoviedb.org/3/movie/{$movieId}?api_key={$apiKey}";
  $response = file_get_contents($requestUrl);
  $data = json_decode($response, true);
  return $data;
}
include('components/SingleRow.php'); 