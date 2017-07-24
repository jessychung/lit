<?php

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_theme_support( 'menus');

add_theme_support( 'post-thumbnails' );


add_filter( 'show_admin_bar', '__return_false' );


function my_custom_post_product() {

    $args = array(
        'label'        => 'Products',
        'description'   => 'Thentia products',
        'public'        => true,
        'menu_position' => 5,
        'taxonomies'    => array('post_tag'),
        'supports'      => array( 'title', 'editor', 'thumbnail'),
        'has_archive'   => true,
    );
    register_post_type( 'Products', $args );


}
add_action( 'init', 'my_custom_post_product' );
