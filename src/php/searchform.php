<form role="search" method="get" id="searchform" class="searchform" action="<?php esc_url( home_url( '/' ) ) ?>">
    <div class="searchform2">        
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ) ?></label>        
        <input type="text" value="<?php get_search_query() ?>" name="s" id="s" placeholder="<?php _e('Search'); ?>"/>
    </div>
</form>