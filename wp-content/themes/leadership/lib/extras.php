<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');




function leadership_init_custom_post_type() {
  $labels = array(
    'name'               => _x( 'Services', 'post type general name', 'leadership' ),
    'singular_name'      => _x( 'Service', 'post type singular name', 'leadership' ),
    'menu_name'          => _x( 'Services', 'admin menu', 'leadership' ),
    'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'leadership' ),
    'add_new'            => _x( 'Add New', 'service', 'leadership' ),
    'add_new_item'       => __( 'Add New Service', 'leadership' ),
    'new_item'           => __( 'New Service', 'leadership' ),
    'edit_item'          => __( 'Edit Service', 'leadership' ),
    'view_item'          => __( 'View Service', 'leadership' ),
    'all_items'          => __( 'All Services', 'leadership' ),
    'search_items'       => __( 'Search Services', 'leadership' ),
    'parent_item_colon'  => __( 'Parent Services:', 'leadership' ),
    'not_found'          => __( 'No services found.', 'leadership' ),
    'not_found_in_trash' => __( 'No services found in Trash.', 'leadership' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'leadership' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'service' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'         => 'dashicons-carrot',
    'supports'           => array( 'title', 'editor', 'thumbnail' )
  );

  register_post_type( 'service', $args );



  $labels = array(
    'name'               => _x( 'Case Studies', 'post type general name', 'leadership' ),
    'singular_name'      => _x( 'Case Study', 'post type singular name', 'leadership' ),
    'menu_name'          => _x( 'Case Studies', 'admin menu', 'leadership' ),
    'name_admin_bar'     => _x( 'Case Study', 'add new on admin bar', 'leadership' ),
    'add_new'            => _x( 'Add New', 'case study', 'leadership' ),
    'add_new_item'       => __( 'Add New Case Study', 'leadership' ),
    'new_item'           => __( 'New Case Study', 'leadership' ),
    'edit_item'          => __( 'Edit Case Study', 'leadership' ),
    'view_item'          => __( 'View Case Study', 'leadership' ),
    'all_items'          => __( 'All Case Studies', 'leadership' ),
    'search_items'       => __( 'Search Case Studies', 'leadership' ),
    'parent_item_colon'  => __( 'Parent Case Studies:', 'leadership' ),
    'not_found'          => __( 'No case studies found.', 'leadership' ),
    'not_found_in_trash' => __( 'No case studies found in Trash.', 'leadership' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'leadership' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'case-study' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'         => 'dashicons-portfolio',
    'supports'           => array( 'title', 'thumbnail' )
  );

  register_post_type( 'case-study', $args );


  $labels = array(
        'name'               => _x( 'Teams', 'post type general name', 'leadership' ),
        'singular_name'      => _x( 'Team', 'post type singular name', 'leadership' ),
        'menu_name'          => _x( 'Teams', 'admin menu', 'leadership' ),
        'name_admin_bar'     => _x( 'Team', 'add new on admin bar', 'leadership' ),
        'add_new'            => _x( 'Add New', 'team', 'leadership' ),
        'add_new_item'       => __( 'Add New Team', 'leadership' ),
        'new_item'           => __( 'New Team', 'leadership' ),
        'edit_item'          => __( 'Edit Team', 'leadership' ),
        'view_item'          => __( 'View Team', 'leadership' ),
        'all_items'          => __( 'All Teams', 'leadership' ),
        'search_items'       => __( 'Search Teams', 'leadership' ),
        'parent_item_colon'  => __( 'Parent Teams:', 'leadership' ),
        'not_found'          => __( 'No teams found.', 'leadership' ),
        'not_found_in_trash' => __( 'No teams found in Trash.', 'leadership' )
    );

    $args = array(
        'labels'             => $labels,
                'description'        => __( 'Description.', 'leadership' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'         => 'dashicons-admin-users',
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'team', $args );


    $labels = array(
        'name'              => _x( 'Specialities', 'taxonomy general name' ),
        'singular_name'     => _x( 'Speciality', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Specialities' ),
        'all_items'         => __( 'All Specialities' ),
        'parent_item'       => __( 'Parent Speciality' ),
        'parent_item_colon' => __( 'Parent Speciality:' ),
        'edit_item'         => __( 'Edit Speciality' ),
        'update_item'       => __( 'Update Speciality' ),
        'add_new_item'      => __( 'Add New Speciality' ),
        'new_item_name'     => __( 'New Speciality Name' ),
        'menu_name'         => __( 'Specialities' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'speciality' ),
    );

    register_taxonomy( 'speciality', array( 'team' ), $args );
  
}
add_action('init', __NAMESPACE__ . '\\leadership_init_custom_post_type');

