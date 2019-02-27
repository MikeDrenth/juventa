<?php
/**
 * Content page for diensten
 * Header text is defined in dienst.php
 */
?>

<div id="row1">
    <div class="container">
        <?php if( have_rows('diensten_block') ): ?>
            <?php while ( have_rows('diensten_block') ) : the_row();  ?>
                <?php if( get_row_layout() == 'dienst' ): ?>
                    <div class="row align-items-center dienst">
                        <div class="col-12 col-sm-5">
                            <div class="dienst-image">
                                <?=get_sub_field('icon');?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-7">
                            <div class="dienst-tekst">
                                <?=get_sub_field('tekst');?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php if( have_rows('overige_diensten') ): ?>
	<div id="row2">
        <div id="diensten" class="fadeAnimation container">
            <div class="row justify-content-center title-row text-center">
                <?php while ( have_rows('overige_diensten') ) : the_row();  ?>
                    <?php if( get_row_layout() == 'intro' ): ?>
                    <div class="col-12 col-md-10">
                        <?php the_sub_field('tekst'); ?>
                    </div>
                    <?php endif; ?>
                <?php endwhile;?>
            </div>
            <div class="row justify-content-center items">
                <div class="col-12">
                    <div class="row content-row justify-content-center">
                        <?php while ( have_rows('overige_diensten') ) : the_row();  ?>
                            <?php if( get_row_layout() == 'dienst' ): ?>
                                <div class="col-12 col-sm-4">
                                    <div class="item">
                                        <?php the_sub_field('omschrijving'); ?>
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