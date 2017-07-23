<!doctype html>
<html class="no-js" lang="<?php bloginfo('language') ?>" dir="ltr">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/foundation.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="grid-container">
    <header class="grid-x grid-padding-x">
        <div class="large-6 cell">
            <?php
                if(function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
            ?>
        </div>
        <div class="large-6 cell">
            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'container_class' => 'menu simple main-nav'
            )); ?>
        </div>
    </header>

    <?php if(is_active_sidebar('showcase')) : ?>
        <div class="grid-x grid-padding-x showcase">
            <div class="large-12 cell">
                <div class="callout secondary">
                    <?php dynamic_sidebar('showcase') ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="grid-x grid-padding-x">
        <div class="large-8 medium-8 cell">
            <div class="grid-x grid-padding-x products">
                <div class="large-4 medium-4 small-12 cell product">
                    <h3>Blue Shirt</h3>
                    <h4>$9.99</h4>
                    <img src="./img/shirt_blue_white.jpg">
                    <button class="button">Details</button>
                </div>
                <div class="large-4 medium-4 small-12 cell product end">
                    <h3>Red Shirt</h3>
                    <h4>$19.99</h4>
                    <img src="./img/shirt_red.jpg">
                    <button class="button">Details</button>
                </div>
                <div class="large-4 medium-4 small-12 cell product end">
                    <h3>Grey Shirt</h3>
                    <h4>$11.99</h4>
                    <img src="./img/shirt_grey.jpg">
                    <button class="button">Details</button>
                </div>
                <div class="large-4 medium-4 small-12 cell product end">
                    <h3>Orange Shirt</h3>
                    <h4>$9.99</h4>
                    <img src="./img/shirt_orange.jpg">
                    <button class="button">Details</button>
                </div>
                <div class="large-4 medium-4 small-12 cell product end">
                    <h3>Black Shirt</h3>
                    <h4>$9.99</h4>
                    <img src="./img/shirt_black.jpg">
                    <button class="button">Details</button>
                </div>
            </div>
        </div>

        <div class="large-4 medium-4 cell">
            <div class="callout">
                <h3>Categories</h3>
                <ul class="menu vertical">
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Pants</a></li>
                    <li><a href="#">Hats</a></li>
                    <li><a href="#">Shoes</a></li>
                </ul>
            </div>
            <br>
            <div class="callout">
                <h5>Sidebar heading</h5>
                <p>Sed viverra ex quis purus fermentum dignissim. Sed consequat, purus vel fermentum fringilla, felis ipsum efficitur ipsum, ut aliquet lorem diam in turpis. Vestibulum eu pellentesque ante. Suspendisse quis urna in nisi efficitur mattis fermentum vel nisi. Pellentesque porta diam orci.</p>
                <a href="http://foundation.zurb.com/sites/docs/" class="small button">Go to Foundation Docs</a>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2017 &mdash; Ecommerce</p>
</footer>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
