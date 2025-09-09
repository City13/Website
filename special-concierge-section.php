<?php
$bgImage = get_sub_field('background_image');
$header = get_sub_field('header_title');
$tiles = get_sub_field('concierge_tiles');
$ctaText = get_sub_field('cta_button_text');
$ctaLink = get_sub_field('cta_button_link');
?>

<section class="special-concierge-section" style="
    background-image: url('<?php echo esc_url($bgImage['url']); ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 80px 0;
    position: relative;
    width: 100%;
    overflow: hidden;
">
    <!-- Add overlay for better text visibility on any background -->
    <div class="overlay" style="
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    "></div>
    
    <div class="container" style="
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
        color: #fff;
        position: relative;
        z-index: 2;
        padding: 0 20px;
    ">
        <?php if ($header): ?>
            <h2 style="
                font-size: 6rem;
                font-family: 'Marcellus', serif;
                margin-bottom: 40px;
                color: #fff;
                font-weight: 500;
            "><?php echo esc_html($header); ?></h2>
        <?php endif; ?>
        
        <?php if ($tiles && is_array($tiles) && count($tiles) > 0): ?>
            <div class="concierge-tiles" style="
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 30px;
                margin-bottom: 50px;
            ">
                <?php foreach ($tiles as $tile): ?>
                    <?php if (isset($tile['tile_image']) && isset($tile['tile_title'])): ?>
                        <div class="tile" style="
                            flex: 1 1 300px;
                            min-width: 250px;
                            max-width: 350px;
                            margin-bottom: 20px;
                            transition: transform 0.3s ease;
                        " onmouseover="this.style.transform='scale(1.03)'" 
                           onmouseout="this.style.transform='scale(1)'">
                            <?php if (isset($tile['tile_image']['url'])): ?>
                                <div class="image-container" style="
                                    height: 200px;
                                    overflow: hidden;
                                    border-radius: 8px;
                                    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                                ">
                                    <img src="<?php echo esc_url($tile['tile_image']['url']); ?>" 
                                         alt="<?php echo esc_attr($tile['tile_title']); ?>" 
                                         style="
                                             width: 100%;
                                             height: 100%;
                                             object-fit: cover;
                                         ">
                                </div>
                            <?php endif; ?>
                            <h4 style="
                                margin-top: 15px;
                                font-size: 20px;
                                color: #fff;
                                font-family: 'Raleway', sans-serif;
                                text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
                            "><?php echo esc_html($tile['tile_title']); ?></h4>
                            
                            <?php if (isset($tile['tile_description'])): ?>
                                <p style="
                                    color: #f1f1f1;
                                    font-size: 16px;
                                    line-height: 1.5;
                                "><?php echo esc_html($tile['tile_description']); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <?php if ($ctaText && $ctaLink): ?>
            <div style="position: relative; width: 100%; height: 100px;">
                <a href="<?php echo esc_url($ctaLink['url']); ?>" 
                   class="beach-town-button">
                    <?php echo esc_html($ctaText); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Add beach-town-button style and media queries for better responsiveness -->
<style>
    /* Make sure fonts are loaded */
    @import url('https://fonts.googleapis.com/css2?family=Marcellus&family=Raleway:wght@400;500;700&display=swap');
    
    .beach-town-button {
        display: inline-block;
        padding: 12px 28px; /* Reduced padding around text */
        background-color: #6ec0b0;
        color: #ffffff;
        text-decoration: none;
        border-radius: 3px;
        font-weight: 700;
        font-size: 2rem;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
        position: absolute;
        bottom: 80px; /* Position from bottom */
        left: 50%;
        transform: translateX(-50%);
    }
    
    .beach-town-button:hover {
        transform: translateX(-50%) scale(1.05);
        background-color: #8fd9c9; /* Brighter green on hover */
        color: #ffffff; /* Ensure text stays white */
    }
    
    @media (max-width: 768px) {
        .special-concierge-section {
            padding: 60px 0;
        }
        
        .special-concierge-section h2 {
            font-size: 2rem;
        }
        
        .concierge-tiles {
            gap: 20px;
        }
        
        .tile {
            flex: 1 1 100%;
            max-width: 100%;
        }
        
        .beach-town-button {
            font-size: 1.8rem;
            bottom: 60px;
        }
    }
    
    @media (max-width: 480px) {
        .special-concierge-section {
            padding: 40px 0;
        }
        
        .special-concierge-section h2 {
            font-size: 1.8rem;
            margin-bottom: 30px;
        }
        
        .beach-town-button {
            width: 80%;
            padding: 10px 20px;
            font-size: 1.5rem;
            bottom: 40px;
        }
    }
</style>
