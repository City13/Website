<section class="card-slider">
    <?php if (get_sub_field('card_slider_background') == 'Image' && get_sub_field('card_slider_background_image') != ''): ?>
        <img class="backImg" src="<?php echo get_sub_field('card_slider_background_image'); ?>" alt="" title=""/>
    <?php endif; ?>
    <div class="overed">
        <?php if (get_sub_field('card_slider_title') != ''): ?>
            <h2><?php echo get_sub_field('card_slider_title'); ?></h2>
        <?php endif; ?>
        <div class="container-custom">
            <span class="arrowReviews turnRight">
                <img src="/wp-content/themes/BizcorLuxury/images/card-slider/down-arrow-card.svg" alt="card-arrow" title="Guest Reviews"/>
            </span>
            <span class="arrowReviews turnLeft">
                <img src="/wp-content/themes/BizcorLuxury/images/card-slider/down-arrow-card.svg" alt="card-arrow" title="Guest Reviews"/>
            </span>
            <div class="wrap-slick">
                <?php $card = 1 ?>
                <?php if (have_rows('card_slider_repeater')): ?>
                    <?php while (have_rows('card_slider_repeater')): the_row(); ?>
                        <?php if ($card < 7): ?>
                            <div class="flex-custom-box card-<?php echo $card; ?>">
                                <div class="wrap imaged">
                                    <img class="img-left" src="<?php echo get_sub_field('card_slider_item_image'); ?>" alt=""/>
                                    <?php if (get_sub_field('card_slider_view_more_link') != ''): ?>
                                        <a href="<?php echo get_sub_field('card_slider_view_more_link'); ?>" class="viewMorePhotos">
                                            View More Photos
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12">
                                                <defs>
                                                    <style>.a {
															fill: #878787;
														}</style>
                                                </defs>
                                                <path class="a" d="M14.5-12a1.447,1.447,0,0,1,1.063.438A1.447,1.447,0,0,1,16-10.5v9a1.447,1.447,0,0,1-.437,1.063A1.447,1.447,0,0,1,14.5,0H1.5A1.447,1.447,0,0,1,.438-.437,1.447,1.447,0,0,1,0-1.5v-9a1.447,1.447,0,0,1,.438-1.062A1.447,1.447,0,0,1,1.5-12ZM14.313-1.5a.18.18,0,0,0,.125-.062.18.18,0,0,0,.063-.125v-8.625a.18.18,0,0,0-.062-.125.18.18,0,0,0-.125-.062H1.688a.18.18,0,0,0-.125.063.18.18,0,0,0-.062.125v8.625a.18.18,0,0,0,.063.125.18.18,0,0,0,.125.063ZM4-9.25a1.209,1.209,0,0,1,.891.359A1.209,1.209,0,0,1,5.25-8a1.209,1.209,0,0,1-.359.891A1.209,1.209,0,0,1,4-6.75a1.209,1.209,0,0,1-.891-.359A1.209,1.209,0,0,1,2.75-8a1.209,1.209,0,0,1,.359-.891A1.209,1.209,0,0,1,4-9.25ZM3-3V-4.5L4.25-5.75a.338.338,0,0,1,.25-.094.338.338,0,0,1,.25.094L6-4.5,9.75-8.25A.338.338,0,0,1,10-8.344a.338.338,0,0,1,.25.094L13-5.5V-3Z" transform="translate(0 12)"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="wrap texted">
                                    <div class="item description">
                                        <article>
                                            <h3><?php echo get_sub_field('card_slider_item_title'); ?></h3>
                                            <p><?php echo get_sub_field('card_slider_text_part'); ?></p>
                                            <?php if (get_sub_field('card_slider_button_line') != ''): ?>
                                                <h4><?php echo get_sub_field('card_slider_button_line'); ?></h4>
                                            <?php endif; ?>
                                        </article>
                                    </div>
                                    <?php if (get_sub_field('card_slider_item_ribbon') == 'yes'): ?>
                                        <div class="rating">
                                            <div class="box-wrap">
                                                <h6>Guest Rating</h6>
                                                <span class="firstSpan">5.0</span>
                                            </div>
                                            <div class="angle"></div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div><!--End flex-custom-box-->
                        <?php endif; ?>
                        <?php $card++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div><!--End container-custom-->
    </div><!--End overed-->
    <style>
		.card-slider .backImg {
			display: block;
			width: 100%;
			height: 100%;
			object-fit: cover;
			position: absolute;
			left: 0;
			top: 0;
		}
		.card-slider {
			position: relative;
			padding: 0px 25px;
			overflow: hidden;
        <?php if(get_sub_field('card_slider_background')!=''): ?> background: <?php echo get_sub_field('card_slider_background'); ?>;
        <?php endif; ?>
		}
		.card-slider .overed {
			padding: 50px 0 40px;
		}
		.card-slider .container-custom {
			position: relative;
			width: 1170px;
			max-width: 90%;
			margin: 0 auto;
			z-index: 2;
		}
		.card-slider .wrap-slick {
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
			text-align:center;
        }
		.card-slider .description article span{
		    display: block;
		    font-size: 16px;
		    color: #373737;
		}
		.card-slider .description article p {
		    color: rgba(41, 41, 41, 0.75);
		    margin: 30px 0;
		    /*overflow: hidden;*/
		    line-height: 28px;
		    max-height: 200px;
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
        	font-size: 10px;
        	background: var(--main_color);
        	color: rgba(255, 255, 255, 0.75);
        	margin-bottom: 3px;
        	text-transform: uppercase;
        	font-family: var(--body_font);
        }
		.card-slider .rating span {
		    font-size: 40px;
		    color: #fff;
		    display: block;
		    line-height: 1;
            font-family: var(--original_font);
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
		.card-slider .flex-custom-box {
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
		.card-slider.rightMove .flex-custom-box {
			left: auto;
			right: 0;
		}
		.arrowReviews {
			top: calc(50% - 20px);
			position: absolute;
			z-index: 8;
			display: block;
			cursor: pointer;
			transition: opacity 0.3s;
		}
		.arrowReviews:hover {
			opacity: 0.5;
		}
		.arrowReviews.turnRight {
			right: 20px;
		}
		.arrowReviews.turnLeft {
			left: 20px;
			transform: rotate(180deg);
		}
		/*
        .card-slider .flex-custom-box.view{
            z-index: 3;
        }
        .card-slider .flex-custom-box.next{
            transform: scale(1.08, 0.9);
            z-index: 2;
        }
        .card-slider .flex-custom-box.last{
            transform: scale(1.15, 0.8);
            z-index: 1;
        }
        */
		.card-slider .flex-custom-box.card-1 {
			z-index: 7;
		}
		.card-slider .flex-custom-box.card-2 {
			transform: scale(1.07, 0.9);
			z-index: 6;
		}
		.card-slider .flex-custom-box.card-3 {
			transform: scale(1.14, 0.8);
			z-index: 5;
		}
		.card-slider .flex-custom-box.card-4 {
			transform: scale(1.21, 0.7);
			z-index: 4;
		}
		.card-slider .flex-custom-box.card-5 {
			transform: scale(1.28, 0.6);
			z-index: 3;
		}
		.card-slider .flex-custom-box.card-6 {
			transform: scale(1.35, 0.5);
			z-index: 2;
		}
		.card-slider .flex-custom-box.card-7 {
			transform: scale(1.40, 0.4);
			z-index: 1;
		}
		/* FIX  */
		.card-slider .description article p {
			overflow: inherit;
			overflow-x: hidden;
			padding-right: 6px;
/* 			min-height: 195px; */
		}
        /*scroll*/
		.card-slider .description article p {
			scrollbar-width: thin;
		}
		.card-slider .description article p::-webkit-scrollbar {
			width: 1px;
		}
		.card-slider .description article p::-webkit-scrollbar-track {
			/*background: #46875d;*/
		}
		.card-slider .description article p::-webkit-scrollbar-thumb {
			background: rgba(41, 41, 41, 0.20);
			width: 10px;
		}
/* ----------------add-style------------------- */
.card-slider .overed {
    padding: 40px 0;
}
.card-slider h2 {
/*     text-align: center;
    position: relative;
    z-index: 2;
    margin-bottom: 50px;
    color: var(--second_color);
    font: 400 40px/46px var(--title_font);
    text-transform: capitalize; */
}
		
.card-slider.CS-1 .description article h3,
.card-slider .description article h3		{
/*     font: 700 22px/28px var(--paragraph_font);
    color: var(--title_color);
    text-transform: capitalize;
    margin-bottom: 30px;
    margin-top: 47px; */
}	
		
.card-slider .description article p {
/*     color: var(--paragraph_color);
    font: 400 16px/28px var(--paragraph_font);
    margin-top: 0;
    margin-bottom: 32px; */
}
.card-slider .description article h4 {
/*     color: rgba(41, 41, 41, 1);
    font: 500 16px/28px var(--paragraph_font); */
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
    font: 400 12px/16px Roboto Condensed;
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

.card-slider .rating .angle {
    position: absolute;
    top: calc(100% - 2px);
    left: 0;
    width: 100%;
    padding-top: 2px;
    background: var(--main_color);
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

.card-slider .rating .angle::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    border-bottom: none;
    border-top: 20px solid var(--main_color);
    border-right: 55px solid transparent;
}
		
		/* END  scroll  */
		/*Responsivness*//*Responsivness*//*Responsivness*/

/* END scroll */
/* Responsivness */
@media (max-width: 1440px) {
  .card-slider .flex-custom-box {
    width: 90%;
    right: 0;
  }
  .arrowReviews.turnRight {
    right: 70px;
  }
  .arrowReviews.turnLeft {
    left: 70px;
  }
}

@media (max-width: 1199px) {
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
    position: relative;
    float: left;
    transform: none!important;
    padding: 0!important;
  }
  .card-slider .wrap.imaged {
    height: 350px;
  }
  .card-slider .arrowReviews {
    display: none!important;
  }
  .card-slider .description article {
    padding: 0;
    text-align: center;
  }
  .card-slider .description article h4 {
    position: static;
  }
  .card-slider .rating {
    top: 0;
    right: 0;
  }
  .card-slider .slick-arrow {
    width: 38px;
    height: auto;
    top: 150px;
  }
  .card-slider .slick-next {
    transform: rotate(180deg);
  }
  .card-slider .slick-dots {
    bottom: auto;
    top: 300px;
    position: absolute;
  }
  .card-slider .wrap .viewMorePhotos {
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
  .card-slider .description article h3 {
    padding-right: 0;
  }
  .card-slider .description article p {
/*     max-height: none; */
	  max-height: 85px;
  }
  .arrowReviews.turnRight {
    right: 20px !important;
  }
  .arrowReviews.turnLeft {
    left: 20px !important;
  }
  .slick-dots li:hover,
  .slick-dots li.slick-active {
    background: var(--main_color) !important;
  }
}

@media (max-width: 767px) {
  .card-slider {
    max-width: 100%;
  }
  .card-slider .container-custom {
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
  .card-slider .description article p {
    padding-top: 0;
  }
  .rating .box-wrap {
    padding-top: 10px;
  }
  .card-slider .description article p {
    margin: 20px 0;
  }
  .card-slider .wrap .viewMorePhotos {
    padding: 10px 15px;
    font-size: 14px;
  }
  .card-slider .slick-arrow {
    width: 34px;
    height: auto;
    top: 160px;
  }
  .card-slider.CS-1 h2 {
    font-size: 32px;
    margin-bottom: 20px;
  }
}
		
		
    </style>
    <script>
        /*riviews animation*/
        $(document).on('ready', function () {
            if (jQuery(window).innerWidth() < 1200) {
                //console.log('Less than 1200');
                $('.card-slider .container-custom .wrap-slick').slick({
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><img src="/wp-content/themes/BizcorLuxury/images/slick-arrow.svg" alt="" /></button>',
                    nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Previous" tabindex="0" role="button"><img src="/wp-content/themes/BizcorLuxury/images/slick-arrow.svg" alt="" /></button>'
                });
            }
        });
        if (jQuery(window).innerWidth() > 1199) {

            /*slider size*/
            function cardLining(heiLine) {
                var highest = 0;
                jQuery(heiLine).each(function () {
                    var currentHei = jQuery(this).innerHeight();
                    if (currentHei > highest) {
                        highest = currentHei;
                    }
                });
                jQuery('.card-slider .wrap-slick').height(highest + 160);
            }

            cardLining('.card-slider .description');

            reviewsArray = [];
            jQuery('.card-slider .flex-custom-box').each(function (index) {
                var thisElement = jQuery(this);
                var addArr = [thisElement, index];
                reviewsArray.push(addArr);
                rewArrLenght = index + 1;
            })
            //alert(JSON.stringify(reviewsArray, null, 4));
            //alert(jQuery(reviewsArray[0][0]).attr('class'))

            jQuery('.arrowReviews.turnRight').click(function () {
                var hzCL = jQuery('.card-slider').hasClass('activeArrow');
                if (hzCL == false) {
                    jQuery('.card-slider').addClass('activeArrow');
                    jQuery('.card-slider .flex-custom-box.card-1').css({
                        'left': '115%',
                        'transform': 'scale(1.05, 0.85)'
                    });
                    setTimeout(function () {
                        i = 0;
						reviewsLength = 'card-'+ reviewsArray.length;
                        do {
                            if (reviewsArray[i][1] == 0) {
                                reviewsArray[i][1] = reviewsArray.length - 1;
                                jQuery(reviewsArray[i][0]).attr('style', '').css({'left': 0}).removeClass('card-1').addClass(reviewsLength);
                            } else if (reviewsArray[i][1] == 1) {
                                reviewsArray[i][1] = 0;
                                jQuery(reviewsArray[i][0]).removeClass('card-2').addClass('card-1');
                            } else if (reviewsArray[i][1] == 2) {
                                reviewsArray[i][1] = 1;
                                jQuery(reviewsArray[i][0]).removeClass('card-3').addClass('card-2');
                            } else if (reviewsArray[i][1] == 3) {
                                reviewsArray[i][1] = 2;
                                jQuery(reviewsArray[i][0]).removeClass('card-4').addClass('card-3');
                            } else if (reviewsArray[i][1] == 4) {
                                reviewsArray[i][1] = 3;
                                jQuery(reviewsArray[i][0]).removeClass('card-5').addClass('card-4');
                            } else if (reviewsArray[i][1] == 5) {
                                reviewsArray[i][1] = 4;
                                jQuery(reviewsArray[i][0]).removeClass('card-6').addClass('card-5');
                            } /*else if (reviewsArray[i][1] == 6) {
                                reviewsArray[i][1] = 5;
                                jQuery(reviewsArray[i][0]).removeClass('card-7').addClass('card-6');
                            }*/
                            i++;
                        } while (i < rewArrLenght);
                        setTimeout(function () {
                            jQuery('.card-slider').removeClass('activeArrow');
                        }, 500);
                    }, 400);
                }
            });

            jQuery('.arrowReviews.turnLeft').click(function () {
                var hzCL = jQuery('.card-slider').hasClass('activeArrow');
                if (hzCL == false) {
                    jQuery('.card-slider').addClass('activeArrow').addClass('rightMove');
                    jQuery('.card-slider .flex-custom-box').attr('style', '');
                    setTimeout(function () {
                        jQuery('.card-slider .flex-custom-box.card-1').css({
                            'right': '115%',
                            'transform': 'scale(1.05, 0.85)'
                        });
                        setTimeout(function () {
                            i = 0;
							reviewsLength = 'card-'+ reviewsArray.length;
							//console.log(reviewsLength);
                            do {
                                if (reviewsArray[i][1] == 0) {
                                    reviewsArray[i][1] = reviewsArray.length - 1;
                                    jQuery(reviewsArray[i][0]).attr('style', '').css({'right': 0}).removeClass('card-1').addClass(reviewsLength);
                                } else if (reviewsArray[i][1] == 1) {
                                    reviewsArray[i][1] = 0;
                                    jQuery(reviewsArray[i][0]).removeClass('card-2').addClass('card-1');
                                } else if (reviewsArray[i][1] == 2) {
                                    reviewsArray[i][1] = 1;
                                    jQuery(reviewsArray[i][0]).removeClass('card-3').addClass('card-2');
                                } else if (reviewsArray[i][1] == 3) {
                                    reviewsArray[i][1] = 2;
                                    jQuery(reviewsArray[i][0]).removeClass('card-4').addClass('card-3');
                                } else if (reviewsArray[i][1] == 4) {
                                    reviewsArray[i][1] = 3;
	                                jQuery(reviewsArray[i][0]).removeClass('card-5').addClass('card-4');
	                            } else if (reviewsArray[i][1] == 5) {
	                                reviewsArray[i][1] = 4;
	                                jQuery(reviewsArray[i][0]).removeClass('card-6').addClass('card-5');
	                            } /*else if (reviewsArray[i][1] == 6) {
	                                reviewsArray[i][1] = 5;
	                                jQuery(reviewsArray[i][0]).removeClass('card-7').addClass('card-6');
	                            }*/
                                i++;
                            } while (i < rewArrLenght);
                            setTimeout(function () {
                                jQuery('.card-slider').removeClass('activeArrow').removeClass('rightMove');
                            }, 500);
                        }, 400);
                    }, 10);
                }
            });
        }/*End jQuery(window).innerWidth() > 1199)*/
    </script>
</section><!--End reviews-->
