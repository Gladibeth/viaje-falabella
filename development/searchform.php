<form role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ) ?>">
    <div class="search-wrapper">
        <input type="search" class="search-field searchInput"  placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        <i class="fa fa-search icon-scroll"></i>
    </div>
</form>
