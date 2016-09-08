<?php
/**
 * Get Better Excerpt
 * @param  mixed   $post  int or post object
 * @param  integer $count max length of excerpt
 * @return string         the excerpt
 */
function get_better_excerpt( $post, $count = 150 ) {

	if ( ! is_object( $post ) ) {
		$post = get_post( $post );
	}

	$excerpt = '';
	if ( is_object( $post ) ) {
		$excerpt .= ( ! empty( $post->post_excerpt ) ) ? $post->post_excerpt : $post->post_content;
		if ( $count < strlen( $excerpt ) ) { 
			$excerpt  = substr( $excerpt, 0, $count ); 
			$excerpt .= ' ...';
		}
	}
	
	return $excerpt; 
	
}
