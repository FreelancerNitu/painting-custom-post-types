<?php
/*
* Plugin Name: Painting Custom Post Types
* Description: Common custom post for Painting Theme
* Plugin URI: https://www.nitu.com/
* Author: Nitu Barmon
* Author URI: https://nitu121.blogspot.com
* Text Domain: painting
*/
//All Custom Post
function painting_custom_post(){
  register_post_type('service', array(
    'labels' => array(
      'name' => __('Services', 'painting'),
      'singular_name' =>__('Service', 'painting'),
      'add_new' => __('Add New Service', 'painting'),
      'add_new_item' => __('Add New Service', 'painting'),
      'view_item' => __('View Service', 'painting'),
      'edit_item' => __('Edit Service', 'painting'),
      'featured_image' => __('Service Image', 'painting'),
      'set_featured_image' =>__('Set Service Image', 'painting'),
      'search_items' => __('Search Service', 'painting'),
    ),
    'menu_icon' => 'dashicons-open-folder',
    'public' => true,
    'public_queryable' => true,
    'exclude_from_search' => true,
    'has_archive' => true,
    'hierarchial' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slag' => 'service'),
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'excerpt'),
  ));
  // Team Member
  register_post_type('team', array(
    'labels' => array(
      'name' => __('Teams', 'painting'),
      'singular_name' =>__('Team', 'painting'),
      'add_new' => __('Add New Team', 'painting'),
      'add_new_item' => __('Add New Team', 'painting'),
      'view_item' => __('View Team', 'painting'),
      'edit_item' => __('Edit Team', 'painting'),
      'featured_image' => __('Team Image', 'painting'),
      'set_featured_image' =>__('Set Team Image', 'painting'),
      'search_items' => __('Search Team', 'painting'),
    ),
    'menu_icon' => 'dashicons-open-folder',
    'public' => true,
    'public_queryable' => true,
    'exclude_from_search' => true,
    'has_archive' => true,
    'hierarchial' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slag' => 'service'),
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
  ));
  
  // Team Member
  register_post_type('testimonial', array(
    'labels' => array(
      'name' => __('Testimonials', 'painting'),
      'singular_name' =>__('Testimonial', 'painting'),
      'add_new' => __('Add New Testimonial', 'painting'),
      'add_new_item' => __('Add New Testimonial', 'painting'),
      'view_item' => __('View Testimonial', 'painting'),
      'edit_item' => __('Edit Testimonial', 'painting'),
      'featured_image' => __('Testimonial Image', 'painting'),
      'set_featured_image' =>__('Set Testimonial Image', 'painting'),
      'search_items' => __('Search Testimonial', 'painting'),
    ),
    'menu_icon' => 'dashicons-open-folder',
    'public' => true,
    'public_queryable' => true,
    'exclude_from_search' => true,
    'has_archive' => true,
    'hierarchial' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slag' => 'testimonial'),
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
  ));
}
add_action('init', 'painting_custom_post');