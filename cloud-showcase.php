<?php $cloudSection++;?>
<?php $slick++?>
<?php $fullscreen = get_sub_field('fullscreen_cloud_showcase'); ?>
<div class="cloud-section <?php if(get_sub_field('property_make_section_slider')=='yes'): ?>propertySlider<?php endif; ?> CS-<?php echo $cloudSection;?> <?php echo get_sub_field('custom_class'); ?>">

    
    
    <?php if(get_sub_field('units_source')!='Custom'): ?>
    <div ng-controller="PropertyController as pCtrl" class="inner-container">
		  <div class="cloud-make-box">
			  <div>
				<?php
				$units = apply_filters( 'streamline-featured-units', StreamlineCore_Wrapper::get_random_units( 3 ) );				
				foreach ($units as $unit):
					?>
                     <div class="cloud-make-margin">
                        <div class="cloud-make-block">
                                <a href="/<?=$unit['seo_page_name']?>/" class="cloud-make-block-item" target="_blank">
                                    <div class="property-make-img">
                                                                          <img src="<?=$unit['default_thumbnail_path']?>" alt="{[property.location_name]}" loading="lazy">

                                    </div>
                                    <div class="cloud-make-txt">
<h4><?=$unit['name']?></h4>
<h6><?= !empty($unit['location']) ? $unit['location'] : '30A, Florida'; ?></h6>
<span class="line"></span>
<ul>
                                            <li><?=$unit['bedrooms_number']?> Beds</li>
                                            <li><?=$unit['bathrooms_number']?> Baths</li>                                                        
                                            <li><?=$unit['max_occupants']?> Guests</li>
                                        </ul>
                                    </div>
                                    
                                </a>                  
                        </div><!--End cloud-make-block-->
                    </div><!-- end cloud-make-margin -->
                    
					<?php
				endforeach;
				?>
			</div>
		</div>
	</div>
    
    <?php else:?>
    
    
    <div class="inner-container">
        <?php if(get_sub_field('property_make_section_title')!=''): ?>
            <h2 class="cloud-title"><?php echo get_sub_field('property_make_section_title'); ?></h2>
        <?php endif; ?>
        <?php if(get_sub_field('property_make_section_slider')=='yes'): ?>
            <div class="arrowCustom arrowLeft">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="19.862px" height="37.325px" viewBox="0 0 19.862 37.325" style="enable-background:new 0 0 19.862 37.325;"
                     xml:space="preserve">
                    <style type="text/css">
                        .arrowLeft .st0{fill:#929292;}
                    </style>
                    <path class="st0" d="M19.534,17.8L2.063,0.328c-0.438-0.438-1.153-0.438-1.591,0l0,0c-0.438,0.438-0.438,1.153,0,1.591
                        l16.671,16.671L0.328,35.406c-0.438,0.438-0.438,1.153,0,1.591c0.438,0.438,1.153,0.438,1.591,0l17.588-17.588
                        c0.008-0.008,0.019-0.01,0.027-0.018l0,0C19.972,18.953,19.972,18.237,19.534,17.8z"/>
                </svg>            
            </div><!--End arrowCustom-->
            <div class="arrowCustom arrowRight">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="19.862px" height="37.325px" viewBox="0 0 19.862 37.325" style="enable-background:new 0 0 19.862 37.325;"
                     xml:space="preserve">
                    <style type="text/css">
                        .arrowRight .st0{fill:#929292;}
                    </style>
                    <path class="st0" d="M19.534,17.8L2.063,0.328c-0.438-0.438-1.153-0.438-1.591,0l0,0c-0.438,0.438-0.438,1.153,0,1.591
                        l16.671,16.671L0.328,35.406c-0.438,0.438-0.438,1.153,0,1.591c0.438,0.438,1.153,0.438,1.591,0l17.588-17.588
                        c0.008-0.008,0.019-0.01,0.027-0.018l0,0C19.972,18.953,19.972,18.237,19.534,17.8z"/>
                </svg>            
            </div><!--End arrowCustom-->
        <?php endif; ?>
        <?php if(get_sub_field('customize_property_make_section')=='yes'): ?>
            <div class="cloud-make-box">
                <?php if( have_rows('property_make_section_repeater') ): ?>
                    <?php while( have_rows('property_make_section_repeater') ): the_row(); ?>        
                        <div class="cloud-make-margin">
                            <div class="cloud-make-block">
                                <?php if(get_sub_field('property_make_section_property_link')!=''): ?>
                                    <a href="<?php echo get_sub_field('property_make_section_property_link'); ?>" class="cloud-make-block-item" target="_blank">
                                <?php endif; ?>
                                    <div class="property-make-img">
<img
  src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="
  data-src="<?php echo get_sub_field('property_make_section_property_image'); ?>"
  class="hover-img-default lazy-blur"
  alt="">
                                    <?php 
                                    $hoverMedia = get_sub_field('property_make_section_hover_image');
                                    $file_ext = pathinfo($hoverMedia, PATHINFO_EXTENSION);
                                    
                                    if (in_array(strtolower($file_ext), ['mp4', 'webm'])): ?>
                                       <video class="hover-img-swap" muted loop playsinline preload="none" data-src="<?php echo esc_url($hoverMedia); ?>">
                                       </video>
                                    <?php else: ?>
<img
  src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="
  data-src="<?php echo get_sub_field('property_make_section_property_image'); ?>"
  class="hover-img-default lazy-blur"
  alt="">
                                    <?php endif; ?>
                                        <?php if(get_sub_field('property_make_section_price_area')!=''): ?>
                                            <div class="property-make-price">
                                                <div class="make-price"><?php echo get_sub_field('property_make_section_price_area'); ?></div>
                                            </div>
                                        <?php endif; ?>
                                       <!-- <span class="first-square"></span>
                                                <span class="second-square"></span>
                                                <div class="hover_borders">
                                                    <span class="left"></span>
                                                    <span class="right"></span>
                                                    <span class="top"></span>
                                                    <span class="bottom_left"></span>
                                                    <span class="bottom_right"></span>
                                                </div> -->
                                    </div>
                                    <div class="cloud-make-txt cloud-description">
                                        <?php echo get_sub_field('property_make_section_property_description'); ?>
                                    </div>
                                    
                                <?php if(get_sub_field('property_make_section_property_link')!=''): ?>
                                    </a><!--End cloud-make-block-item-->
                                <?php endif; ?>                            
                            </div><!--End cloud-make-block-->
                        </div><!-- end cloud-make-margin -->
                    <?php endwhile;?>
                <?php endif;?>            
            </div><!-- end cloud-make-box -->        
        <?php else: ?>
            <div class="cloud-make-box">
                <div class="cloud-make-margin">
                    <div class="cloud-make-block">
                        <a href="#" class="cloud-make-block-item" target="_blank">
                            <div class="property-make-img">
                                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/image_149356428.jpeg" alt="" loading="lazy">
                                <div class="property-make-price">
                                    <div class="make-price">






                                        <style>
                                            :root {
                                                --price_color: #fff;
                                            }
                                        </style>




                                        <p>AVG 4 BEDROOM MADE</p>
                                        <p>UP TO <span>$136,522</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-make-txt">
                                <h4>Right Near The Beach</h4>
                                <ul>
                                    <li>3 bathrooms</li>
                                    <li>Beach Front</li>
                                </ul>
                            </div>
                            
                        </a><!--End cloud-make-block-item-->
                    </div><!--End cloud-make-block-->
                </div><!-- end cloud-make-margin -->
                <div class="cloud-make-margin">
                    <div class="cloud-make-block">
                        <a href="#" class="cloud-make-block-item" target="_blank">
                            <div class="property-make-img">
                                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/image_149185869.jpeg" alt="" loading="lazy">
                                <div class="property-make-price">
                                    <div class="make-price">
                                        <p>AVG 4 BEDROOM MADE</p>
                                        <p>UP TO <span>$136,522</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-make-txt">
                                <h4>The Quit Scolling Bungalo </h4>
                                <ul>
                                    <li>5 bathrooms</li>
                                    <li>Ocean View</li>
                                </ul>
                            </div>
                            
                        </a><!--End cloud-make-block-item-->
                    </div><!--End cloud-make-block-->
                </div><!-- end cloud-make-margin -->
                <div class="cloud-make-margin">
                    <div class="cloud-make-block">
                        <a href="#" class="cloud-make-block-item" target="_blank">
                            <div class="property-make-img">
                                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/image_150395811.jpeg" alt="" loading="lazy">
                                <div class="property-make-price">
                                    <div class="make-price">
                                        <p>AVG 4 BEDROOM MADE</p>
                                        <p>UP TO <span>$136,522</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-make-txt">
                                <h4>The Loft</h4>
                                <ul>
                                    <li>4 bathrooms</li>
                                    <li>Beach Front</li>
                                </ul>
                            </div>
                            
                        </a><!--End cloud-make-block-item-->
                    </div><!--End cloud-make-block-->
                </div><!-- end cloud-make-margin -->
            </div><!-- end cloud-make-box -->
        <?php endif; ?>                                
    </div><!--End inner-container-->
    <?php endif; ?>
    
    
<style>
html, body {
    overflow-x: hidden;
}
	
 .cloud-section {
    position: relative;
    --cloud-hover-zoom: 1.3;
    --cloud-hover-transition-in: 0.2s ease-in-out;
    --cloud-hover-transition-out: 0.1s ease-in-out;
    --cloud-hover-delay: 0.8s;
    --cloud-hover-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    --cloud-padding-top: 40px;
    --cloud-padding-right: 5px;
    --cloud-padding-bottom: 40px;
    --cloud-padding-left: 5px;
    --cloud-header-top: 3px;
    --cloud-debug-outline: none; /* change to 'none' to hide or 1px dashed blue to see */
} 


	
.cloud-section .cloud-make-block {
  transform-origin: center center;
  transition: transform var(--cloud-hover-transition-in);
}

 .cloud-section .cloud-make-margin.hover-delay-active .cloud-make-block {
  transform: scale(var(--cloud-hover-zoom));
  box-shadow: var(--cloud-hover-shadow);
    transition: 
          transform var(--cloud-hover-transition-in),
          box-shadow var(--cloud-hover-transition-in);
    transition-delay: var(--cloud-hover-delay);
}

.lazy-blur {
  filter: blur(20px);
  transition: filter 0.6s ease-out;
}

.lazy-blur:not([data-src]) {
  filter: none;
}

/*property-section*/
<?php if(get_sub_field('customize_font_size')=='yes'): ?>
    .cloud-section h2 {
        font-size: <?php the_sub_field('section_title_font_size'); ?>;
    }
    .cloud-section .cloud-make-block .cloud-make-txt h4 {
        font-size: <?php the_sub_field('titles_font_size'); ?>;
    }
    .cloud-section .cloud-make-block .cloud-make-txt ul li {
        font-size: <?php the_sub_field('text_font_size'); ?>;
    }
    .cloud-section .property-make-price > .make-price > p {
        font-size: <?php the_sub_field('item_centered_text_first_row_font_size'); ?>;
    }
    .cloud-section .property-make-price > .make-price > p:last-child {
        font-size: <?php the_sub_field('item_centered_text_second_row_font_size'); ?>;
    }
<?php elseif($cloudSection < 2): ?>
    .cloud-section .property-make-price > .make-price > p {
        font-size: 20px;
    }
    .cloud-section .property-make-price > .make-price > p:last-child {
        font-size: 30px;
    }
<?php endif; ?>

.cloud-section .inner-container {
<?php if(get_sub_field('fullscreen_cloud_showcase')): ?>
    width: 100% !important;
    max-width: none !important;
    margin: 0 !important;
<?php else: ?>
    max-width: <?php echo get_sub_field(‘property_make_section_width_size’); ?>;
    margin: 0 auto;
<?php endif; ?>
}

<?php if($cloudSection < 2): ?>
/*Basic Styles*/
.cloud-section{
    background: #6CBFB00D;
}
.cloud-section .inner-container{
    margin: 0 var(--cloud-padding-left);
    position: relative;    
}
    /* Removed duplicate inner-container declarations in favor of unified block above */

.cloud-section h2.cloud-title {
    position: absolute;
    top: -20px;
	left: 57px;
    z-index: 0;
    margin: 0;
    text-align: left;
    color: var(--main_color) !important;
}

.cloud-section .cloud-make-box:before, 
.cloud-section .cloud-make-box:after{
    content:"";
    display:block;
    height:0;
    overflow:hidden;    
    clear:both;
}
.cloud-section .cloud-make-box {
    overflow: visible;
}
	.cloud-section .cloud-make-margin {
    padding-top: var(--cloud-padding-top);
	padding-right: var(--cloud-padding-right);
	padding-bottom: var(--cloud-padding-bottom);
	padding-left: var(--cloud-padding-left);
    width: 33.333%;
    text-align: center;
    display: inline-block;
    vertical-align: top;
    overflow: visible;
    position: relative;
    z-index 1;
}
.cloud-section .cloud-make-block {
    position: relative;
    z-index: 1;
}


.cloud-section .property-make-img{
    position: relative;
    overflow: hidden;
}



.cloud-section .property-make-img {
    position: relative;
}

.cloud-section .hover-img-default {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 1;
    z-index: 1;
    transition: opacity var(--cloud-hover-transition-in);
    transition-delay: 0s;
}

.cloud-section .hover-img-swap {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    z-index: 2;
    transition: opacity var(--cloud-hover-transition-in);
    transition-delay: 0s;
}

.cloud-section .cloud-make-margin.hover-delay-active .hover-img-default {
    opacity: 0;
    z-index: 1;
    transition: opacity var(--cloud-hover-transition-in);
    transition-delay: var(--cloud-hover-delay);
}

.cloud-section .cloud-make-margin.hover-delay-active .hover-img-swap {
    opacity: 1;
    z-index: 2;
    transition: opacity var(--cloud-hover-transition-in);
    transition-delay: var(--cloud-hover-delay);
}

.cloud-section .cloud-make-margin.hover-delay-active .hover-img-swap {
        opacity: 1;
    z-index: 2;
    transition-delay: var(--cloud-hover-delay);
}

.cloud-section .cloud-make-block .property-make-img {
    overflow: hidden;
    position: relative;
    /* background: #2A2A2A; */
}

.cloud-section.propertySlider .slick-list,
.cloud-section.propertySlider .slick-track {
    overflow: visible !important;
}
.cloud-section .cloud-make-block .property-make-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 1;
    transition: transform var(--cloud-hover-transition-out);
    transition-delay: 0s;
}

.cloud-section .property-make-img img {
    transition: transform var(--cloud-hover-transition-out);
    transition-delay: var(--cloud-hover-delay);
}
 .cloud-section .cloud-make-margin.hover-delay-active {
  position: relative;
  z-index: 20;
  transform-origin: center;
}

	
.cloud-section .cloud-make-block .cloud-make-txt {
    background: #fff;
    position: relative;
    z-index: 10;
    padding: 19px 0;
}
.cloud-section .cloud-make-block  .line {
    width: 42px;
    display: block;
    margin:0 auto 8px auto;
    height: 2px;
    background: #438CCA;
}
	.cloud-section .cloud-make-block .cloud-make-txt span.line {
		display: block;
		margin: 7px 10px;
		height: 3px;
		width: 60px;
		background: var(--main_color);
		position: relative;
		transition: width var(--cloud-hover-transition-out);
		transition-delay: 0s;
	}
	
	.cloud-section .cloud-make-margin.hover-delay-active .cloud-make-txt span.line {
	  width: calc(100% - 20px);
	  transition: width var(--cloud-hover-transition-in);
	  transition-delay: var(--cloud-hover-delay);
	}
.cloud-section .property-make-price {
    position: absolute;
    width: 100%;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
.cloud-section .property-make-price > .make-price > p {
	margin: 0;
	color: rgba(41, 41, 41, .75);
	font-size: 16px;
	font-weight: 500;
}
.cloud-section .property-make-price > .make-price > p:last-child {
	font-weight: 500;
	color: #292929;
	font-size: 32px;
	line-height: 36px;
    font-family: var(--original_font);
}
.cloud-section .property-make-price > .make-price > p:last-child > span {
    color: var(--price_color);
}
.cloud-section .property-make-price > .make-price {
	padding: 12px;
	background-color: rgba(255, 255, 255, 0.8);
	max-width: 310px;
	border: 2px solid #fff;
	margin: 0 auto;
}
	.cloud-section .cloud-make-block .cloud-make-txt h4 {
	margin: 0 10px 8px 10px;
	text-align: left;
	font: 400 20px/30px var(--original_font);
	letter-spacing: 0px;
	color: #292929;
	white-space: nowrap;
	max-width: 100%;
	overflow: hidden;
	
}
.cloud-section .cloud-make-block .cloud-make-txt h6 {
  margin: 0 10px 6px 10px;
  text-align: left;
  font: 500 16px/24px var(--body_font);
  color: var(--main_color);
}

	.cloud-section .cloud-make-block .cloud-make-txt ul {
	    margin: 0;
	    padding: 0 10px;
	    text-align: left;
	}
.cloud-section .cloud-make-block .cloud-make-txt ul li {
	display: inline-block;
	color: rgba(41, 41, 41, .75);
	text-transform: capitalize;
	font: 500 16px/22px var(--body_font);
}
.cloud-section .cloud-make-block .cloud-make-txt ul li:after {
    content: " | ";
}
	.cloud-section .cloud-make-block .cloud-make-txt ul li:last-child:after {
	    content: " ";
	}
	.cloud-section .cloud-description {
	    text-align: left;
	}
/*Slider*/
.cloud-section.propertySlider{
    padding-left: 50px;
    padding-right: 50px;
}
.cloud-section.propertySlider  .slick-list{
    padding: 20px 0px!important;
}
.cloud-section.propertySlider h2{
    margin-bottom: 20px;
    color: #292929;
}
.cloud-section.propertySlide .arrowCustom svg{
    height: 100%;
}
.cloud-section.propertySlider .arrowCustom:hover .st0{
    fill: var(--main_color);
}

.cloud-section.propertySlider .arrowCustom:hover svg {

    transform: scale(1.6);
}
.cloud-section.propertySlider .arrowCustom {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 100px;
    height: 100%;
    cursor: pointer;
    z-index: 100;
    display: flex;
    align-items: center;
    justify-content: center;
    pointer-events: auto;
}
.cloud-section.propertySlider .arrowCustom.arrowLeft{
    right: calc(100% - 50px);
    transform: rotate(180deg);
}
.cloud-section.propertySlider .arrowCustom.arrowRight{
    left:calc(100% - 50px);
}
	.cloud-section.propertySlider .cloud-make-box {
	    padding-left: 55px;
	    padding-right: 55px;
	    overflow: visible;
	}
	
	    .cloud-section {
        padding-top: 20px; !important;
    }
/*Responsivness*//*Responsivness*//*Responsivness*/
@media (max-width: 1200px) {
    .cloud-section {
        padding: 50px 10px;
    }
    .cloud-section h2 {
        margin-bottom: 40px;
    }
}
@media (max-width: 991px) {
	  .cloud-section .hover-img-swap {
    display: none !important;
  }
	
			  .cloud-section .cloud-make-margin.hover-delay-active .cloud-make-block {
       transform: scale(1.1) !important;
    transition-delay: 0s !important;
				  box-shadow: none !important;
  }
	  .cloud-section .cloud-make-margin.hover-delay-active .hover-img-default {
    opacity: 1 !important;
  }

    .cloud-section.CS-1 h2.cloud-title {
        padding-top: 7px;
    }

    .cloud-section .property-make-price > .make-price > p {
        font-size: 15px;
    }
    .cloud-section .property-make-price > .make-price > p:last-child {
        font-size: 24px;
    }
    .cloud-section .property-make-price > .make-price {
        max-width: 230px;
    }
    .cloud-section .cloud-make-box {
        flex-wrap: wrap;
    }
    .cloud-section .cloud-make-margin {
        flex: 100%;
    }
    .cloud-section .cloud-make-margin{
        width: 100%;
    }
    .cloud-section .cloud-make-block {
        margin: 0 auto;
        max-width: none;
    }
    .cloud-section h2 {
        font-size: 32px;
    }
}
@media screen and (max-width: 767px) {
    .cloud-section .cloud-make-box{
        flex-direction: column;
    }
	

	
.cloud-section h2.boxtitle, .stories h2.boxtitle, .category h2.boxtitle {
    font-size: 32px;
    margin: 0 var(--cloud-padding-left) 20px var(--cloud-padding-left);
    text-align: left;
    color: var(--main_color) !important;
}

    .cloud-section {
        padding: 0 15px 0 15px !important;
		margin-left: -15px; !important;
    }
    .featured-block .featured-txt h4 {
        font-size: 18px;
    }
    .featured-block .featured-txt ul li {
        font-size: 12px;
    }
    .featured-margin {
        padding: 0;
    }


     .cloud-section.propertySlider .arrowCustom{
        width: 65px;
        height:100%;
        background:transparent;
        background-image:url(/wp-content/uploads/2020/04/right-arrow-chevron.png);
        background-size:20px;
        background-position:center;
        background-repeat:no-repeat;
        border-radius:0%;
        top: 50% !important;
        bottom: auto;
        transform: translateY(-50%)
    }
     .cloud-section.propertySlider .arrowCustom svg{
        opacity:0;
    }
    .cloud-section.propertySlider .arrowCustom.arrowRight{
        right: calc(0px - 15px);
        left: auto;
    }
    .cloud-section.propertySlider .arrowCustom.arrowLeft{
        left: calc(0px - 15px);
        right: auto;
        transform: translateY(-50%) rotate(180deg);
    }
    .featured-block{
        margin:10px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
    }
    .cloud-section{
        padding-right:15px;
        padding-left:15px;
    }
    .cloud-section.propertySlider .slick-list {
    	padding: 0 !important;
    }
}
.cloud-section * {
  outline: var(--cloud-debug-outline);
}

<?php endif; ?>


</style>
<?php if($slick < 2):?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<?php endif;?>
<script>
    <?php if(get_sub_field('property_make_section_slider')=='yes' && get_sub_field('units_source')=='Custom'): ?>
  var isMobile = jQuery(window).innerWidth() <= 991;
  var slidesQ = isMobile ? 1 : 5;

  jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-box').on('init', function() {
    autoShrinkHeadings();
  });

  jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-box').slick({
      slidesToShow: slidesQ,
      arrows: true,
      prevArrow: jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .arrowLeft'),
      nextArrow: jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .arrowRight'),
      centerMode: false,
      slidesToScroll: isMobile ? 1 : slidesQ,
      speed: isMobile ? 300 : 900,
      cssEase: 'ease-out',
      swipe: isMobile,
      draggable: isMobile,
	lazyLoad: 'ondemand',
	infinite: false,
  });

setTimeout(() => {
  const preloadIndexes = [];
  for (let i = 0; i < slidesQ + 2; i++) {
    preloadIndexes.push(i);
  }

  preloadIndexes.forEach(i => {
    const $img = jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-box .slick-slide').eq(i).find('img[data-lazy]');
    $img.each(function() {
      jQuery(this).attr('src', jQuery(this).data('lazy')).removeAttr('data-lazy');
    });
  });
}, 500);
  
  // Auto-trigger hover on mobile for current slide
  jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-box').on('afterChange', function(event, slick, currentSlide) {
    if (jQuery(window).width() <= 991) {
      var $cards = jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-margin');
      $cards.removeClass('hover-delay-active');
      jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .slick-current').addClass('hover-delay-active');
    }

    autoShrinkHeadings();
  });
  
  // Auto-apply hover on initial page load for mobile
  if (jQuery(window).width() <= 991) {
    setTimeout(function() {
      jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-margin.slick-current').addClass('hover-delay-active');
    }, 500);
  }
  
    <?php endif; ?>
    
    function propertyMakeItems<?php echo $cloudSection;?>(){
                var bI = jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-block .property-make-img').width()/424 * 270;
        jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-block .property-make-img').height(bI);                                         
    }
    propertyMakeItems<?php echo $cloudSection;?>();
    jQuery(window).resize(function(){ 
        jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-box').slick('setPosition');
        setTimeout(function() {
          propertyMakeItems<?php echo $cloudSection;?>();
        }, 100);
    });

    jQuery(window).on("orientationchange", function() {
        jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-box').slick('setPosition');
        setTimeout(function() {
          propertyMakeItems<?php echo $cloudSection;?>();
        }, 100);
    });
    
 jQuery(document).ready(function() {
   jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-margin').each(function() {
     var self = jQuery(this);
 
     self.on('mouseenter', function() {
       clearTimeout(self.data('hover-timeout'));
       self.data('hover-timeout', setTimeout(function() {
         self.addClass('hover-delay-active');
       }, 0));
     });
 
     self.on('mouseleave', function() {
       clearTimeout(self.data('hover-timeout'));
       self.removeClass('hover-delay-active');
     });
 
     // On mobile, trigger hover only on a tap, not touchstart/scroll
     self.on('click', function(e) {
       e.stopPropagation();
       clearTimeout(self.data('hover-timeout'));
       self.data('hover-timeout', setTimeout(function() {
         self.addClass('hover-delay-active');
       }, 0));
     });
   });
 });
        // Reset zoom when arrows are clicked
        jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .arrowCustom').on('click', function() {
            jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-margin').removeClass('hover-delay-active');
        });

	jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-box').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
	  const preloadIndexes = [nextSlide - 1, nextSlide, nextSlide + 1];
	
	  preloadIndexes.forEach(i => {
	    if (i >= 0 && i < slick.$slides.length) {
	      const $img = jQuery(slick.$slides[i]).find('img[data-lazy]');
	      $img.each(function() {
	        jQuery(this).attr('src', jQuery(this).data('lazy')).removeAttr('data-lazy');
	      });
	    }
	  });
	});


function autoShrinkHeadings() {
  jQuery('.cloud-section.CS-<?php echo $cloudSection;?> .cloud-make-txt h4').each(function(index) {
    const $el = jQuery(this);
    const containerWidth = $el.parent().width() - 8;
    let fontSize = 12;
    const maxFontSize = 24;

    $el.css({
      'font-size': fontSize + 'px',
      'white-space': 'nowrap',
      'overflow': 'hidden',
      'max-width': '100%'
    });

    while ($el[0].scrollWidth <= containerWidth && fontSize < maxFontSize) {
      fontSize++;
      $el.css('font-size', fontSize + 'px');
    }

    if ($el[0].scrollWidth > containerWidth) {
      fontSize--;
      $el.css('font-size', fontSize + 'px');
    }

  });
}
jQuery(document).ready(function() {
  autoShrinkHeadings();
  jQuery(window).on('resize', function() {
    autoShrinkHeadings();
  });
});

if (jQuery(window).width() > 991) {
  jQuery('.cloud-section .hover-img-swap').each(function () {
    const video = this;
    const container = jQuery(video).closest('.cloud-make-margin');

    container.on('mouseenter', function () {
      if (!video.src && video.dataset.src) {
        video.src = video.dataset.src;
        video.load();
      }

      setTimeout(() => {
        if (container.hasClass('hover-delay-active')) {
          video.play();
        }
      }, 800);
    });

    container.on('mouseleave', function () {
      video.pause();
      video.removeAttribute('src');
      video.load();
    });
  });
}

document.addEventListener('DOMContentLoaded', function () {
  const lazyImages = document.querySelectorAll('img.lazy-blur');
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.onload = () => img.classList.remove('lazy-blur');
        obs.unobserve(img);
      }
    });
  });
  lazyImages.forEach(img => observer.observe(img));
});



</script>
</div><!--End property-make v1.98.5 Images resize with window -->
