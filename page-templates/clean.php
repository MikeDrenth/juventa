
<?php
/**
 * Template Name: Clean template
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();

?>

</div>
<!-- Close header from header.php -->

<div class="wrapper" id="cleanContent">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'clean' ); ?>

	<?php endwhile; // end of the loop. ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
