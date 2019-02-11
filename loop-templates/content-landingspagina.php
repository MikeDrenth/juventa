<?php
/**
 * Content page for landingspagina
 * Header text is defined in landingspagina.php
 */
?>

<div id="row1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-5">
                <div class="dienst-image">
                    <?php
                        $image = get_field('afbeelding');
                    ?>
                    <img src="<?=$image['url']?>" alt="<?=the_title();?>">
                </div>
            </div>
            <div class="col-12 col-sm-7">
                <div class="dienst-tekst">
                    <?=get_field('omschrijving');?>
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
                                <div class="col-12 col-sm-4">
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