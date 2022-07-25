<?php
/**
 * WP_kadai functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_kadai
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
function wp_kadai_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on WP_kadai, use a find and replace
		* to change 'wp_kadai' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wp_kadai', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'wp_kadai' ),
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
			'wp_kadai_custom_background_args',
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
add_action( 'after_setup_theme', 'wp_kadai_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_kadai_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_kadai_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_kadai_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_kadai_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wp_kadai' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wp_kadai' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wp_kadai_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wp_kadai_scripts() {
	wp_enqueue_style( 'wp_kadai-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wp_kadai-style', 'rtl', 'replace' );

	wp_enqueue_script( 'wp_kadai-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_kadai_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter( 'show_admin_bar', '__return_false' );


function Change_menulabel() {
global $menu;
global $submenu;
$name = 'NEWS';
$menu[5][0] = $name;
$submenu['edit.php'][5][0] = $name.'一覧';
$submenu['edit.php'][10][0] = '新規追加';
}

function Change_objectlabel() {
global $wp_post_types;
$name = 'NEWS';
$labels = &$wp_post_types['post']->labels;
$labels->name = $name;
$labels->singular_name = $name;
$labels->add_new = _x('追加', $name);
$labels->add_new_item = $name.'の新規追加';
$labels->edit_item = $name.'の編集';
$labels->new_item = '新規'.$name;
$labels->view_item = $name.'を表示';
$labels->search_items = $name.'を検索';
$labels->not_found = $name.'が見つかりませんでした';
$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

function add_custom_post_type(){
    // ブログ
    register_post_type(
        'blogs', // 1.投稿タイプ名
        array(   // 2.オプション
            'label' => 'ブログ', // 投稿タイプの名前
            'public'        => true, // 利用する場合はtrueにする
            'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
            'menu_position' => 5, // この投稿タイプが表示されるメニューの位置
            'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
            'supports' => array( // サポートする機能
                'title',
                'editor',
								'thumbnail',
            )
        )
    );
}
add_action('init', 'add_custom_post_type');

function add_custom_taxonomy(){
    // ブログ
    register_taxonomy(
        'blogs-category', // 1.タクソノミーの名前
        'blogs',          // 2.利用する投稿タイプ
        array(            // 3.オプション
            'label' => 'カテゴリー', // タクソノミーの表示名
            'hierarchical' => true, // 階層を持たせるかどうか
            'public' => true, // 利用する場合はtrueにする
        )
    );
}
add_action('init', 'add_custom_taxonomy');

//アーカイブタイトル編集
add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('',false);
    } elseif (is_tag()) {
        $title = single_tag_title('',false);
	} elseif (is_tax()) {
	    $title = single_term_title('',false);
	} elseif (is_post_type_archive() ){
		$title = post_type_archive_title('',false);
	} elseif (is_date()) {
	    $title = get_the_time('Y年n月');
	} elseif (is_search()) {
	    $title = '検索結果：'.esc_html( get_search_query(false) );
	} elseif (is_404()) {
	    $title = '「404」ページが見つかりません';
	} else {

	}
    return $title;
});

//アーカイブ一覧URL（post）
function post_has_archive($args, $post_type){
  if('post'== $post_type){
    $args['rewrite']=true;
    $args['has_archive']='post'; /* アーカイブにつけるスラッグ名 */
  }
  return $args;
}

add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

//アーカイブ一覧URL（blog）
function post_has_archive_blog($args, $post_type){
  if('blogs'== $post_type){
    $args['rewrite']=true;
    $args['has_archive']='blogs'; /* アーカイブにつけるスラッグ名 */
  }
  return $args;
}

add_filter('register_post_type_args', 'post_has_archive_blog', 10, 2);

//アーカイブページ　表示件数変更
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() ) /* メインクエリでの表示数 */
      return;
  if ( $query->is_archive() ) { /* アーカイブページの場合 */
      $query->set( 'posts_per_page', '-1' ); /* 表示件数を指定する。-1で全件表示できる */
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


function jp_date_wp_title( $title, $sep, $seplocation ) {
	if ( is_date() ) {
		$m = get_query_var('m');
		if ( $m ) {
			$year = substr($m, 0, 4);
			$month = intval(substr($m, 4, 2));
			$day = intval(substr($m, 6, 2));
		} else {
			$year = get_query_var('year');
			$month = get_query_var('monthnum');
			$day = get_query_var('day');
		}

		$title = ($seplocation != 'right' ? " $sep " : '') .
		  ($year ? $year . '年' : '') .
			($month ? $month . '月' : '') .
			($day ? $day . '日' : '') .
			($seplocation == 'right' ? " $sep " : '');
	}
	return $title;
}
add_filter( 'wp_title', 'jp_date_wp_title', 10, 3 );

//JSファイル
function inview_scripts_method() {
	wp_enqueue_script(
		'inview_script',
		get_theme_file_uri( '/js/jquery.inview.min.js' ),
    array( 'jquery' ),
		false,
		true,
	);
}
add_action('wp_enqueue_scripts', 'inview_scripts_method');


function remove_width_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html;
}
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
