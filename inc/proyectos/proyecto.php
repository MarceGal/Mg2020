<?php 

// Referencias
// https://www.wpbeginner.com/wp-tutorials/how-to-create-custom-post-types-in-wordpress/
// https://www.proteusthemes.com/blog/create-a-custom-taxonomy/

function mg_crear_post_tipo_proyecto() {
    
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Proyectos', 'Post Type General Name', 'Mg2020' ),
        'singular_name'       => _x( 'Proyecto', 'Post Type Singular Name', 'Mg2020' ),
        'menu_name'           => __( 'Proyectos', 'Mg2020' ),
        'parent_item_colon'   => __( 'Padre', 'Mg2020' ),
        'all_items'           => __( 'Todos', 'Mg2020' ),
        'view_item'           => __( 'Ver', 'Mg2020' ),
        'add_new_item'        => __( 'Crear proyecto', 'Mg2020' ),
        'add_new'             => __( 'Crear', 'Mg2020' ),
        'edit_item'           => __( 'Editar', 'Mg2020' ),
        'update_item'         => __( 'Actualizar', 'Mg2020' ),
        'search_items'        => __( 'Buscar', 'Mg2020' ),
        'not_found'           => __( 'No se encontró ningún proyecto', 'Mg2020' ),
        'not_found_in_trash'  => __( 'No se encontró ningún proyecto', 'Mg2020' ),
    );
     
    
    $args = array(
        
        'labels' => array(
            'name' => __( 'Proyectos' , 'Mg2020' ),
            'singular_name' => __( 'Proyecto' , 'Mg2020'  )
        ),
        
        'description'         => __( 'Mis proyectos', 'Mg2020' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'tipo' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
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
        'rewrite' => array('slug' => 'proyectos'),
        'show_in_rest' => true,
 
    );

    register_post_type( 'proyectos', $args );
}

// Register Custom Taxonomy

function mg_crear_post_tipo_proyecto_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Categoría', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Categoría', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Categorías', 'text_domain' ),
		'all_items'                  => __( 'Todos', 'text_domain' ),
		'parent_item'                => __( 'Padre', 'text_domain' ),
		'parent_item_colon'          => __( 'Padre:', 'text_domain' ),
		'new_item_name'              => __( 'Nuevo', 'text_domain' ),
		'add_new_item'               => __( 'Crear', 'text_domain' ),
		'edit_item'                  => __( 'Editar', 'text_domain' ),
		'update_item'                => __( 'Actualizar', 'text_domain' ),
		'view_item'                  => __( 'Ver', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separar con comas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Agregar o quitar', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Populares', 'text_domain' ),
		'search_items'               => __( 'Buscar', 'text_domain' ),
		'not_found'                  => __( 'No se encontraron elementos', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_in_rest'         		 => true,
		'show_tagcloud'              => false,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'type' ),
	);

	register_taxonomy( 'proyectos_categories', array( 'proyectos' ), $args );

}

/*
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() ){
        $query->set( 'post_type', array( 'post', 'proyectos' ) );
    }
    return $query;
}
*/

//add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

add_action( 'init', 'mg_crear_post_tipo_proyecto' );
add_action( 'init', 'mg_crear_post_tipo_proyecto_taxonomy', 0 );




?>