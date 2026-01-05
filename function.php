function exclude_product_category_from_shop( $query ) {
    if ( ! is_admin() && $query->is_main_query() && is_shop() ) {
        $tax_query = (array) $query->get( 'tax_query' );

        $tax_query[] = array(
            'taxonomy' => 'product_cat',
            'field'    => 'term_id',
            'terms'    => array(392), // The product_cat ID = 392 to exclude
            'operator' => 'NOT IN',
        );

        $query->set( 'tax_query', $tax_query );
    }
}
add_action( 'pre_get_posts', 'exclude_product_category_from_shop' );
