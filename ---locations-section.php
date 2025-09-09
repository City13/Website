<?php $locationSection++;?>
<section class="location customClear LC-<?php echo $locationSection;?> <?php echo get_sub_field('custom_class'); ?>">
    <?php if(get_sub_field('customize_locations_section')=='yes'): ?>
            <div class="item">
            	<a href="<?php echo get_sub_field('locations_section_first_block_link'); ?>" class="location-block">
            		<div class="location-img">
            			<img src="<?php echo get_sub_field('locations_section_first_block_image'); ?>" alt="">
            		</div>
            		<div class="location-block-txt positioned centered"><?php echo get_sub_field('locations_section_first_block_text'); ?></div>
            	</a>        
            </div><!--End item-->
            <div class="item">
            	<a href="<?php echo get_sub_field('locations_section_second_block_link'); ?>" class="location-block">
            		<div class="location-img">
            			<img src="<?php echo get_sub_field('locations_section_second_block_image'); ?>" alt="">
            		</div>
            		<div class="location-block-txt positioned centered"><?php echo get_sub_field('locations_section_second_block_text'); ?></div>
            	</a>
            </div><!--End item-->
             <?php if(get_sub_field('locations_section_third_block_image')!='' && get_sub_field('locations_section_third_block_text')!=''):?>
                <div class="item">
                	<a href="<?php echo get_sub_field('locations_section_third_block_link'); ?>" class="location-block">
                		<div class="location-img">
                			<img src="<?php echo get_sub_field('locations_section_third_block_image'); ?>" alt="">
                		</div>
                		<div class="location-block-txt positioned centered"><?php echo get_sub_field('locations_section_third_block_text'); ?></div>
                	</a>
                </div><!--End item-->
             <?php endif; ?>
            <?php if(get_sub_field('locations_section_four_block_image')!='' && get_sub_field('locations_section_four_block_text')!=''):?>
                <div class="item">
                	<a href="<?php echo get_sub_field('locations_section_four_block_link'); ?>" class="location-block">
                		<div class="location-img">
                			<img src="<?php echo get_sub_field('locations_section_four_block_image'); ?>" alt="">
                		</div>    		
                		<div class="location-block-txt positioned centered"><?php echo get_sub_field('locations_section_four_block_text'); ?></div>
                	</a>
                </div><!--End item-->
            <?php endif; ?>
        <?php else: ?>    
            <div class="item">
            	<a href="#" class="location-block">
            		<div class="location-img">
            			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/kanoe.jpg" alt="">
            		</div>
            		<div class="location-block-txt positioned centered">
            			<h3 class="blocktitle">Chandler</h3>
           				<p class="blocktext">VACATION RENTALS</p>
            		</div>
            	</a>        
            </div><!--End item-->
            <div class="item">
            	<a href="#" class="location-block">
            		<div class="location-img">
            			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/vacation-rentals-new.jpg" alt="">
            		</div>
            		<div class="location-block-txt positioned centered">
            			<h3 class="blocktitle">Tempe</h3>
           				<p class="blocktext">VACATION RENTALS</p>
            		</div>
            	</a>
            </div><!--End item-->
            <div class="item">
            	<a href="#" class="location-block">
            		<div class="location-img">
            			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/bg-night-beach.jpg" alt="">
            		</div>
            		<div class="location-block-txt positioned centered">
            			<h3 class="blocktitle">Phoenix</h3>
           				<p class="blocktext">VACATION RENTALS</p>
            		</div>
            	</a>
            </div><!--End item-->
            <div class="item">
            	<a href="#" class="location-block">
            		<div class="location-img">
            			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/sky.jpg" alt="">
            		</div>    		
            		<div class="location-block-txt positioned centered">
            			<h3 class="blocktitle">Scottsdale</h3>
           				<p class="blocktext">VACATION RENTALS</p>
            		</div>
            	</a>
            </div><!--End item-->
    <?php endif; ?>
<style>
<?php if(get_sub_field('customize_font_size')=='yes'): ?>
.location.LC-<?php echo $locationSection;?> .blocktitle {
    font-size: <?php the_sub_field('item_title_font_size'); ?>;
}
.location.LC-<?php echo $locationSection;?> .blocktext {
    font-size: <?php the_sub_field('item_text_font_size'); ?>;
}
<?php endif; ?>

<?php if($locationSection < 2):?>
.location {
	padding: 9px 4.5px;
    display: flex;
    display:-webkit-flex;
}
.location .item{
    /*width: calc(100%/4 - 9px);*/
    padding: 0 4.5px;
    position: relative;
    flex-grow:1;
    flex-basis:0;
}
.location  .location-block {
	position: relative;
	overflow: hidden;
	width: 100%;
    height: 100%;
    display: block;
	z-index: 22;
}
.location .location-block img {
    display: block;
    opacity: 0.7;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.location .location-img {
	background: #000;
	position: relative;
    height: 100%;
}
.location .item:hover .location-block img{
	transform: scale(1.1);
}
.location .location-block-txt {
	position: absolute;
	z-index: 22;
}
.location .blocktitle {
	color: #fff;
	text-align: center;
    margin: 0;
}
.location .blocktext {
	display: block;
	color: #fff;
	text-align: center;
	line-height: 1.6;
}

/*Responsivness*/
@media screen and (max-width: 991px) {
    .location {
        margin-bottom: 50px;
        flex-wrap:wrap;
        align-items:center;
    }
    .location .item {
        width: 50%;
        max-height: 350px;
        padding: 4.5px 4.5px;
        flex-basis:auto;
    }
    .location .boxtitle {
        margin-bottom: 30px;
        font-size: 38px;
    }   
}

@media screen and (max-width: 600px) {
    .location .item {
        width: calc(100% - 9px);
    }    
}
<?php endif; ?>
</style>

<script>
    function locationItems<?php echo $locationSection;?>(){
        var bI = jQuery('.location .item').width()/469 * 557;
        jQuery('.location .item').height(bI);                     
    }
    locationItems<?php echo $locationSection;?>();

    jQuery(window).resize(function() {
        locationItems<?php echo $locationSection;?>();
    })
</script>
</section><!--End location-->
