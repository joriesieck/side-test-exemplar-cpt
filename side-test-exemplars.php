<?php
/*
Plugin Name: Exemplars Custom Post Type
Version: 1.1
Description: Creates custom "Exemplars", "Competencies", and "Scenarios" post types
Author: Jorie Sieck
Author URI: https://my.thinkeracademy.com
*/

namespace Scratch\Sandbox\Custom;

add_action('init',__NAMESPACE__ . '\register_cpt_exemplar');
/*
 * Adds the "Exemplar" custom post type
 */
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

add_action('init',__NAMESPACE__ . '\register_cpt_competency');
/*
 * Adds the "Competency" custom post type
 */
function register_cpt_competency() {
    $labels = array(
        'name' => _x('Competencies','competencies'),
        'singular_name' => _x('Competency','competency'),
    );

    $args = array(
        'label' => __('Competencies', 'competencies'),
        'labels' => $labels,
        'public' => true,
    );

    register_post_type('competencies',$args);
}

add_action('init',__NAMESPACE__ . '\register_cpt_scenario');
/*
 * Adds the "Scenario" custom post type
 */
function register_cpt_scenario() {
    $labels = array(
        'name' => _x('Scenarios','scenarios'),
        'singular_name' => _x('Scenario','scenario'),
    );

    $args = array(
        'label' => __('Scenarios', 'scenarios'),
        'labels' => $labels,
        'public' => true,
    );

    register_post_type('scenarios',$args);
}