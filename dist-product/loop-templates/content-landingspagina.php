<?php
/**
 * Content page for landingspagina
 * Header text is defined in landingspagina.php
 */
?>

<div id="row1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10">
                <div class="">
                    <?php echo the_field('eerste_blok'); ?>
                </div>
            </div>
        </div>
        <?php if( have_rows('usps', 112) ): ?>
            <div id="usps" class="usps fadeAnimation">
                <div class="row justify-content-center items">
                    <div class="col-12 col-lg-10">
                        <div class="row content-row">
                            <?php while ( have_rows('usps', 112) ) : the_row();  ?>
                                <?php if( get_row_layout() == 'usp' ): ?>
                                    <div class="col-12 col-md-4">
                                        <div class="item justify-content-center d-flex flex-column">
                                            <div class="icon">
                                                <?php the_sub_field('icon', 112); ?>
                                            </div>
                                            <?php the_sub_field('tekst', 112); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile;?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row align-items-center padding-bottom">
            <div class="col-12 col-lg-10">
                <div class="">
                    <?=get_field('tweede_blok');?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if( have_rows('portfolio') ): ?>
	<div id="projecten" class="projecten">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Opgeleverde projecten</h2>
                </div>
            </div>
            <div class="row">
                <?php while ( have_rows('portfolio') ) : the_row();  ?>
                    <?php if( get_row_layout() == 'project' ): ?>
                        <div class="col-12 col-md-4">
                            <div class="item">
                                <?php 
                                    $title = get_sub_field('titel');
                                    $titleSlug = sanitize_title($title);
                                    $projectImage = get_sub_field('afbeelding'); 
                                ?>
                                <div class="image"">
                                    <?php if(!empty($projectImage)) : ?>
                                        <img data-src="<?=$projectImage['url']?>" alt="<?=$titleSlug?>" class="lazy">
                                    <?php endif; ?>
                                </div>
                                <div class="title">
                                    <h3><?=$title;?></h3>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
		</div>
	</div>
<?php endif; ?>

<div id="contact-wrapper" class="contact-block">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-6">
                <div class="text">
                    <?php echo the_field('contact'); ?>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-6">
                <div class="form">
                    <?php echo the_field('contact_formulier', 112); ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="extra">
                    <?php echo the_field('andere_paginas'); ?>
                </div>  
            </div>
        </div>
    </div>
</div>

<?php if( have_rows('diensten', 12) ): ?>
	<div id="row2">
        <div id="diensten" class="fadeAnimation container">
            <div class="row justify-content-center title-row">
                <div class="col-12 col-md-10">
                    <?php the_field('diensten_tekst', 57); ?>
                </div>
            </div>
            <div class="row justify-content-center items">
                <div class="col-12">
                    <div class="row content-row">
                        <?php while ( have_rows('diensten', 12) ) : the_row();  ?>
                            <?php if( get_row_layout() == 'diensten' ): ?>
                                <div class="col-12 col-lg-4">
                                    <div class="item">
                                        <?php the_sub_field('tekst', 12); ?>
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