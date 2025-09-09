<?php $cardSlider++;?>
<section class="card-slider CS-<?php echo $cardSlider;?> <?php echo get_sub_field('custom_class'); ?>">
    <?php if(get_sub_field('card_slider_background')=='Image'): ?>
        <img class="backImg" src="<?php echo get_sub_field('card_slider_background_image'); ?>" alt="" title="" />   
    <?php endif; ?>
    <div class="overed">
    <?php if(get_sub_field('card_slider_title')!=''): ?>
        <h2><?php echo get_sub_field('card_slider_title'); ?></h2>    
    <?php endif; ?>    
        <div class="container-custom">
			<?php if(get_sub_field('card_section_slider')=='yes'): ?>
            <span class="arrowReviews turnRight">
                <img src="/wp-content/themes/BizcorLuxury/images/card-slider/down-arrow-card.svg" alt="card-arrow" title="Guest Reviews"/>
            </span>
            <span class="arrowReviews turnLeft">
                <img src="/wp-content/themes/BizcorLuxury/images/card-slider/down-arrow-card.svg" alt="card-arrow" title="Guest Reviews"/>
            </span>
			<?php endif; ?>
            <div class="wrap-slick">
                <?php $card = 1; ?>
                <?php if( have_rows('card_slider_repeater') ): ?>
                    <?php while( have_rows('card_slider_repeater') ): the_row(); ?>
                        <?php if($card < 4):?>
                            <div class="flex-custom-box <?php if($card == 1):?>view<?php elseif($card == 2): ?>next<?php else: ?>last<?php endif; ?>">
                            	<div class="wrap imaged">
                                    <img class="img-left" src="<?php echo get_sub_field('card_slider_item_image'); ?>" alt=""/>
                                    <?php if(get_sub_field('card_slider_view_more_link')!=''): ?>
                                        <a href="<?php echo get_sub_field('card_slider_view_more_link'); ?>" class="viewMorePhotos">
                                            View More Photos
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"><defs><style>.f{fill:#fff;}</style></defs><path class="f" d="M14.5-12a1.447,1.447,0,0,1,1.063.438A1.447,1.447,0,0,1,16-10.5v9a1.447,1.447,0,0,1-.437,1.063A1.447,1.447,0,0,1,14.5,0H1.5A1.447,1.447,0,0,1,.438-.437,1.447,1.447,0,0,1,0-1.5v-9a1.447,1.447,0,0,1,.438-1.062A1.447,1.447,0,0,1,1.5-12ZM14.313-1.5a.18.18,0,0,0,.125-.062.18.18,0,0,0,.063-.125v-8.625a.18.18,0,0,0-.062-.125.18.18,0,0,0-.125-.062H1.688a.18.18,0,0,0-.125.063.18.18,0,0,0-.062.125v8.625a.18.18,0,0,0,.063.125.18.18,0,0,0,.125.063ZM4-9.25a1.209,1.209,0,0,1,.891.359A1.209,1.209,0,0,1,5.25-8a1.209,1.209,0,0,1-.359.891A1.209,1.209,0,0,1,4-6.75a1.209,1.209,0,0,1-.891-.359A1.209,1.209,0,0,1,2.75-8a1.209,1.209,0,0,1,.359-.891A1.209,1.209,0,0,1,4-9.25ZM3-3V-4.5L4.25-5.75a.338.338,0,0,1,.25-.094.338.338,0,0,1,.25.094L6-4.5,9.75-8.25A.338.338,0,0,1,10-8.344a.338.338,0,0,1,.25.094L13-5.5V-3Z" transform="translate(0 12)"/></svg>
                                        </a>                                        
                                    <?php endif; ?>                                 
                                </div>
                                <div class="wrap texted">
                    	            <div class="item description">
                    	                <article>
                                            <h3><?php echo get_sub_field('card_slider_item_title'); ?></h3>
                                            <p><?php echo get_sub_field('card_slider_text_part'); ?></p>
                                            <?php if(get_sub_field('card_slider_button_line')!=''): ?>
                                                <h4><?php echo get_sub_field('card_slider_button_line'); ?></h4>
                                            <?php endif; ?>
                    	                </article>                      
                    	            </div>
                                    <?php if(get_sub_field('card_slider_item_ribbon')=='yes'): ?>
                        	            <div class="rating">
                        	                <div class="box-wrap">
                                                <h6>Guest Rating</h6>
                                                <span class="firstSpan"><?php echo get_sub_field('card_slider_rating_value'); ?></span>                      	                  
                                            </div>
                                            <div class="angle"></div>                                           
                        	            </div>
                                    <?php endif; ?>
                                </div>
                            </div><!--End flex-custom-box-->
                        <?php endif;?>    
                        <?php $card++; ?>
            		<?php endwhile;?>
            	<?php endif;?>                
            </div>
        </div><!--End container-custom-->
    </div><!--End overed-->
<style>
.card-slider.CS-<?php echo $cardSlider;?> .description article p{
    font-size: <?php echo get_sub_field('card_slider_section_text_size'); ?>;
}
.card-slider.CS-<?php echo $cardSlider;?> .description article h3{
    font-size: <?php echo get_sub_field('card_slider_itme_title_font_size'); ?>;
}
.card-slider.CS-<?php echo $cardSlider;?> h2{
    font-size: <?php echo get_sub_field('card_slider_title_font_size'); ?>;
}
.card-slider.CS-<?php echo $cardSlider;?>{
    background: <?php echo get_sub_field('card_slider_background'); ?>;        
}
<?php if($cardSlider < 2):?>
/*Basic Styles*/
.card-slider .backImg{
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    left: 0;
    top: 0;
}
.card-slider{
    position: relative;
    padding: 0px 15px;
    overflow: hidden;       
}
.card-slider .overed {
	padding: 120px 0;
}
.card-slider .container-custom{
    position: relative;
    width: 1210px;
    max-width: 90%;
    margin: 0 auto;
    z-index: 2;
}
.card-slider .wrap-slick{
    min-height: 400px;
}
.card-slider h2 {
	text-align: center;
	position: relative;
	z-index: 2;
	margin-bottom: 50px;
	color: #292929;
}
.card-slider .flex-custom-box:before, .card-slider .flex-custom-box:after{
    content:"";
    display:block;
    height:0;
    overflow:hidden;    
    clear:both;
}
.card-slider .item{
    padding: 50px 0 50px 40px;
    position: relative;
    height: 100%;
}
.card-slider .item.description{
    display: flex;
    align-items: center;
}
.card-slider .wrap {
    width: 50%;
    float: left;
    height: 100%;
}
.card-slider .wrap.imaged{
    position: relative;
}
.card-slider .wrap .viewMorePhotos {
	padding: 12px 21px;
	background: var(--main_color);
    color: #fff;
	position: absolute;
	bottom: 0;
	left: 0;
	white-space: nowrap;
/* 	font: 400 16px var(--body_font); */
	font: 400 18px var(--body_font);
	text-transform: uppercase;
	border-radius: 0 5px 0 0;
}
.card-slider .wrap .viewMorePhotos:hover{
    background: var(--hover_color);
    color: #fff;
}
.card-slider .wrap .viewMorePhotos:hover{
    background: var(--hover_color); 
}
.card-slider .wrap .viewMorePhotos svg{
    margin-left: 4px;
}
.card-slider .wrap .viewMorePhotos .a{
    fill: #fff;
}
.card-slider .wrap img.img-left {
    height: 100%;
    width: 100%;
    object-fit: cover;
}
/*.card-slider .description article{   
    height: 100%;
}*/
.card-slider .description article h3 {
	color: #292929;
	margin: 0;
    font-size: 24px;
    padding-right: 100px;
}
.card-slider .description article span{
    display: block;
    font-size: 16px;
    color: #373737;
}
.card-slider .description article p {
	color: rgba(41, 41, 41, 0.75);
	margin: 30px 0;
	overflow: hidden;
	line-height: 28px;
	max-height: 195px;
}
.card-slider .description article h4 {
	font-size: 16px;
	color: #292929;
	/*position: absolute;
	bottom: -1px;*/
	margin: 0;
	font-weight: 600;
}
.card-slider .rating {
	position: absolute;
	width: 102px;
	top: 0;
	right: 60px;
	text-align: center;
	height: 100px;
	background: var(--main_color);
}
.rating .box-wrap {
    padding-top: 25px;
}
.card-slider .rating h6 {
	font-size: 12px;
	background: var(--main_color);
	color: rgba(255, 255, 255, 0.75);
	margin-bottom: 3px;
	text-transform: uppercase;
}
.card-slider .rating span {
	font-size: 40px;
	color: #fff;
	display: block;
	line-height: 1;
    font-family: Marcellus;
}
.card-slider .rating .angle::after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	border-bottom: none;
	border-top: 20px solid var(--main_color);
	border-right: 55px solid transparent;
}
.card-slider .rating .angle::before {
	content: '';
	position: absolute;
	right: 0;
	top: 0;
	border-bottom: none;
	border-top: 20px solid var(--main_color);
	border-left: 55px solid transparent;
}
.card-slider .rating .angle {
	position: absolute;
	top: calc(100% - 2px);
	left: 0;
	width: 100%;
	padding-top: 2px;
	background: var(--main_color);
}
.card-slider .rating .angle img{
    width: 100%;
    background: #fff;
    display: block;
    outline: none;
}
/*animation*/
.card-slider .flex-custom-box{
    margin: 0 auto;
    width: 100%;
    padding:50px 60px;
    background: #fff;
    position: absolute;
    box-shadow: 0 3px 50px rgba(0, 0, 0, 0.12);
    transition: transform 1s, left 1s, right 1s;
    left: 0;
    height: 100%;
}
.card-slider.rightMove .flex-custom-box{
    left: auto;
    right: 0;
}
.arrowReviews{
    top: calc(50% - 20px);
    position: absolute;
    z-index: 5;
    display: block;
    cursor: pointer;
    transition: opacity 0.3s;
    line-height: 1;
}
.arrowReviews:hover{
    opacity: 0.5;
}
.arrowReviews.turnRight{
    right: 20px;
}
.arrowReviews.turnLeft{
    left: 20px;
    transform: rotate(180deg);
}
.card-slider .flex-custom-box.next{
    transform: scale(1.08, 0.9);
    z-index: 2;
}
.card-slider .flex-custom-box.last{
    transform: scale(1.15, 0.8);
    z-index: 1;
}
.card-slider .flex-custom-box.view{
    z-index: 3;
}

/*Responsivness*//*Responsivness*//*Responsivness*/
@media (max-width: 1440px) {
    .card-slider .flex-custom-box {
        width: 90% ;
        right: 0;
    }
    .arrowReviews.turnRight {
        right: 70px;
    }
    .arrowReviews.turnLeft {
        left: 70px;
    }
}


@media (max-width: 1200px) {
    .card-slider .wrap {
        width: 100%;
    }
    .card-slider .rating {
        top: 35px;
        right: 45px;
    }
    .card-slider .flex-custom-box {
        padding-right: 45px;
        box-shadow: none!important;
		width:100%;
    }
    .card-slider .flex-custom-box{
        position: relative;
        float: left;
        transform: none!important;
        padding: 0!important;
    }
    .card-slider .wrap.imaged{
        height: 350px;
    }
    .card-slider .arrowReviews{
        display: none!important;
    }
    .card-slider .description article{
        padding: 0;
        text-align: center;
    }
    .card-slider .description article h4{
        position: static;
    }
    .card-slider .rating{
        top: 0;
        right: 0;
    }
    .card-slider .slick-arrow {
    	width: 38px;
    	height: auto;
    	top: 150px;
    }
    .card-slider .slick-next{
        transform: rotate(180deg);
    }
    .card-slider .slick-dots{
        bottom: auto;
        top: 300px;
    }
    .card-slider .wrap .viewMorePhotos{
        bottom: auto;
        top: 0;
        border-radius: 0 0 5px 0;
    }
    .card-slider .item {
        padding: 30px 15px;
    }
    .card-slider .overed {
    	padding: 50px 0;
    }
}

@media (max-width: 767px) {
    .card-slider {
        max-width: 100%;
    }
    .card-slider .container-custom{
        max-width: 100%;
    }
    .card-slider .flex-custom-box {
        padding: 15px;
    }
    .card-slider .rating {
        width: 70px;
    }
    .card-slider .rating h6 {
        font-size: 9px;
    }
    .card-slider .rating span {
        font-size: 30px;
    }
    .card-slider .rating {
        height: auto;
    }
    .card-slider .rating span.angle {
        border-bottom: 20px solid #fff;
        border-left: 34px solid transparent;
        border-right: 35px solid transparent;
    }
    .card-slider .description article p{
        padding-top: 0;
    }
    .rating .box-wrap {
    	padding-top: 10px;
    }
    .card-slider .description article p{
        margin: 20px 0;
    }
    .card-slider .wrap .viewMorePhotos{
        padding: 10px 15px;
        font-size: 14px;
    }
    .card-slider .slick-arrow {
    	width: 34px;
    	height: auto;
    	top: 160px;
    }
}
<?php endif;?>
</style>
<?php $slick++;?>
<?php if($slick < 2):?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<?php endif;?>
<script>
	<?php if(get_sub_field('card_section_slider')=='yes'): ?>
    /*riviews animation*/
    jQuery(document).on('ready', function() {
	    if (jQuery(window).innerWidth() < 1199){
	    	//console.log('Less than 1200');
	    	jQuery('.card-slider.CS-<?php echo $cardSlider;?> .container-custom .wrap-slick').slick({
			  dots: true,
			  slidesToShow: 1,
			  slidesToScroll: 1,
              prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><img src="/wp-content/themes/BizcorLuxury/images/slick-arrow.svg" alt="" /></button>',
              nextArrow:'<button type="button" data-role="none" class="slick-next" aria-label="Previous" tabindex="0" role="button"><img src="/wp-content/themes/BizcorLuxury/images/slick-arrow.svg" alt="" /></button>'
			});
	    }
    });
	<?php endif;?>
	if (jQuery(window).innerWidth() > 1199){
	   
        /*slider size*/
        function cardLining(heiLine){
            var highest = 0;
            jQuery(heiLine).each(function(){
                var currentHei = jQuery(this).innerHeight();
                if(currentHei > highest){
                    highest = currentHei;
                }
            });
            jQuery('.card-slider.CS-<?php echo $cardSlider;?> .wrap-slick').height(highest + 160);    
        }
        cardLining('.card-slider.CS-<?php echo $cardSlider;?> .description');       
       
	    reviewsArray<?php echo $cardSlider;?> = [];
	    jQuery('.card-slider.CS-<?php echo $cardSlider;?> .flex-custom-box').each( function(index){
	        var thisElement = jQuery(this); 
	        var addArr = [thisElement, index];
	        reviewsArray<?php echo $cardSlider;?>.push(addArr);
	        rewArrLenght<?php echo $cardSlider;?> = index + 1;         
	    })
	    //alert(JSON.stringify(reviewsArray, null, 4));
	    //alert(jQuery(reviewsArray[0][0]).attr('class'))

	    jQuery('.CS-<?php echo $cardSlider;?> .arrowReviews.turnRight').click(function(){ 
	    	var hzCL = jQuery('.card-slider.CS-<?php echo $cardSlider;?>').hasClass('activeArrow');
	        if(hzCL == false){
	            jQuery('.CS-<?php echo $cardSlider;?>.card-slider').addClass('activeArrow');
	            jQuery('.CS-<?php echo $cardSlider;?>.card-slider .flex-custom-box.view').css({'left': '115%', 'transform': 'scale(1.05, 0.85)'});
	            setTimeout(function(){
	                i = 0;
	                do {                    
		               if(reviewsArray<?php echo $cardSlider;?>[i][1] == 0){
		                   reviewsArray<?php echo $cardSlider;?>[i][1] = 2;
		                   jQuery(reviewsArray<?php echo $cardSlider;?>[i][0]).attr('style', '').css({'left': 0}).removeClass('view').addClass('last');        
		               }else if(reviewsArray<?php echo $cardSlider;?>[i][1] == 1){
		                   reviewsArray<?php echo $cardSlider;?>[i][1] = 0;
	                       jQuery(reviewsArray<?php echo $cardSlider;?>[i][0]).removeClass('next').addClass('view');
		               }else{
		                   reviewsArray<?php echo $cardSlider;?>[i][1] = 1;
	                       jQuery(reviewsArray<?php echo $cardSlider;?>[i][0]).removeClass('last').addClass('next');	                   
		               }
	                   i++;
	                } while (i < rewArrLenght<?php echo $cardSlider;?>);
	                setTimeout(function(){
	                    jQuery('.CS-<?php echo $cardSlider;?>.card-slider').removeClass('activeArrow');    
	                }, 1100);
	            }, 1000);                
	        } 
	    });
	    
	    jQuery('.CS-<?php echo $cardSlider;?> .arrowReviews.turnLeft').click(function(){ 
	    	var hzCL = jQuery('.CS-<?php echo $cardSlider;?>.card-slider').hasClass('activeArrow');
	        if(hzCL == false){
	            jQuery('.CS-<?php echo $cardSlider;?>.card-slider').addClass('activeArrow').addClass('rightMove');
	            jQuery('.CS-<?php echo $cardSlider;?>.card-slider .flex-custom-box').attr('style', '');
	            setTimeout(function(){
	                jQuery('.CS-<?php echo $cardSlider;?>.card-slider .flex-custom-box.view').css({'right': '115%', 'transform': 'scale(1.05, 0.85)'});
	                setTimeout(function(){
	                    i = 0;
	                    do {                    
	    	               if(reviewsArray<?php echo $cardSlider;?>[i][1] == 0){
	    	                   reviewsArray<?php echo $cardSlider;?>[i][1] = 2;
	    	                   jQuery(reviewsArray<?php echo $cardSlider;?>[i][0]).attr('style', '').css({'right': 0}).removeClass('view').addClass('last');        
	    	               }else if(reviewsArray<?php echo $cardSlider;?>[i][1] == 1){
	    	                   reviewsArray<?php echo $cardSlider;?>[i][1] = 0;
	                           jQuery(reviewsArray<?php echo $cardSlider;?>[i][0]).removeClass('next').addClass('view');
	    	               }else{
	    	                   reviewsArray<?php echo $cardSlider;?>[i][1] = 1;
	                           jQuery(reviewsArray<?php echo $cardSlider;?>[i][0]).removeClass('last').addClass('next');	                   
	    	               }
	                       i++;
	                    } while (i < rewArrLenght<?php echo $cardSlider;?>);
	                    setTimeout(function(){
	                        jQuery('.CS-<?php echo $cardSlider;?>.card-slider').removeClass('activeArrow').removeClass('rightMove');    
	                    }, 1100);
	                }, 1000);                
	           }, 10);
	        }
	    });
    }/*End jQuery(window).innerWidth() > 1199)*/
</script>
</section><!--End reviews-->
