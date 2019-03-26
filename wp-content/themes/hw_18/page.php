<?php
/**
 * The template for displaying all pages hw_18
 */

get_header();
?>

	<div class="about">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

	</div><!-- .about -->

<?php
get_footer();

?>
