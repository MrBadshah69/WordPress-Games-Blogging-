<?php
/**
 * Function file for importing demo content using OCDI.
 *
 * @package CodeVibrant
 * @subpackage News Vibrant
 * @since 1.5.0
 */

if ( ! function_exists( 'news_vibrant_demo_import_files' ) ):

	/**
	 * Function to define required files for demo import.
	 */
	function news_vibrant_demo_import_files() {
		return array(
			array(
				'import_file_name'             => __( 'News Vibrant', 'news-vibrant' ),
				'local_import_file'            => 'https://gitlab.com/codevibrant/themes-demo-pack/-/raw/main/news-vibrant/main/news-vibrant.xml',
				'local_import_widget_file'     => 'https://gitlab.com/codevibrant/themes-demo-pack/-/raw/main/news-vibrant/main/news-vibrant-widgets.wie',
				'local_import_customizer_file' => 'https://gitlab.com/codevibrant/themes-demo-pack/-/raw/main/news-vibrant/main/news-vibrant-export.dat',
				'import_preview_image_url'     => 'https://gitlab.com/codevibrant/themes-demo-pack/-/raw/main/news-vibrant/main/screenshot.jpg', 
				'import_notice'          	   => esc_html__( 'After you import this demo, you can customize settings from Appearance >> Customize.', 'news-vibrant' ),
				'preview_url'                  => 'https://demo.codevibrant.com/news-vibrant/',
			),

			array(
				'import_file_name'             => __( 'News Vibrant Pro', 'news-vibrant' ),
				'import_preview_image_url'     => 'https://gitlab.com/codevibrant/themes-demo-pack/-/raw/main/news-vibrant/pro/news-vibrant-pro.jpg',
				'preview_url'                  => 'https://demo.codevibrant.com/news-vibrant-pro/',
			),

			array(
				'import_file_name'             => __( 'News Vibrant Pro Fashion', 'news-vibrant' ),
				'import_preview_image_url'     => 'https://gitlab.com/codevibrant/themes-demo-pack/-/raw/main/news-vibrant/pro/news-vibrant-pro-fashion.jpg',
				'preview_url'                  => 'https://demo.codevibrant.com/news-vibrant-pro-fashion/',
			),

			array(
				'import_file_name'             => __( 'News Vibrant Pro Blog', 'news-vibrant' ),
				'import_preview_image_url'     => 'https://gitlab.com/codevibrant/themes-demo-pack/-/raw/main/news-vibrant/pro/news-vibrant-pro-blog.jpg',
				'preview_url'                  => 'https://demo.codevibrant.com/news-vibrant-pro-blog/',
			)
		);
	}

endif;

add_filter( 'ocdi/import_files', 'news_vibrant_demo_import_files' );

function news_vibrant_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
	$top_menu = get_term_by( 'name', 'Top Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'news_vibrant_primary_menu' => $main_menu->term_id,
			'news_vibrant_top_menu' 	=> $top_menu->term_id, 
			// replace news_vibrant_primary_menu and news_vibrant_top_menu here with the menu location identifier from register_nav_menu() function
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );

}
add_action( 'ocdi/after_import', 'news_vibrant_after_import_setup' );