
<?php
/**
 * Template Name: Contact template
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();

?>

	<?php
		$image = get_field('header_afbeelding');
		$imgUrl = $image['url'];
	?>
	<script>
		document.getElementById("header-background").style.backgroundImage = "url('<?=$imgUrl;?>')";
	</script>

	<!-- Adding text in header on page, title + content block -->
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

<div class="wrapper" id="contactContent">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'contact' ); ?>

	<?php endwhile; // end of the loop. ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
