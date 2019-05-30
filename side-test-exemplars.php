<?php
/*
Plugin Name: Exemplars Custom Post Type
Version: 1.0
Description: Creates a custom "Exemplars" post type
Author: Jorie Sieck
Author URI: https://my.thinkeracademy.com
*/

namespace Scratch\Sandbox\Custom;

add_action('init',__NAMESPACE__ . '\register_cpt_exemplar');

function register_cpt_exemplar() {
    $labels = array(
        'name' => _x('Exemplars','exemplars'),
        'singular_name' => _x('Exemplar','exemplar'),
    );

    $args = array(
        'label' => __('Exemplars', 'exemplars'),
        'labels' => $labels,
        'public' => true,
    );

    register_post_type('exemplars',$args);
}