<?php



function fwd_register_custom_post_types() {

    
    // Register Staff
    $labels = array(
        'name'                  => _x( 'Staff', 'post type general name' ),
        'singular_name'         => _x( 'Staff', 'post type singular name'),
        'menu_name'             => _x( 'Staff', 'admin menu' ),
        'name_admin_bar'        => _x( 'Staff', 'add new on admin bar' ),
        'add_new'               => _x( 'Add New', 'Staff' ),
        'add_new_item'          => __( 'Add New Staff' ),
        'new_item'              => __( 'New Staff' ),
        'edit_item'             => __( 'Edit Staff' ),
        'view_item'             => __( 'View Staff' ),
        'all_items'             => __( 'All Staff' ),
        'search_items'          => __( 'Search Staff' ),
        'parent_item_colon'     => __( 'Parent Staff:' ),
        'not_found'             => __( 'No Staff found.' ),
        'not_found_in_trash'    => __( 'No Staff found in Trash.' ),
        'archives'              => __( 'Staff'),
        'insert_into_item'      => __( 'Insert into Staff'),
        'uploaded_to_this_item' => __( 'Uploaded to this Staff'),
        'filter_item_list'      => __( 'Filter Staff list'),
        'items_list_navigation' => __( 'Staff list navigation'),
        'items_list'            => __( 'Staff list'),
        'featured_image'        => __( 'Staff featured image'),
        'set_featured_image'    => __( 'Set Staff featured image'),
        'remove_featured_image' => __( 'Remove Staff featured image'),
        'use_featured_image'    => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Staff' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title' ),
    );

    register_post_type( 'fwd-staff', $args );


    // register Students
     $labels = array(
        'name'                  => _x( 'Students', 'post type general name' ),
        'singular_name'         => _x( 'Students', 'post type singular name'),
        'menu_name'             => _x( 'Students', 'admin menu' ),
        'name_admin_bar'        => _x( 'Students', 'add new on admin bar' ),
        'add_new'               => _x( 'Add New', 'Students' ),
        'add_new_item'          => __( 'Add New Students' ),
        'new_item'              => __( 'New Students' ),
        'edit_item'             => __( 'Edit Students' ),
        'view_item'             => __( 'View Students' ),
        'all_items'             => __( 'All Students' ),
        'search_items'          => __( 'Search Students' ),
        'parent_item_colon'     => __( 'Parent Students:' ),
        'not_found'             => __( 'No Students found.' ),
        'not_found_in_trash'    => __( 'No Students found in Trash.' ),
        'archives'              => __( 'Students'),
        'insert_into_item'      => __( 'Insert into Students'),
        'uploaded_to_this_item' => __( 'Uploaded to this Students'),
        'filter_item_list'      => __( 'Filter Students list'),
        'items_list_navigation' => __( 'Students list navigation'),
        'items_list'            => __( 'Students list'),
        'featured_image'        => __( 'Students featured image'),
        'set_featured_image'    => __( 'Set Students featured image'),
        'remove_featured_image' => __( 'Remove Students featured image'),
        'use_featured_image'    => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Students' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array( 'title', 'thumbnail', 'editor' ),
        'template'           => array( array( 'core/paragraph' ),array('core/button') ),
        'template_lock'      => 'all',
    );

    register_post_type( 'fwd-students', $args );




}
add_action( 'init', 'fwd_register_custom_post_types' );

function fwd_register_taxonomies(){
   
        // Add Staff Category taxonomy
        $labels = array(
            'name'              => _x( 'Staff Categories', 'taxonomy general name' ),
            'singular_name'     => _x( 'Staff Category', 'taxonomy singular name' ),
            'search_items'      => __( 'Search Staff Categories' ),
            'all_items'         => __( 'All Staff Category' ),
            'parent_item'       => __( 'Parent Staff Category' ),
            'parent_item_colon' => __( 'Parent Staff Category:' ),
            'edit_item'         => __( 'Edit Staff Category' ),
            'view_item'         => __( 'Vview Staff Category' ),
            'update_item'       => __( 'Update Staff Category' ),
            'add_new_item'      => __( 'Add New Staff Category' ),
            'new_item_name'     => __( 'New Staff Category Name' ),
            'menu_name'         => __( 'Staff Category' ),
            
        );
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_in_menu'      => true,
            'show_in_nav_menu'  => true,
            'show_in_rest'      => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'Staff-categories' ),
        );
        register_taxonomy( 'fwd-Staff-category', array('fwd-staff'), $args );



         // Add Students Category taxonomy
         $labels = array(
            'name'              => _x( 'Student Categories', 'taxonomy general name' ),
            'singular_name'     => _x( 'Student Category', 'taxonomy singular name' ),
            'search_items'      => __( 'Search Student Categories' ),
            'all_items'         => __( 'All Student Category' ),
            'parent_item'       => __( 'Parent Student Category' ),
            'parent_item_colon' => __( 'Parent Student Category:' ),
            'edit_item'         => __( 'Edit Student Category' ),
            'view_item'         => __( 'Vview Student Category' ),
            'update_item'       => __( 'Update Student Category' ),
            'add_new_item'      => __( 'Add New Student Category' ),
            'new_item_name'     => __( 'New Student Category Name' ),
            'menu_name'         => __( 'Student Category' ),
            
        );
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_in_menu'      => true,
            'show_in_nav_menu'  => true,
            'show_in_rest'      => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'Student-categories' ),
        );
        register_taxonomy( 'fwd-Student-category', array('fwd-students'), $args );
}

add_action( 'init', 'fwd_register_taxonomies');


function fwd_rewrite_flush() {
    fwd_register_custom_post_types();
    fwd_register_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'fwd_rewrite_flush' );

