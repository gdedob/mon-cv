<?php

function create_custom_post () {
    register_post_type('compétences', [
        'labels' => ['name' =>'Compétences'],
        'public' => true,
        'show_in_rest' => true,
    ] );
/* ajoute fct custom */


    register_post_type('langues', [
        'labels' => ['name' =>'Mes langues'],
        'public' => true,
    ] );
    
    register_post_type('hobby', [
        'labels' => ['name' =>'Mes hobbies'],
        'public' => true,
    ] );


    register_post_type('job', [
        'labels' => ['name' =>'Experience pro'],
        'public' => true,
    ] );
}

add_action ('init', 'create_custom_post'); /* action custom */
