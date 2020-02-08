<div class="wrapper">
    <div class="footer-main">
        <div class="containers">
            <div class="footer-main-one">
                <p>Menu</p>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu_class' => '',
                        'container' => false,
                        'item_wrap' => '<ul>%3$s</ul>',
                        'menu_id' => 'menu2',
                        'depth' => 1,
                        'walker' => new WPDocs_Walker_Nav_Menu(),
                    ));
                    ?>
            </div>
            <div class="footer-main-two">
                <p>Popular Post</p>
            </div>
            <div class="footer-main-three">
                <p>Social</p>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="containers">
            <p>Plane of the Breaks</p>
            <p>Plane of the Breaks</p>
        </div>
    </div>
</div>