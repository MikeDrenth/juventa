
<?php
/**
 * Template Name: Dienst detail page
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();

?>

	<!-- Adding text in header on page, title + content block -->
	<div class="scroll-down"><i class="fas fa-caret-down"></i></div>
	<div class="header-text">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-8">
					<?php while ( have_posts() ) : the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Close header from header.php -->

<div class="wrapper diensten" id="pageContent">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'dienst' ); ?>

	<?php endwhile; // end of the loop. ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
