<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); 

// Chỉ hiển thị sản phẩm trong kết quả tìm kiếm
function filter_search_to_products( $query ) {
    if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
        $query->set( 'post_type', 'product' ); // Chỉ tìm kiếm sản phẩm
    }
}
add_action( 'pre_get_posts', 'filter_search_to_products' );

?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_archive_header(); ?>

		<?php if ( have_posts() ) : ?>

			<?php astra_content_loop(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'Sorry, no products matched your search.', 'astra' ); ?></p>

		<?php endif; ?>

		<?php astra_pagination(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
