<?php
/**
 * Content page for home
 */

?>
<div class="header-wrapper">
	<div id="header-background" class="d-flex flex-column justify-content-center align-items-center">
		<div class="menu-wrapper">
			<!-- The WordPress Menu goes here -->
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'h-100 align-items-center justify-content-center align-content-center',
					'container_id'    => 'nav-wrapper',
					'menu_class'      => '',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>
		</div>
		<div class="logo-wrapper d-flex">
			<div class="brand-title">
				<?php if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
				} ?>
			</div>
			<div class="menu-toggle">
				<div class="line"></div>
			</div>
		</div>
		<div class="header-text">
			<?php the_field('header_tekst'); ?>
		</div>
		<div class="contact-info">
			<div class="button d-flex justify-content-center align-items-center"><i class="fas fa-mobile-alt"></i></div>
			<div class="info">
				<a href="mailto:info@juventaonline.nl"><i class="fas fa-at"></i> info@juventaonline.nl</a>
				<a href="tel:060123456789"><i class="fas fa-mobile-alt"></i> Fabian: 06 321 542 67</a>
				<a href="tel:0625277247"><i class="fas fa-mobile-alt"></i> Mike: 06 252 772 47</a>
				<a target="_blank" href="https://www.facebook.com/juventaonline/"><i class="fab fa-facebook-f"></i> Facebook</a>
			</div>
		</div>
		<!-- particles.js container --> 
		<div id="particles-js"></div> 
	</div>

	<!--div id='stars'></div>
	<div id='stars2'></div>
	<div id='stars3'></div-->
</div>

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
			<div class="col-12 col-sm-8">
				<div class="row content-row">
					<?php while ( have_rows('diensten') ) : the_row();  ?>
						<?php if( get_row_layout() == 'diensten' ): ?>
							<div class="col-12 col-sm-4">
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
							<div class="title d-none d-sm-block" data-id="<?=$titleSlug?>">
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
							<div class="title d-sm-none" data-id="<?=$titleSlug?>">
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