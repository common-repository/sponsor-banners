<?php 

/**
 * Register Register Projects Post Type
 * @link       http://marcobrughi.com
 * @since      1.0.0
 *
 * @package    Sponsor Banners
 * @subpackage Sponsor/includes
*/

function sponsor_post_type() {

	$labels = array(
		'name'                  => _x( 'Sponsor', 'Post Type General Name', 'sponsorbanners' ),
		'singular_name'         => _x( 'Sponsor', 'Post Type Singular Name', 'sponsorbanners' ),
		'menu_name'             => __( 'Sponsor', 'sponsorbanners' ),
		'name_admin_bar'        => __( 'Sponsor', 'sponsorbanners' ),
		'archives'              => __( 'Archivio Sponsor', 'sponsorbanners' ),
		'parent_item_colon'     => __( 'Superiore:', 'sponsorbanners' ),
		'all_items'             => __( 'Tutti gli Sponsor', 'sponsorbanners' ),
		'add_new_item'          => __( 'Aggiungi nuovo Sponsor', 'sponsorbanners' ),
		'add_new'               => __( 'Aggiungi nuovo', 'sponsorbanners' ),
		'new_item'              => __( 'Nuovo', 'sponsorbanners' ),
		'edit_item'             => __( 'Modifica', 'sponsorbanners' ),
		'update_item'           => __( 'Aggiorna', 'sponsorbanners' ),
		'view_item'             => __( 'Mostra', 'sponsorbanners' ),
		'search_items'          => __( 'Cerca', 'sponsorbanners' ),
		'not_found'             => __( 'Non trovato', 'sponsorbanners' ),
		'not_found_in_trash'    => __( 'Non trovato nel cestino', 'sponsorbanners' ),
		'featured_image'        => __( 'Immagine principale', 'sponsorbanners' ),
		'set_featured_image'    => __( 'Imposta immagine principale', 'sponsorbanners' ),
		'remove_featured_image' => __( 'Rimuovi immagine principale', 'sponsorbanners' ),
		'use_featured_image'    => __( 'Usa come immagine principale', 'sponsorbanners' ),
		'insert_into_item'      => __( 'Inserisci', 'sponsorbanners' ),
		'uploaded_to_this_item' => __( 'Carica', 'sponsorbanners' ),
		'items_list'            => __( 'Lista', 'sponsorbanners' ),
		'items_list_navigation' => __( 'Scorri lista', 'sponsorbanners' ),
		'filter_items_list'     => __( 'Filtra', 'sponsorbanners' ),
	);
	$rewrite = array(
		'slug'                  => 'sponsor',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'sponsor', 'sponsorbanners' ),
		'description'           => __( 'Gestione Sponsor', 'sponsorbanners' ),
		'labels'                => $labels,
		'supports'              => array( 'title', ),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 34,
		'menu_icon'             => 'dashicons-money',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'sponsor', $args );

}
add_action( 'init', 'sponsor_post_type', 0 );

// Register Custom Taxonomy
function categorie_sponsor_tax() {

	$labels = array(
		'name'                       => _x( 'Categorie', 'Taxonomy General Name', 'sponsorbanners' ),
		'singular_name'              => _x( 'Categoria', 'Taxonomy Singular Name', 'sponsorbanners' ),
		'menu_name'                  => __( 'Categorie', 'sponsorbanners' ),
		'all_items'                  => __( 'Tutte le categorie', 'sponsorbanners' ),
		'parent_item'                => __( 'Superiore', 'sponsorbanners' ),
		'parent_item_colon'          => __( 'Superiore:', 'sponsorbanners' ),
		'new_item_name'              => __( 'Nuova', 'sponsorbanners' ),
		'add_new_item'               => __( 'Aggiungi', 'sponsorbanners' ),
		'edit_item'                  => __( 'Modifica', 'sponsorbanners' ),
		'update_item'                => __( 'Aggiorna', 'sponsorbanners' ),
		'view_item'                  => __( 'Mostra', 'sponsorbanners' ),
		'separate_items_with_commas' => __( 'Separa categorie con la virgola', 'sponsorbanners' ),
		'add_or_remove_items'        => __( 'Aggiungi o rimuovi categorie', 'sponsorbanners' ),
		'choose_from_most_used'      => __( 'Scegli fra le più usate', 'sponsorbanners' ),
		'popular_items'              => __( 'Popolari', 'sponsorbanners' ),
		'search_items'               => __( 'Cerca', 'sponsorbanners' ),
		'not_found'                  => __( 'Non trovata', 'sponsorbanners' ),
		'no_terms'                   => __( 'Nessuna categoria', 'sponsorbanners' ),
		'items_list'                 => __( 'Lista', 'sponsorbanners' ),
		'items_list_navigation'      => __( 'Scorri lista', 'sponsorbanners' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'categoriesponsor', array( 'sponsor' ), $args );

}
add_action( 'init', 'categorie_sponsor_tax', 0 );


