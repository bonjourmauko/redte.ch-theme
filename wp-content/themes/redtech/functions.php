<?php

/**
 * Theme setup.
 */
function redtech_setup(): void {
	/**
	 * Make theme available for translation.
	 */
	load_theme_textdomain(
		'redtech',
		get_template_directory() . '/languages'
	);

	/**
	 * Add default posts and comments RSS feed links to head.
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * For wp_nav_menu().
	 */
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'redtech' ),
		)
	);

	/**
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
		)
	);

	/**
	 * Set up the WordPress core custom background feature.
	 */
	add_theme_support(
		'custom-background',
		apply_filters(
			'redtech_custom_background_args',
			array(
				'default-color' => 'dfe3e6',
				'default-image' => '',
			)
		)
	);

	/**
	 * Add theme support for selective refresh for widgets.
	 */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
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

	/**
	 * Add support for wide and full width blocks.
	 */
	add_theme_support( 'align-wide' );

	/**
	 * Add support for responsive embeds.
	 */
	add_theme_support( 'wp-block-styles' );

	/**
	 * Add support for editor styles.
	 */
	add_theme_support( 'editor-styles' );

	/**
	 * Enqueue editor styles.
	 */
	add_editor_style( 'assets/css/editor-style.css' );
}

add_action(
	'after_setup_theme',
	'redtech_setup'
);

/**
 * Set the content width in pixels.
 *
 * @global int $content_width
 */
function redtech_content_width(): void {
	$GLOBALS['content_width'] = apply_filters(
		'redtech_content_width',
		640
	);
}

add_action(
	'after_setup_theme',
	'redtech_content_width',
	0
);

/**
 * Register widget area.
 */
function redtech_widgets_init(): void {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'redtech' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'redtech' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'redtech_widgets_init' );

/**
 * Enqueue theme assets.
 */
function redtech_enqueue_scripts(): void {
	$theme = wp_get_theme();

	wp_enqueue_style(
		'redtech',
		redtech_asset( 'assets/css/app.css' ),
		array(),
		$theme->get( 'Version' )
	);

	wp_enqueue_script(
		'redtech',
		redtech_asset( 'assets/js/app.js' ),
		array(),
		$theme->get( 'Version' )
	);
}

add_action(
	'wp_enqueue_scripts',
	'redtech_enqueue_scripts'
);

/**
 * Get asset path.
 *
 * @param string $path Path to asset.
 *
 * @return string
 */
function redtech_asset( string $path ): string {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg(
		'time',
		time(),
		get_stylesheet_directory_uri() . '/' . $path
	);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param array   $classes  String of classes.
 * @param WP_Term $args     Holds the nav menu arguments.
 * @param string  $depth    ?
 *
 * @return array
 */
function redtech_nav_menu_add_li_class(
	array $classes,
	WP_Term $args,
	string $depth
): array {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter(
	'nav_menu_css_class',
	'redtech_nav_menu_add_li_class',
	10,
	4
);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param array   $classes String of classes.
 * @param WP_Term $args    Holds the nav menu arguments.
 * @param string  $depth   ?
 *
 * @return array
 */
function redtech_nav_menu_add_submenu_class(
	array $classes,
	WP_Term $args,
	string $depth
): array {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter(
	'nav_menu_submenu_css_class',
	'redtech_nav_menu_add_submenu_class',
	10,
	3
);

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
 * Customiser additions.
 */
require get_template_directory() . '/inc/customiser/headline.php';
require get_template_directory() . '/inc/customiser/storytelling.php';
require get_template_directory() . '/inc/customiser/benefits.php';
require get_template_directory() . '/inc/customiser/segments.php';
require get_template_directory() . '/inc/customiser/testimonials.php';
require get_template_directory() . '/inc/customiser/team.php';
require get_template_directory() . '/inc/customiser/about.php';