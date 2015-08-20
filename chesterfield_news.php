<?php defined( 'ABSPATH' ) or die( 'No longer allowed at the Chesterfield' );
/**
 * @package chesterfield_news
 */

/*
Plugin Name: Chesterfield News
Description: Display news items
Version: 0.0.1
Author: Zach Metcalf
License: GPLv2 or later
*/

/*  Copyright 2015 Zach Metcalf

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action( 'init', 'add_news_type' );

function add_news_type() {
  $slug = 'news';
  $slug = apply_filters( 'cf_news_type_slug', $slug );

  register_post_type( 'chesterfield_news',
    array(
      'labels' => array(
        'name' => __( 'News' ),
        'singular_name' => __( 'News Item' )
      ),
      'rewrite' => array(
        'slug' => $slug
      ),
      'show_in_nav_menus' => false,
      'show_ui' => true,
      'exclude_from_search' => true,
      'publicly_queryable' => false,

      'supports' => array( 'editor', 'revisions' )
    )
  );
}
