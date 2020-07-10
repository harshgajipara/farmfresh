<?php

function load_features(){

wp_enqueue_style('bootstrap',get_theme_file_uri('css/bootstrap.min.css'));
wp_enqueue_style('font-awesome',get_theme_file_uri('css/font-awesome.css'));
wp_enqueue_style('custom-fonts',get_theme_file_uri('css/custom-fonts.css'));
wp_enqueue_style('style',get_theme_file_uri('css/style.css'));
wp_enqueue_style('responsive',get_theme_file_uri('css/responsive.css'));

wp_enqueue_script('jquery',get_theme_file_uri('js/jquery.js'));
wp_enqueue_script('bootstrap',get_theme_file_uri('js/bootstrap.min.js'));

}

add_action('wp_enqueue_scripts','load_features');

add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');

function features(){
	register_nav_menu('headerMenuLocation','Header Menu Loacation');
}

add_action('after_setup_theme','features');


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
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
	
}

function registered_dietician(){

register_post_type('register_dietician', array(
		'supports'=>array('title','editor','thumbnail'),
		'public'=>true,
		'labels'=>array(
			'name'=>'Dietician',
			'add_new_item'=>'Add New Dietician',
			'edit_item'=>'Edit Dietician',
			'all_items'=>'All Dieticians',
			'singular_name'=>'Dietician'
		),
		'menu_icon'=>'dashicons-buddicons-buddypress-logo'
	));

}

add_action('init', 'registered_dietician');

function ourWidgetInit(){

	register_sidebar(array(
		'name'=>'Sidebar',
		'id'=>'sidebar1',
	));
}

add_action('widget_init','ourWidgetInit');


function create_taxonomy(){

	$labels = array(
		'name' => _x('Recipes','taxonomy general name'),
		'singular_name' => _x('Recipe','taxonomy singular name'),
		'search_items' => __('Search Reecipes'),
		'parent_item' => __('Parent Recipe'),
		'parent_item_colon' => __('Parent Recipe:'),
		'edit_item' => __('Edit Recipe'),
		'update_item' => __('Update Recipe'),
		'add_new_item' => __('Add new Recipe'),
		'new_item_name' => __('New Recipe name'),
		'menu_name' => __('Recipe'),
 		);

	register_taxonomy('recipes',array('post'),array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'Recipe'),
	));
}

add_action('init', 'create_taxonomy');

function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}