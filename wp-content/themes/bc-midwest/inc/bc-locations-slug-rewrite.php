<?php

register_post_type( 'bc_locations',
    array(
        'rewrite' => false
    )
);

function bc_locations_rewrites() {
    add_rewrite_rule( '[^/]+/attachment/([^/]+)/?$', 'index.php?attachment=$matches[1]', 'bottom');
    add_rewrite_rule( '[^/]+/attachment/([^/]+)/trackback/?$', 'index.php?attachment=$matches[1]&tb=1', 'bottom');
    add_rewrite_rule( '[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$', 'index.php?attachment=$matches[1]&feed=$matches[2]', 'bottom');
    add_rewrite_rule( '[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$', 'index.php?attachment=$matches[1]&feed=$matches[2]', 'bottom');
    add_rewrite_rule( '[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$', 'index.php?attachment=$matches[1]&cpage=$matches[2]', 'bottom');
    add_rewrite_rule( '[^/]+/attachment/([^/]+)/embed/?$', 'index.php?attachment=$matches[1]&embed=true', 'bottom');
    add_rewrite_rule( '([^/]+)/embed/?$', 'index.php?bc_locations=$matches[1]&embed=true', 'bottom');
    add_rewrite_rule( '([^/]+)/trackback/?$', 'index.php?bc_locations=$matches[1]&tb=1', 'bottom');
    add_rewrite_rule( '([^/]+)/page/?([0-9]{1,})/?$', 'index.php?bc_locations=$matches[1]&paged=$matches[2]', 'bottom');
    add_rewrite_rule( '([^/]+)/comment-page-([0-9]{1,})/?$', 'index.php?bc_locations=$matches[1]&cpage=$matches[2]', 'bottom');
    add_rewrite_rule( '([^/]+)(?:/([0-9]+))?/?$', 'index.php?bc_locations=$matches[1]', 'bottom');
    add_rewrite_rule( '[^/]+/([^/]+)/?$', 'index.php?attachment=$matches[1]', 'bottom');
    add_rewrite_rule( '[^/]+/([^/]+)/trackback/?$', 'index.php?attachment=$matches[1]&tb=1', 'bottom');
    add_rewrite_rule( '[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$', 'index.php?attachment=$matches[1]&feed=$matches[2]', 'bottom');
    add_rewrite_rule( '[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$', 'index.php?attachment=$matches[1]&feed=$matches[2]', 'bottom');
    add_rewrite_rule( '[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$', 'index.php?attachment=$matches[1]&cpage=$matches[2]', 'bottom');
    add_rewrite_rule( '[^/]+/([^/]+)/embed/?$', 'index.php?attachment=$matches[1]&embed=true', 'bottom');
    //Adding rewrite rules for new categories.
    $locationCategories = get_terms( array(
                                        'taxonomy' => 'bc_location_category',
                                        'hide_empty' => false,
                                    ) );
    foreach($locationCategories as $locationCategory){
        add_rewrite_rule( $locationCategory->slug.'/([^/]+)/?$', 'index.php?post_type=bc_locations&name=$matches[1]', 'top');
    }

//     resources/' . $term->slug . '/([^/]*)$'] = 'index.php?post_type=' . $post_type. '&resources_post_type
// =$matches[1]&name=$matches[1]';
}
add_action( 'init', 'bc_locations_rewrites' );

function bc_locations_permalinks( $post_link, $post, $leavename ) {
    if ( isset( $post->post_type ) && 'bc_locations' == $post->post_type ) {
        $post_link = home_url( $post->post_name );
    }
    //prepend category slug if post has a category
    $categories = get_the_terms($post, 'bc_location_category');
    if(!empty($categories)){
        $post_link = home_url( $categories[0]->slug.'/'.$post->post_name ); 
    }

    return $post_link;
}
add_filter( 'post_type_link', 'bc_locations_permalinks', 10, 3 );

function prevent_slug_duplicates( $slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug ) {
    $check_post_types = array(
        'post',
        'page',
        'bc_locations'
    );

    if ( ! in_array( $post_type, $check_post_types ) ) {
        return $slug;
    }

    if ( 'bc_locations' == $post_type ) {
        // Saving a bc_locations post, check for duplicates in POST or PAGE post types
        $post_match = get_page_by_path( $slug, 'OBJECT', 'post' );
        $page_match = get_page_by_path( $slug, 'OBJECT', 'page' );

        if ( $post_match || $page_match ) {
            $slug .= '-duplicate';
        }
    } else {
        // Saving a POST or PAGE, check for duplicates in bc_locations post type
        $bc_locations_match = get_page_by_path( $slug, 'OBJECT', 'bc_locations' );

        if ( $bc_locations_match ) {
            $slug .= '-duplicate';
        }
    }

    return $slug;
}
add_filter( 'wp_unique_post_slug', 'prevent_slug_duplicates', 10, 6 );

?>
