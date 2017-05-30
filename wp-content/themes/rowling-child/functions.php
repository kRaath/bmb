<?php
add_action( 'pre_get_posts', 'add_melted_proposal_to_home' );

function add_melted_proposal_to_home( $query ) {

    if( $query->is_main_query() && $query->is_home() ) {
        $query->set( 'post_type', array( 'post', 'proposal') );
    }
}
?>