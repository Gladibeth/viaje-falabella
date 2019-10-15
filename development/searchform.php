<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
    <div class="search-first">
        <div class="searchBox">
            <input type="search" class="search-field searchInput"  placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            <button class="searchButton" href="#">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
</form>

