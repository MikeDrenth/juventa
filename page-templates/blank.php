<?php
/**
 * Template Name: Home
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>
	<!-- <div class="scroll-down"><i class="fas fa-caret-down"></i></div> -->
	<div class="header-text">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-8">
					<?php the_field('header_tekst'); ?>
				</div>
			</div>
		</div>
	</div>
<!-- Close header from header.php -->
</div> 
</section>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'home' ); ?>

		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :

			comments_template();

		endif;
		?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
