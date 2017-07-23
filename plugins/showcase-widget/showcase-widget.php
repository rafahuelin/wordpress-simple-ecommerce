<?php
    /*
     *   Plugin Name: Showcase Widget
     *   Description: Simple showcase area
     *   Version: 1.0
     *   Author: Rafa Huelin
     */

    // include class
    include('class.showcase-widget.php');

    // Register Widget
    function register_showcase_widget() {
        register_widget('Showcase_Widget');
    }

    add_action('widgets_init', 'register_showcase_widget');