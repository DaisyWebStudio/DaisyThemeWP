<form action="<?php esc_url(home_url('/')); ?>" class="header_searh radius-search">
    <input type="text" class="header_searh_input" placeholder="Поиск..." name="s" value="<?php get_search_query(); ?>">
    <input type="submit" class="header_searh_submit" value="">
    <input type="hidden" value="product" name="post_type">
</form>