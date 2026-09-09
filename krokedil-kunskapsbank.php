<?php

/*
 * Plugin Name: Krokedils kunskapsbank
 * Description: En plugin där vanliga supportärenden och deras lösningar finns
 * Version: 1.0.0
 * Author: Thyra Nyström
 * Text Domain: krokedil-kunskapsbank
 * Requires at least: 7
 */

//Abspath 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//Prefix THYRA_

add_action( 'init', 'thyra_reg_post_type' );
function thyra_reg_post_type() {
    $args = array(
        'labels' => array(
            'name'                  => 'Supportärenden',
            'singular_name'         => 'Supportärende',
            'menu_name'             => 'Supportärenden',
            'add_new'               => 'Lägg till nytt',
            'add_new_item'          => 'Lägg till nytt supportärende',
            'new_item'              => 'Nytt supportärende',
            'edit_item'             => 'Redigera supportärende',
            'view_item'             => 'Visa supportärende',
            'all_items'             => 'Alla supportärenden',
            'search_items'          => 'Sök supportärenden',
            'not_found'             => 'Inga supportärenden hittades',
            'set_featured_image'    => 'Välj omslagsbild',
            'use_featured_image'    => 'Använd som omslagsbild',
            'archives'              => 'Supportärendearkiv',
            'insert_into_item'      => 'Infoga i supportärende',
            'filter_items_list'     => 'Filtrera supportärenden',
            'items_list_navigation' => 'Navigering i supportärenden',
            'items_list'            => 'Lista över supportärenden',
        ),
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-coffee',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'rewrite' 	   => array( 'slug' => 'supportarenden' ),
		'show_in_rest' => true,
    );
    register_post_type( 'thyra_supportarende', $args );


}

//Registrerar taxonomin
add_action( 'init', 'thyra_reg_taxonomy' );
function thyra_reg_taxonomy() {
    $args = array(
        'labels' => array(
            'name'                  => 'Supportkategorier',
            'singular_name'         => 'Supportkategori',
            'menu_name'             => 'Kategorier',
            'all_items'             => 'Alla kategorier',
            'add_new_item'          => 'Lägg till ny kategori',
            'new_item_name'         => 'Nytt kategorinamn',
            'edit_item'             => 'Redigera kategori',
            'view_item'             => 'Visa kategori',
            'update_item'           => 'Uppdatera kategori',
            'search_items'          => 'Sök kategorier',
            'not_found'             => 'Inga kategorier hittades',
            'filter_by_item'        => 'Filtrera efter kategori',
            'items_list'            => 'Lista över kategorier',
            'back_to_items'         => '← Tillbaka till kategorier',
            'most_used'             => 'Mest använda',

        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => array( 'slug' => 'supportkategori' ),
    );
   register_taxonomy( 'thyra_supportkategori', 'thyra_supportarende', $args );


}






?>
