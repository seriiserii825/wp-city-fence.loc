<?php 
add_action( 'init', 'register_slider' );
function register_slider() {

    $labels = array(
        'name'               => __( 'Слайдер', 'text-domain' ),
        'singular_name'      => __( 'Слайд', 'text-domain' ),
        'add_new'            => _x( 'Добавить Слайд', 'text-domain', 'text-domain' ),
        'add_new_item'       => __( 'Добавить Слайд', 'text-domain' ),
        'edit_item'          => __( 'Edit Слайд', 'text-domain' ),
        'new_item'           => __( 'Новый Слайд', 'text-domain' ),
        'view_item'          => __( 'View Слайд', 'text-domain' ),
        'search_items'       => __( 'Search Слайдер', 'text-domain' ),
        'not_found'          => __( 'No Слайдер found', 'text-domain' ),
        'not_found_in_trash' => __( 'No Слайдер found in Trash', 'text-domain' ),
        'parent_item_colon'  => __( 'Parent Слайд:', 'text-domain' ),
        'menu_name'          => __( 'Слайдер', 'text-domain' ),
    );

    $args = array(
        'labels'              => $labels,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'public'              => true,
    );

    register_post_type( 'slider', $args );
}
