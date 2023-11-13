<?php
// function theme_styles() {
//     add_editor_style('style.css');
// }

// add_action('after_setup_theme', 'theme_styles');

function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js' );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function external_webs() {
	$labels = array(
        'name'                => _x( 'Webs externas', 'Post Type General Name', 'excelia' ),
        'singular_name'       => _x( 'Web externa', 'Post Type Singular Name', 'excelia' ),
        'menu_name'           => __( 'Webs externas', 'excelia' ),
        'parent_item_colon'   => __( 'Parent Movie', 'excelia' ),
        'all_items'           => __( 'Todas las webs', 'excelia' ),
        'view_item'           => __( 'Ver web', 'excelia' ),
        'add_new_item'        => __( 'Añadir nueva web', 'excelia' ),
        'add_new'             => __( 'Añadir', 'excelia' ),
        'edit_item'           => __( 'Editar web', 'excelia' ),
        'update_item'         => __( 'Actualizar web', 'excelia' ),
        'search_items'        => __( 'Buscar web', 'excelia' ),
        'not_found'           => __( 'No encontrado!', 'excelia' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'excelia' ),
    );

    $args = array(
        'label'               => __( 'Webs', 'excelia' ),
        'description'         => __( 'Webs externas', 'excelia' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'generos' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
	register_post_type('external_webs', $args);
}
add_action('init', 'external_webs');

/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
    register_taxonomy('categorías', 'page', array(
      'hierarchical' => true,
      'labels' => array(
        'name' => _x( 'Categorías', 'taxonomy general name' ),
        'singular_name' => _x( 'Categoría', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar Categorías' ),
        'all_items' => __( 'Todas las Categorías' ),
        'parent_item' => __( 'Parent Categoría' ),
        'parent_item_colon' => __( 'Parent Categoría:' ),
        'edit_item' => __( 'Editar Categoría' ),
        'update_item' => __( 'Actualizar Categoría' ),
        'add_new_item' => __( 'Añadir nueva Categoría' ),
        'new_item_name' => __( 'Nueva Categoría' ),
        'menu_name' => __( 'Categorías' ),
      ),
      'rewrite' => array(
        'slug' => 'Categorias',
        'with_front' => false,
        'hierarchical' => true
      ),
    ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );

