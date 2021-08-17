<?php
/**
 * Class Mls_Category_Tree
 *
 * Category related methods
 *
 * @class Mls_Category_Tree
 * @package Mls_Category_Tree
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */

if ( ! class_exists( 'Mls_Category_Tree' ) ) {
	class Mls_Category_Tree {
		public function __construct() {
			// add_action('init', array($this, 'mls_list_categories'));
		}

		protected function hierarchical_category_tree( $cat ) {
			$next = get_categories( 'hide_empty=false&orderby=name&order=ASC&parent=' . $cat );

			if ( $next ) :
				foreach ( $next as $cat ) :
					echo '<ul><li><strong>' . $cat->name . '</strong>';
					echo ' / <a href="' . get_category_link( $cat->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $cat->name ) . '" ' . '>View ( ' . $cat->count . ' posts )</a>  ';
					echo ' / <a href="' . get_admin_url() . 'edit-tags.php?action=edit&taxonomy=category&tag_ID=' . $cat->term_id . '&post_type=post" title="Edit Category">Edit</a>';
					$this->hierarchical_category_tree( $cat->term_id );
				endforeach;
			endif;

			echo '</li></ul>';
			echo "\n";
		}

		public function mls_list_categories() {
			$this->hierarchical_category_tree( 0 );
		}
	}

	new Mls_Category_Tree();
}