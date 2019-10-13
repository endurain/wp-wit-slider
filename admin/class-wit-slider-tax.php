<?php
/**
 * The admin-specific functionality for creating a custom taxonomy.
 *
 * @link       https://github.com/endurain
 * @since      1.0.0
 *
 * @package    Wit_Slider
 * @subpackage Wit_Slider/admin
 */
/**
 * The admin-specific functionality for creating a custom taxonomy.
 *
 * Defines all the functions needed to register and manage a custom taxonomy.
 *
 * @package    Wit_Slider
 * @subpackage Wit_Slider/admin
 * @author     Zac Sanders <zacharyjsanders@gmail.com>
 */
class Wit_Slider_TAX {
    /**
     * Registers a new taxonomy for a custom post type.
     *
     * @since  1.0.0
     * @access public
     * @uses   register_taxonomy()
     */
    public static function new_tax_slider() {
        $tax_name = 'wtsl_slider';
        $labels = array(
            'name'              => esc_html_x( 'Sliders', 'taxonomy general name', 'wit-slider' ),
            'singular_name'     => esc_html_x( 'Slider', 'taxonomy singular name', 'wit-slider' ),
            'search_items'      => esc_html__( 'Search Sliders', 'wit-slider' ),
            'all_items'         => esc_html__( 'All Sliders', 'wit-slider' ),
            'parent_item'       => esc_html__( 'Parent Slider', 'wit-slider' ),
            'parent_item_colon' => esc_html__( 'Parent Slider:', 'wit-slider' ),
            'edit_item'         => esc_html__( 'Edit Slider', 'wit-slider' ),
            'update_item'       => esc_html__( 'Update Slider', 'wit-slider' ),
            'add_new_item'      => esc_html__( 'Add New Slider', 'wit-slider' ),
            'new_item_name'     => esc_html__( 'New Slider Name', 'wit-slider' ),
            'menu_name'         => esc_html__( 'Sliders', 'wit-slider' ),
        );
        $args = array(
            'labels'             => $labels,
            'description'        => esc_html__( 'Group multiple slides into a slider', 'wit-slider' ),
            'hierarchical'       => true,
            'public'             => true,
            'publicly_queryable' => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => false,
            'show_in_rest'       => true,
            'show_tagcloud'      => false,
            'show_in_quick_edit' => true,
            'show_admin_column'  => true,
        );
        $args = apply_filters( 'wit_slider_taxonomy_options', $args );

        register_taxonomy( $tax_name, array( 'wtsl_slide' ), $args );
    }
}
