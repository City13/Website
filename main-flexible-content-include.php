<?php   

    if(get_field('add_page_id_to_copy_flexible_content')){

        $flexCont = get_field('add_page_id_to_copy_flexible_content');  

    }else{

        if(get_field('flexible_content')){

            $flexCont = get_the_ID();

        }else{

            //$flexCont = wp_get_post_parent_id( $post_ID );

        }    

    }

    

 	// loop through the rows of data

    while ( has_sub_field('flexible_content', $flexCont) ) :



		if( get_row_layout() == 'locations_section' ):

        	include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/locations-section.php');



        elseif( get_row_layout() == 'category_section' ): 

        	include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/category-section.php');



		elseif( get_row_layout() == 'experience_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/experience-section.php');



        elseif( get_row_layout() == 'featured_vacation_section' ): 

        	include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/featured-vacation-section.php');



		elseif( get_row_layout() == 'grid_stories_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/grid-stories-section.php');

            

        elseif( get_row_layout() == 'reviews_slider' ): 

        	include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/reviews.php');



		elseif( get_row_layout() == 'side_paralax_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/side-paralax-section.php');                                              



		elseif( get_row_layout() == 'icon_text_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/icon-text-section.php');



		elseif( get_row_layout() == 'property_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/property-section.php');



		elseif( get_row_layout() == 'wave_text_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/wave-text-section.php');



		elseif( get_row_layout() == 'faq_accordion_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/faq-accordion-section.php');



		elseif( get_row_layout() == 'team_repeater' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/team-repeater.php');



		elseif( get_row_layout() == 'specials_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/specials-section.php');

            

		elseif( get_row_layout() == 'special_subscribtion_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/special-subscribtion-section.php');

            

		elseif( get_row_layout() == 'activities_child_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/activities-child-section.php');



		elseif( get_row_layout() == 'simple_text_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/simple-text-section.php'); 



		elseif( get_row_layout() == 'review_us_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/review-us-section.php');  



		elseif( get_row_layout() == 'property_banner' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/property-management-banner.php');   



		elseif( get_row_layout() == 'trust_logos_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/trust-logos-section.php');        



		elseif( get_row_layout() == 'contact_us_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/contact-us-section.php');  



		elseif( get_row_layout() == 'two_parallax_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/two-parallax-section.php');                    



		elseif( get_row_layout() == 'concierge_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/concierge-section.php'); 



		elseif( get_row_layout() == 'card_slider' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/card-slider.php');



		elseif( get_row_layout() == 'gallery_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/gallery-section.php');



		elseif( get_row_layout() == 'side_image_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/side-images-section.php');



		elseif( get_row_layout() == 'window_image_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/window-image-section.php');



		elseif( get_row_layout() == 'activities_icon_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/activities-icon-section.php');



		elseif( get_row_layout() == 'check_list_section' ):

			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/check-list-section.php');
			

        elseif( get_row_layout() == 'wide_team_repeater' ):
			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/team-repeater-wide.php');   
			

        elseif( get_row_layout() == 'button_section' ):
			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/button-section.php');         

		elseif( get_row_layout() == 'cloud_showcase' ):
			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/cloud-showcase.php');

		elseif( get_row_layout() == 'top_ten_cloud_showcase' ):
			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/top-ten-cloud-showcase.php');

		elseif( get_row_layout() == 'featured_hero_showcase' ):
			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/cloud-featured-property.php');

		elseif( get_row_layout() == 'trust_icons_section' ):
			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/trust-icons-section.php');

		elseif( get_row_layout() == 'property_review_section' ):
			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/property-review-section.php');

		elseif( get_row_layout() == 'beach_town_container' ):
			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/beach-town-container.php');

		elseif( get_row_layout() == 'special_concierge_section' ):
			include( get_theme_root().'/'.get_option('stylesheet').'/templates-parts/flexible-content/special-concierge-section.php');


        endif;

    endwhile;    

?>





























