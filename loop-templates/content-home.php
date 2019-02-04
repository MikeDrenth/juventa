<?php
/**
 * Content page for home
 */

?>
<?php if( have_rows('diensten') ): ?>
	<div id="row1" class="container fadeAnimation">
		<?php while ( have_rows('diensten') ) : the_row();  ?>
			<?php if( get_row_layout() == 'omschrijving' ): ?>
				<div class="row justify-content-center title-row">
					<div class="col-12 col-md-10">
						<?php the_sub_field('tekst'); ?>
					</div>
				</div>
			<?php endif; ?>
		<?php endwhile; ?>
		<div class="row justify-content-center ">
			<div class="col-12 col-lg-8">
				<div class="row content-row">
					<?php while ( have_rows('diensten') ) : the_row();  ?>
						<?php if( get_row_layout() == 'diensten' ): ?>
							<div class="col-12 col-lg-4">
								<?php the_sub_field('tekst'); ?>
							</div>
						<?php endif; ?>
					<?php endwhile;?>
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
				<div class="items-title fadeInOneByOne">
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
				<h3>Wij zijn overtuigd van een full service benadering.</h3>
				<h4>Geen tijdelijke en snelle aanpak, maar een proactieve, resultaatgerichte werkwijze met de focus op de lange termijn.</h4>
			</div>
		</div>
		<div class="row justify-content-center content-row">
			<div class="col-12 col-md-10">
				<p>Full service is voor ons meer dan een team vol in-house specialisten. Wij geloven in de kracht van commitment. Kritisch kunnen zijn wanneer dat moet, en ondersteunend wanneer dat hoort. Dat verwachten wij andersom ook, want zo halen wij het beste in beide partijen naar boven.</p>
			</div>
		</div>
	</div>
</div>