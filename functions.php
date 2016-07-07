<?php

//This will generate individual menu items as stand-alone links

add_filter( 'wp_nav_menu_objects', 'submenu_limit', 10, 2 );

function submenu_limit( $items, $args ) {

	if ( empty($args->menu_item_start) )
		return $items;
	
	$parent_ids = wp_filter_object_list( $items, array( 'menu_item_parent' => 0 ), 'and', 'ID' );
	
	if( !empty( $parent_ids ) ){
	
		$menu_item_end = ( isset( $args->menu_item_end ) ) ? (int) $args->menu_item_end : count( $parent_ids );
		$total = ($menu_item_end) - ((int) $args->menu_item_start);
		$range_parent_ids = array_slice( (array) $parent_ids, ($args->menu_item_start)-1, $total+1, true );
		
		if( !empty( $range_parent_ids ) ) {
			$return_items = array();
			foreach ( $range_parent_ids as $parent_id ) {
				
				$return_items[] = $parent_id;
				$children = submenu_get_children_ids( $parent_id, $items );
				
				if( !empty($children) ) {
					$return_items = array_merge( $return_items, $children ); 
				}
				
			}
			
			foreach( $items as $key => $item ){
				if( !in_array( $item->ID, $return_items ) ){
					unset( $items[$key] );
				} 
			}
			
		} // if !empty($range_parent_ids)
	} // if !empty($parent_ids)
	
	return $items;
}

function submenu_get_children_ids( $id, $items ) {
	
	$ids = wp_filter_object_list( $items, array( 'menu_item_parent' => $id ), 'and', 'ID' );
	foreach ( $ids as $id ) {
		$ids = array_merge( $ids, submenu_get_children_ids( $id, $items ) );
	}
	
	return $ids;
}

//
//This functions file loads before the queers get built 

function queer_script_enqueue() {
    // wp_enqueue_style( 'bootstrapstijl', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '3.3.6', 'all' );
    wp_enqueue_style( 'defaultstyle', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
    // wp_enqueue_script( 'mijnscript', get_template_directory_uri() . '/assets/js//queer.js', array(), '1.0.0', true );
    // wp_enqueue_style( 'queerstyle', get_template_directory_uri() . '/assets/css/queer.css', array(), '1.0.0', 'all' );
    }
//make a hook by enqueueing the function as a string

add_action( 'wp_enqueue_scripts', 'queer_script_enqueue');

//
//This will generate the possibility to make multiple navigation menus

function queer_theme_setup() {
	add_theme_support('menus');

	register_nav_menu('daddymenu', 'Primary queer header navigation');
	register_nav_menu('boymenu', 'Secondary queer footy navigation');
}

add_action('init', 'queer_theme_setup');

?>