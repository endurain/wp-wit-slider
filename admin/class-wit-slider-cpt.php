<?php
/**
 * The admin-specific functionality for creating a custom post type.
 *
 * @link       https://github.com/endurain
 * @since      1.0.0
 *
 * @package    Wit_Slider
 * @subpackage Wit_Slider/admin
 */
/**
 * The admin-specific functionality for creating a custom post type.
 *
 * Defines all the functionality related to creating and managing a custom post type.
 *
 * @package    Wit_Slider
 * @subpackage Wit_Slider/admin
 * @author     Zac Sanders <zacharyjsanders@gmail.com>
 */
class Wit_Slider_CPT {
    /**
     * Creates a new custom post type
     *
     * @since 1.0.0
     * @access public
     * @uses register_post_type()
     */
    public static function new_cpt_slide() {
        $cap_type = 'post';
        $cpt_name = 'wtsl_slide';
        $labels = array(
            'name'                  => esc_html_x( 'Slides', 'Post Type General Name', 'wit-slider' ),
            'singular_name'         => esc_html_x( 'Slide', 'Post Type Singular Name', 'wit-slider' ),
            'menu_name'             => esc_html__( 'Slides', 'wit-slider' ),
            'name_admin_bar'        => esc_html__( 'Slide', 'wit-slider' ),
            'archives'              => esc_html__( 'Slide Archives', 'wit-slider' ),
            'attributes'            => esc_html__( 'Slide Attributes', 'wit-slider' ),
            'parent_item_colon'     => esc_html__( 'Parent Slide:', 'wit-slider' ),
            'all_items'             => esc_html__( 'All Slides', 'wit-slider' ),
            'add_new_item'          => esc_html__( 'Add New Slide', 'wit-slider' ),
            'add_new'               => esc_html__( 'Add New', 'wit-slider' ),
            'new_item'              => esc_html__( 'New Slide', 'wit-slider' ),
            'edit_item'             => esc_html__( 'Edit Slide', 'wit-slider' ),
            'update_item'           => esc_html__( 'Update Slide', 'wit-slider' ),
            'view_item'             => esc_html__( 'View Slide', 'wit-slider' ),
            'view_items'            => esc_html__( 'View Slides', 'wit-slider' ),
            'search_items'          => esc_html__( 'Search Slide', 'wit-slider' ),
            'not_found'             => esc_html__( 'Not found', 'wit-slider' ),
            'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'wit-slider' ),
            'featured_image'        => esc_html__( 'Featured Image', 'wit-slider' ),
            'set_featured_image'    => esc_html__( 'Set featured image', 'wit-slider' ),
            'remove_featured_image' => esc_html__( 'Remove featured image', 'wit-slider' ),
            'use_featured_image'    => esc_html__( 'Use as featured image', 'wit-slider' ),
            'insert_into_item'      => esc_html__( 'Insert into Slide', 'wit-slider' ),
            'uploaded_to_this_item' => esc_html__( 'Uploaded to this Slide', 'wit-slider' ),
            'items_list'            => esc_html__( 'Slides list', 'wit-slider' ),
            'items_list_navigation' => esc_html__( 'Slides list navigation', 'wit-slider' ),
            'filter_items_list'     => esc_html__( 'Filter Slides list', 'wit-slider' ),
        );
        $args = array(
            'label'               => esc_html__( 'Slide', 'wit-slider' ),
            'description'         => esc_html__( 'A content type for creating image slides', 'wit-slider' ),
            'labels'              => $labels,
            'menu_icon'           => 'dashicons-welcome-view-site',
            'supports'            => array( 'title', 'thumbnail', 'revisions' ),
            'taxonomies'          => array( 'wtsl_slider' ),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => false,
            'can_export'          => true,
            'has_archive'         => false,
            'hierarchical'        => false,
            'exclude_from_search' => true,
            'show_in_rest'        => true,
            'publicly_queryable'  => false,
            'capability_type'     => $cap_type,
        );
        $args = apply_filters( 'monospace_slides_cpt_options', $args );
        register_post_type( strtolower( $cpt_name ), $args );
    }
}
