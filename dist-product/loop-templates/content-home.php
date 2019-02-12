<?php
/**
 * Content page for home
 */

?>

<?php if( have_rows('diensten') ): ?>
	<div id="row1">
		<div id="diensten" class="container fadeAnimation">
			<?php while ( have_rows('diensten') ) : the_row();  ?>
				<?php if( get_row_layout() == 'omschrijving' ): ?>
					<div class="row justify-content-center title-row">
						<div class="col-12 col-md-10">
							<?php the_sub_field('tekst'); ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<div class="row justify-content-center items">
				<div class="col-12">
					<div class="row content-row">
						<?php while ( have_rows('diensten') ) : the_row();  ?>
							<?php if( get_row_layout() == 'diensten' ): ?>
								<div class="col-12 col-md-4">
									<div class="item">
										<?php the_sub_field('tekst'); ?>
									</div>
								</div>
							<?php endif; ?>
						<?php endwhile;?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if( have_rows('portfolio') ): ?>
	<div id="highlights" class="highlights">
		<div class="items d-flex align-items-center">
			<div class="items-wrapper">
				<h2>Laatste projecten</h2>
				<div class="items-title fadeInOneByOne d-none d-md-block">
					<?php while ( have_rows('portfolio') ) : the_row();  ?>
						<?php if( get_row_layout() == 'project' ): ?>
							<?php 
								$title = get_sub_field('titel');
								$titleSlug = sanitize_title($title);
							?>
							<div class="title" data-id="<?=$titleSlug?>">
								<h3><?=$title;?></h3>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="items-image">
				<?php while ( have_rows('portfolio') ) : the_row();  ?>
					<?php if( get_row_layout() == 'project' ): ?>
						<?php 
							$projectImage = get_sub_field('afbeelding'); 
							$title = get_sub_field('titel');
							$titleSlug = sanitize_title($title);
						?>
						<div class="image" data-id="<?=$titleSlug?>">
							<img src="<?=$projectImage['url']?>" alt="<?=$titleSlug?>">
							<div class="title d-md-none" data-id="<?=$titleSlug?>">
								<h3><?=$title;?></h3>
							</div>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
<div id="row3" class="light-background fadeInOneByOne">
	<div class="container row-3">
		<div class="row justify-content-center title-row">
			<div class="col-12 col-md-10">
				<?php echo get_field('content'); ?>
			</div>
		</div>
	</div>
</div>