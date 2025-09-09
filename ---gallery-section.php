<?php $gallery++;?>
<section class="gallerySection <?php if(get_sub_field('gallery_section_layouts')=='Masonry'): ?>masonry<?php endif; ?> gs-<?php echo $gallery;?> <?php echo get_sub_field('custom_class'); ?>">
<style>
.gallerySection.gs-<?php echo $gallery;?> .list .item{
	width: calc((100%/<?php echo get_sub_field('gallery_images_per_line'); ?>) - 6px);
    <?php if(get_sub_field('gallery_section_image_hover_effect')=='Scale'): ?>
        overflow: hidden;
    <?php endif; ?>
}
.gallerySection.gs-<?php echo $gallery;?> .galleryCategory .item:hover img{
    <?php if(get_sub_field('gallery_section_image_hover_effect')=='Scale'): ?>
            transform: scale(1.1);    
        <?php else: ?>
            box-shadow: 0 0 25px rgba(0,0,0,0.7);
    <?php endif; ?>  
}

<?php if($gallery < 2):?>
/*Basic Style*/
.gallerySection{
	padding: 50px 0;
    background: <?php echo get_sub_field('gallery_section_background'); ?>;
}
.gallerySection .section-container{
    max-width: 100%;
    margin: 0 auto;
    width: <?php echo get_sub_field('gallery_section_container_width'); ?>;
}
.gallerySection .galleryCategory:not(:first-child){
    margin-top: 30px;
}
.gallerySection .galleryCategory h3{
    text-align: left;
    padding-bottom: 20px;
    margin: 0;
    color: #1B253B;	
}
.gallerySection .galleryCategory .list:before, 
.gallerySection .galleryCategory .list:after{
    content:"";
    display:block;
    height:0;
    overflow:hidden;    
    clear:both;
}
.gallerySection .galleryCategory .list{
    padding: 0 3px;
}
.gallerySection .list .item{
	margin: 0 3px 6px;
	cursor: pointer;
    float: left;
}
.gallerySection .item img {
	width: 100%;
	height: 100%;
	object-fit: cover;
    transition: all 0.3s;
}
.gallerySection .loadMoreImages{
    width: 200px;
    height: 40px;
    border-radius: 5px;
    cursor: pointer;
    color: #fff;
    background: var(--main_color);
    margin: 15px auto 25px;
    transition: 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 16px;
    line-height: 1;
    padding-top: 1px;
}
.gallerySection .loadMoreImages:hover{
    background: var(--hover_color);
}
/*masonry*/
.masonry.gallerySection .list{
    padding: 0;
}
/*Modal*/
.gallerySection #sectionGalleryModal{
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    bottom: 0;
    left: 0;
    z-index: 9999;
    display: none;
}
.gallerySection #sectionGalleryModal .overlapWindow{
    position: absolute;
    width: 100%;
    top: 0;
    bottom: 0;
    background: rgba(0,0,0,.7);    
}
.gallerySection #sectionGalleryModal .modalWindowHeader .close{
    cursor: pointer;
    color: #fff;
    position: absolute;
    right: -15px;
    top: -15px;
    z-index: 9;
    line-height: 1;
    font-size: 24px;
    opacity: 1!important;
    background: var(--main_color);
    height: 30px;
    width: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    padding-bottom: 5px;
}
.gallerySection #sectionGalleryModal .modalWindowHeader .close:hover{
    background: var(--hover_color);
}
.gallerySection #sectionGalleryModal .contentWindow{
    position: relative;
    width: 700px;
    height: 700px;
    margin: 0 auto;
    background: inherit;
    z-index: 2;
    top: -1000px;
    max-width: 90%;
    max-height: calc(100% - 200px);
}
.gallerySection #sectionGalleryModal .contentPart{
    height: 100%;
}
.gallerySection #sectionGalleryModal .slider_gal{
    height: calc(100% - 60px);
}
.gallerySection #sectionGalleryModal .slider_gal .item{
    height: 100%!important;
}
.gallerySection #sectionGalleryModal .control-buttons{
    background: #fff;
    height: 60px;
}
.gallerySection #sectionGalleryModal .slider_gal .item img{
    height:100%;
    width:100%;
    overflow:hidden;
    object-fit: cover;
}
.gallerySection #sectionGalleryModal .slick-arrow{
    color:#fff;
    opacity: 0.6;
    font-size:50px;
    width:auto;
    height:auto;
    top:calc(50% - 35px);
}
.gallerySection #sectionGalleryModal .slick-arrow:hover{
    opacity: 1;
}
.gallerySection #sectionGalleryModal .control-buttons{
    padding: 10px;
}
.gallerySection #sectionGalleryModal .control-buttons .control{
    border: 0;
    background: transparent;
    color:#777;
}
.gallerySection #sectionGalleryModal .control-buttons .control:hover{
    color: var(--main_color);
}
.gallerySection #sectionGalleryModal .control-buttons .play_button{
    font-size:28px;
    margin-right: 2px;
}
.gallerySection #sectionGalleryModal .control-buttons .prev_button,
.gallerySection #sectionGalleryModal .control-buttons .next_button{
    font-size:20px;
    margin: 0 2px;
    position:relative;
    top:-2px;
}
.gallerySection #sectionGalleryModal:not(.fullImage) .item{
    background: #666;
}
/*fullImage Variant*/
#sectionGalleryModal.fullImage .control-buttons{
    display: none!important;
}
#sectionGalleryModal.fullImage .slider_gal{
    height: 100%!important;
}
#sectionGalleryModal.fullImage .contentWindow{
    height: 90%;
    width: 90%;
    margin: 5% auto;
}
#sectionGalleryModal.fullImage .slider_gal .item img{
    object-fit: contain!important;
}
#sectionGalleryModal.fullImage .modalWindowHeader .close{
    height: 60px;
    width: 60px;
}
/*End Modal*/

/*** RESPONSIVNESS *** RESPONSIVNESS *** RESPONSIVNESS ***/
@media(max-width:1024px){
    .gallerySection .list .item {
        width: calc((100%/3) - 6px);
    }    
}
@media(max-width:768px){
    .gallerySection .list .item {
        width: calc((100%/2) - 6px);
    }
}

@media(max-width:500px){
    .gallerySection .list .item {
        width: calc(100% - 6px);
    }
}
<?php endif; ?>
</style>
    <!--Receive JS Array From DB-->

    <?php
        $gallery_category_repeater = get_sub_field('gallery_category_repeater');
        $gallery_category_new_array = [];

        foreach( $gallery_category_repeater as $key => $gallery_category_single ){
            $gallery_category_new_array[$key]['category_title'] = $gallery_category_single['gallery_category_title'];
            foreach ( $gallery_category_single['section_gallery_images'] as $key_image => $gallery_single_image ){
                $gallery_category_new_array[$key]['images'][$key_image]['url'] = $gallery_single_image['url'];
                $gallery_category_new_array[$key]['images'][$key_image]['alt'] = $gallery_single_image['alt'];
            }
        }
        
        /*set used images*/
        $itemsGC = get_sub_field('gallery_images_per_line') * get_sub_field('gallery_images_lines');
        if($itemsGC < 4){
            $itemsGC = 4;    
        }
    ?>
    <script>
        galleryArray<?php echo $gallery;?> = JSON.parse('<?php echo JSON_encode($gallery_category_new_array);?>');
        //alert(JSON.stringify(galleryArray<?php echo $gallery;?>, null, 4));
        //alert(JSON.stringify(galleryArray<?php echo $gallery;?>[1].images[0].url, null, 4));
    </script>                
    <div class="section-container">
        <?php $gal = 0; ?>
        <?php if( have_rows('gallery_category_repeater') ): ?>
            <?php while( have_rows('gallery_category_repeater') ): the_row(); ?>
                <div id="gal-<?php echo $gal;?>" class="galleryCategory">
                    <?php if(get_sub_field('gallery_category_title')!=''): ?>
                        <h3><?php echo get_sub_field('gallery_category_title'); ?></h3>
                    <?php endif; ?>
                    <div class="list">                                        
                	<?php
                        $images = get_sub_field('section_gallery_images');
                        $calcImages = count($images);                   
                        if( $images ):
                            $i=0;?>
                            <?php foreach( $images as $image ): ?>
                                <?php if($i < $itemsGC): ?>
                            	        <div class="item" onclick="slider_gal<?php echo $gallery;?>(this)" id="image-<?=$i?>">
                            	            <img src="<?=$image['url']?>" alt="<?=$image['alt']?>" title=""/>
                            	        </div>
                                <?php endif; ?> 
                            <?php
                            $i++;
                        	endforeach;
                       	endif; 
                    ?>
                    </div><!--End list-->
                    <div class="clear"></div>
                    <?php if($calcImages > $itemsGC):?>  
                        <div onclick="loadGalleryImages<?php echo $gallery;?>(this)" class="loadMoreImages">Load More</div>
                    <?php endif; ?>                                       
                </div>
                <?php $gal++; ?>
            <?php endwhile;?>           
        <?php endif;?>
    </div><!--End section-container-->
    <div id="sectionGalleryModal" class="<?php if(get_sub_field('gallery_section_modal_layouts')=='Full Width'): ?>fullImage<?php endif; ?> gs-<?php echo $gallery;?>">
        <div class="overlapWindow">
        </div>
        <div class="contentWindow">
            <div class="modalWindowHeader">
                <div class="close right">
                    x
                </div>
            </div>
            <div class="contentPart">
                <div class="slider_gal">
                </div>
                <div class="control-buttons">
                    <button type="button" class="close" title="Close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
    
                    <button class="play_button play control"><i class="far fa-play-circle"></i></button>
                    <button class="prev_button control"><i class="far fa-arrow-alt-circle-left"></i></button>
                    <button class="next_button control"><i class="far fa-arrow-alt-circle-right"></i></button>
                </div>            
            </div>                        
        </div><!--End contentWindow-->
    </div><!--End sectionGalleryModal-->

<?php if($masonry < 2 && get_sub_field('gallery_section_layouts')=='Masonry'):?>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <?php $masonry++;?>   
<?php endif; ?> 
<?php if($imageLoader < 2 && get_sub_field('gallery_section_layouts')=='Masonry'):?>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <?php $imageLoader++;?>
<?php endif; ?>
<?php if($slick < 2):?>
    <?php $slick++;?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<?php endif;?>
<script>

    /*Item Sizing*/
    var imageRatio = '<?php echo get_sub_field('gallery_images_aspect_ratio'); ?>';
    var masonryIS = jQuery('.gallerySection.gs-<?php echo $gallery;?>').hasClass('masonry');
    var imageRatio = imageRatio.split('/');
        function galleryItems(){
            if(masonryIS == true){
                jQuery('.gallerySection.gs-<?php echo $gallery;?>.masonry .list').masonry({});
    
                jQuery('.gallerySection.gs-<?php echo $gallery;?>.masonry .list').imagesLoaded().progress( function() {
                     jQuery('.gallerySection.gs-<?php echo $gallery;?>.masonry .list').masonry();
                     //alert(111)
                });               
            }else{
                var bI = jQuery('.gallerySection.gs-<?php echo $gallery;?> .item').width()/(+imageRatio[0]) * (+imageRatio[1]);
                jQuery('.gallerySection.gs-<?php echo $gallery;?> .item').height(bI);            
            }                     
        }
        galleryItems();
    
    jQuery(window).resize(function(){ 
        if(masonryIS == false){    
            galleryItems();
        }
    });/*End resize function*/
    /*End Item Sizing*/
    
    /*Modal*/
    jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .overlapWindow, #sectionGalleryModal.gs-<?php echo $gallery;?> .close').click(function(){  	
        setTimeout(function(){
            jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?>').css({'display': 'none'});             
        }, 190);
        setTimeout(function(){
            jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .contentWindow').attr({'style': ''});
            jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .slider_gal').slick('unslick');
            jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .slider_gal').empty();
        }, 250)                        
    });
    
    function galleryModalLaunch<?php echo $gallery;?>(){   	
    	jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?>').css({'display': 'block'});
        if(jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?>').hasClass('fullImage')){
            topPos = 0;    
        }else{
            topPos = '100px';
        }
        setTimeout(function(){
            jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .contentWindow').css({'top':topPos, 'transition': 'all 0.4s ease-in'});
        }, 10);         
    }   
    /*End Modals*/

    jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .play_button').on('click', function() {
        if(jQuery(this).hasClass('play')){
            jQuery(this).removeClass('play').addClass('pause');
            jQuery(this).html('<i class="far fa-pause-circle"></i>');
            jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .slider_gal').slick('slickPlay');
        }else{
            jQuery(this).removeClass('pause').addClass('play');
            jQuery(this).html('<i class="far fa-play-circle"></i>');
            jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .slider_gal').slick('slickPause');
        }
    });

    jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .prev_button').on('click', function() {
        jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .slider_gal').slick('slickPrev');
    });
    jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .next_button').on('click', function() {
        jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .slider_gal').slick('slickNext');
    });
    
    /*add images to Modal*/
    function modalImageAppender<?php echo $gallery;?>(takeArray){
        i = 0;
        //alert(takeArray)
        var catImages = Object.keys(galleryArray<?php echo $gallery;?>[takeArray].images).length;
        do {
            var appendItem = '<div class="item"><img src="'+ galleryArray<?php echo $gallery;?>[takeArray].images[i].url +'" alt="'+ galleryArray<?php echo $gallery;?>[takeArray].images[i].alt +'" /></div>';
            jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .slider_gal').append(appendItem);        
            i++;	   
        } while (i < catImages);
    }
    
    /*Run Slider in Modal*/
    function slider_gal<?php echo $gallery;?>(elem){
        var takeID = jQuery(elem).parents('.galleryCategory').attr('id');
        var takeID = takeID.split('-');
        var takeArray = takeID[1];
        modalImageAppender<?php echo $gallery;?>(takeArray);
        galleryModalLaunch<?php echo $gallery;?>();
        //alert(111)
        if(jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .slider_gal .item').length > 1){
            jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .play_button').html('<i class="far fa-play-circle"></i>');
            var imgNum = jQuery(elem).attr('id');
            imgNum = imgNum.split('-');
            imgNum = (+imgNum[1]) + 1;
            //alert(imgNum)
            jQuery("#sectionGalleryModal.gs-<?php echo $gallery;?> .slider_gal").slick({
                dots: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplaySpeed: 2000,
                pauseOnHover: false,
                initialSlide: imgNum,
                prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="10" role="button"><span><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-white.svg" alt="arrow"/></span></button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="10" role="button"><span><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-white.svg" alt="arrow1"/></span></button>',
            });
            jQuery('#sectionGalleryModal.gs-<?php echo $gallery;?> .slick-prev').trigger('click');            
        }
    }
    

</script>   
</section>








