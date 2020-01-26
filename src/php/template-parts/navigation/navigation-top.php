<label class="show-menu" for="show-menu">Меню <i class="fa fa-caret-down"></i></label>
<input id="show-menu" type="checkbox" role="button">
<?php
wp_nav_menu(array(
    'theme_location' => 'menu-1',
    'menu_class' => '',
    'container' => false,
    'item_wrap' => '<ul>%3$s</ul>',
    'menu_id' => 'menu2',
    'depth' => 0,
    'walker' => new WPDocs_Walker_Nav_Menu(),
));
?>