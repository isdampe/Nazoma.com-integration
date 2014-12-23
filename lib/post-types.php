<?php

function create_post_type() {

  register_post_type( 'amazon_product',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'page-attributes' ),
      'hierarchical' => true
    )
  );

}
add_action( 'init', 'create_post_type' );