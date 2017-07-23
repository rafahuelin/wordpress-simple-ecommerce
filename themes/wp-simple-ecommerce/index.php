<?php get_header() ?>

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
            <?php if(is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar') ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
