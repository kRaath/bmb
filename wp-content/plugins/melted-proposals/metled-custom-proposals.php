<?php
/**
*Plugin Name: Melted Proposals
*Version: 1.0
*Plugin URI: http://www.meltedmoon.com
*Description: This plugin will add new custom post type PROPOSAL.
*Author: Muhammad Tajammul Hussain
*Author URI: http://www.meltedmoon.com
**/
function create_melted_proposals() {
	$labels = array (
		'name' => __( 'Proposals' , 'MeltedMoon'),
        'singular_name' => __( 'Proposal' , 'MeltedMoon'),
        'edit_item' => __( 'Edit Proposal' , 'MeltedMoon'),
        'add_new_item' => __( 'Add Proposal' , 'MeltedMoon'),
        'view_item' => __( 'View Proposal' , 'MeltedMoon'),
        'search_item' => __( 'Search Proposals' , 'MeltedMoon'),
        'not_found' => __( 'No Proposal Found' , 'MeltedMoon'),
        'not_found_in_trash' => __( 'No Proposal Found in Trash' , 'MeltedMoon'),
	);
	$args = array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'hirarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'custom-fields',
			'page-attributes'
		),
		'menu_position' => 5
	);
	register_post_type( 'proposal', $args );
}
add_action( 'init', 'create_melted_proposals' );
function create_melted_proposal_taxonomies(){
	$labels = array (
		'name' => __( 'Tags' , 'MeltedMoon'),
        'singular_name' => __( 'Tag' , 'MeltedMoon'),
        'search_items' => __( 'Search Tags' , 'MeltedMoon'),
        'all_item' => __( 'All Tag' , 'MeltedMoon'),
        'edit_item' => __( 'Edit Tag' , 'MeltedMoon'),
        'update_item' => __( 'Update Tag' , 'MeltedMoon'),
        'add_new_item' => __( 'Add New Tag' , 'MeltedMoon'),
        'new_item_name' => __( 'New Tag Title' , 'MeltedMoon'),
        'menu_name' => __( 'Tags' , 'MeltedMoon'),
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'hirarchical' => false,
		'rewrite' => array(
			'slug' => 'tags',
		),
	);
	register_taxonomy( 'proposal_tag', 'proposal', $args );
}
add_action( 'init', 'create_melted_proposal_taxonomies' );
add_action('admin_menu','remove_default_post_type');
function remove_default_post_type() {
	remove_menu_page('edit.php');
}
function hook_css() {
	$post_terms = get_the_terms('','proposal_tag','','');
	$all_terms = "";
	$page_object = get_post( $page_id );
	if(count($post_terms)){
		for($i=0; $i<count($post_terms); $i++){
			$term = $post_terms[$i];
			$all_terms .= $term->slug . ',';
		}
	}
	$description = substr($page_object->post_content,0,169);
	$description = $description .' '. substr($page_object->post_title,0,(170 - strlen($description)))
    ?>
	<meta name="keywords" content="<?=$all_terms?>">
	<meta name="description" content="<?=$description?>">
    <?php
}
add_action('wp_head', 'hook_css');
?>