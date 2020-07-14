<?php
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
add_action( 'init', 'bc_projects_post_type', 0 );

/* Creating a function to create our CPT */
function bc_projects_post_type() {
// Set UI labels for Service Custom Post Type
    $labels = array(
        'name'                => _x( 'Projects', 'Post Type General Name', 'bc-midwest' ),
        'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'bc-midwest' ),
        'menu_name'           => __( 'Projects', 'bc-midwest' ),
        'parent_item_colon'   => __( 'Parent Project', 'bc-midwest' ),
        'all_items'           => __( 'All Projects', 'bc-midwest' ),
        'view_item'           => __( 'View Project', 'bc-midwest' ),
        'add_new_item'        => __( 'Add New Project', 'bc-midwest' ),
        'add_new'             => __( 'Add New', 'bc-midwest' ),
        'edit_item'           => __( 'Edit Project', 'bc-midwest' ),
        'update_item'         => __( 'Update Project', 'bc-midwest' ),
        'search_items'        => __( 'Search Project', 'bc-midwest' ),
        'not_found'           => __( 'Not Found', 'bc-midwest' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'bc-midwest' ),
    );
// Set other options for Project Custom Post Type
    $args = array(
        'label'               => __( 'projects', 'bc-midwest' ),
        'description'         => __( 'Service reviews', 'bc-midwest' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
        'taxonomies'          => array( 'genres' ),
        'rewrite' => array( 'has_front' => false ,'slug' => 'projects'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => true,
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
        'capability_type'     => 'page',
    );
    // Registering your Custom Post Type
    register_post_type( 'bc_projects', $args );
}
