<?php
/**
 * Template part for displaying page content in page.php hw_18
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hw_18' ),
			'after'  => '</div>',
		) );
		?>
		        </div>



</article><!-- #post-<?php the_ID(); ?> -->
