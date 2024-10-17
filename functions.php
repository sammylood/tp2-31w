<?php

function ajoute_style(){

wp_enqueue_style(
    'mon-style',
    get_template_directory_uri() . '/style.css',
    array(),
    filemtime(get_template_directory() . '/style.css'));
}

    add_action( 'wp_enqueue_scripts', 'ajoute_style' ); // équivalent à addEventListener




    function ajout_options(){
        
        //  Activer le support de menus personnalisés
         add_theme_support('menus'); 
    }

    add_action( "after_setup_theme", "ajout_options" );