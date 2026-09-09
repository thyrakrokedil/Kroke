<?php


//Abspath 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//Registrerar taxonomin
add_action( 'init', 'thyra_reg_taxonomy' );
function thyra_reg_taxonomy() {
    $args = array(
        'labels' => array(
            'name'                  => 'Supportkategorier',
            'singular_name'         => 'Supportkategori',
            'menu_name'             => 'Kategorier',
            'add_new'               => 'Lägg till nytt',
            'add_new_item'          => 'Lägg till ny kategori',
            'new_item'              => 'Nytt kategorinamn',
            'edit_item'             => 'Redigera kategori',
            'view_item'             => 'Visa kategori',
            'all_items'             => 'Alla kategorier',
            'search_items'          => 'Sök kategorier',
            'not_found'             => 'Inga kategorier hittades',
            'filter_by_item'        => 'Filtrera efter kategori',
            'set_featured_image'    => 'Välj omslagsbild',

        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => array( 'slug' => 'supportkategori' ),
    );
   register_taxonomy( 'thyra_supportkategori', 'thyra_supportarende', $args );


}



add_action( 'init', 'test_reg_taxonomy' );
function test_reg_taxonomy() {
    $args = array(
        'labels' => array(
            'name'                  => 'Svårighetsgrad',
            'singular_name'         => 'Svårighetsgrad',
            'menu_name'             => 'Svårighetsgrad',
            'all_items'             => 'Svårighetsgrad',
            'add_new_item'          => 'Svårighetsgrad',
            'new_item_name'         => 'Nytt kategorinamn',
            'edit_item'             => 'Redigera kategori',
            'view_item'             => 'Visa kategori',
            'update_item'           => 'Uppdatera kategori',
            'search_items'          => 'Sök kategorier',
            'not_found'             => 'Inga kategorier hittades',
            'filter_by_item'        => 'Filtrera efter kategori',
            'items_list'            => 'Lista över kategorier',
            'most_used'             => 'Mest använda',

        ),
        'hierarchical'      => false,
        'public'            => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => array( 'slug' => 'test' ),
    );
   register_taxonomy( 'thyra_test', 'thyra_supportarende', $args );


}


?>