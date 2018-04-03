<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form d-flex" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="sr-only" for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'twentyseventeen' ); ?></span>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>" class="form-control w-75" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="btn bg-primary text-white w-25"><i class="fas fa-search"></i></button>
</form>
