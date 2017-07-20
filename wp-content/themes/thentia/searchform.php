<?php
/**
 * The template for displaying search forms in _tk
 *
 * @package _tk
 */
?>
<form role="search" method="get" class="search-form pull-right" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="icon"><i class="fa fa-search"></i></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', '_tk' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', '_tk' ); ?>">
	</label>

</form>
