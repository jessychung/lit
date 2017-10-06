<?php

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_theme_support( 'menus');

add_theme_support( 'post-thumbnails' );


add_filter( 'show_admin_bar', '__return_false' );


//function my_custom_post_product() {
//
//    $args = array(
//        'label'        => 'News',
//        'description'   => 'CMTBC news',
//        'public'        => true,
//        'menu_position' => 5,
//        'taxonomies'    => array('post_tag'),
//        'supports'      => array( 'title', 'editor', 'thumbnail', 'categories'),
//        'has_archive'   => true,
//    );
//    register_post_type( 'News', $args );
//
//}
//add_action( 'init', 'my_custom_post_product' );

function elementor_accordion_title() { ?>
    <script>
        jQuery(document).ready(function() {
            jQuery( '.elementor-accordion-title' ).removeClass( 'active' );
            jQuery( '.elementor-accordion-content' ).css( 'display', 'none' );
        });
    </script>
<?php }
add_action( 'wp_footer', 'elementor_accordion_title', 99 );

function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Main Header',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');