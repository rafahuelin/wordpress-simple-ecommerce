<?php

    // Theme Support
    function ec_theme_setup() {
        add_theme_support('custom-logo');
    }

    add_action('after_setup_theme', 'ec_theme_setup');