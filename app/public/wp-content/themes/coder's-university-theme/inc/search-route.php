<?php 

add_action('rest_api_init', 'universityRegisterSearch');
function universityRegisterSearch(){
    register_rest_route('university/v1', 'search', array(
        'methods' => Wp_REST_SERVER::READABLE,
        'callback' =>  'universitySearchResults'
    ));
}

function universitySearchResults(){
    return 'congo';
}