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
if (! defined('ABSPATH')) {
    exit;
}

require __DIR__ . '/taxonomi.php';

//Prefix THYRA_

add_action('init', 'thyra_reg_post_type');
function thyra_reg_post_type()
{
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
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-coffee',
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite'      => array( 'slug' => 'supportarenden' ), //Läsbara delen av url
        'show_in_rest' => true,
    );
    register_post_type('thyra_supportarende', $args);
}

//Activation hook som körs vid aktivering för att slippa att reglerna skrivs om efter varje sidladdning, då de skrivs om när pluginet aktiveras
register_activation_hook(__FILE__, function () {
    thyra_reg_post_type();
    thyra_reg_taxonomy();
    test_reg_taxonomy();
    flush_rewrite_rules(); //Rewrite reglerna i post type/taxonomi
});
