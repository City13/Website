<?php if( have_rows('property_reviews') ): ?>
<section class="review-slider-section">
<h2 class="review-slider-heading" style="color: #6ec0b0; font-size: 3rem; text-align: center; margin-bottom: 40px; font-family: var(--main_font );">
  What Our Guests Are Saying
</h2>
  <div class="review-slider-container">
    <div class="review-slider-wrapper">
      <div class="review-slider">
        <?php while( have_rows('property_reviews') ): the_row(); 
          $image = get_sub_field('review_image');
          $header = get_sub_field('review_header');
          $text = get_sub_field('review_body');
          $author = get_sub_field('review_author');
          $date = get_sub_field('review_date');
          $stars = get_sub_field('review_stars');
          $link = get_sub_field('review_link');
          $font_size = get_sub_field('review_font_size');
          $title_size = get_sub_field('review_title_size');
          
          // Default font size if not specified
          if(!$font_size) {
            $font_size = '1'; // Default size in rem
          }
          
          // Default title size if not specified
          if(!$title_size) {
            $title_size = '1.5'; // Default size in rem
          }
        ?>
        <div class="review-slide">
          <a href="<?php echo esc_url($link); ?>" class="review-image" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
            <div class="review-overlay">
              <div class="review-header">
                <h3 style="font-size: <?php echo esc_attr($title_size); ?>rem;"><?php echo esc_html($header); ?></h3>
                <div class="review-stars">
                  <?php for ($i = 0; $i < $stars; $i++) echo '⭐'; ?>
                </div>
              </div>
              <p class="review-text" style="font-size: <?php echo esc_attr($font_size); ?>rem;"><?php echo esc_html($text); ?></p>
              <p class="review-author">- <?php echo esc_html($author); ?>, <?php echo esc_html($date); ?></p>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <button class="slider-arrow prev">‹</button>
    <button class="slider-arrow next">›</button>
  </div>
</section>
<?php endif; ?>

<style>
.review-slider-section {
  padding: 60px 0;
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

.review-slider-heading {
  text-align: center;
  font-size: 2.5rem;
  margin-bottom: 40px;
}

.review-slider-container {
  position: relative;
}

.review-slider-wrapper {
  position: relative;
  overflow: hidden;
}

.review-slider {
  display: flex;
  transition: transform 0.4s ease;
  touch-action: pan-y;
}

.review-slide {
  min-width: 70%;
  padding: 0 15px;
  box-sizing: border-box;
  flex-shrink: 0;
}

.review-image {
  height: 500px;
  background-size: cover;
  background-position: center;
  border-radius: 10px;
  position: relative;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  display: block;
  text-decoration: none;
  color: inherit;
}

.review-overlay {
  background-color: rgba(110, 192, 176, 0.75);
  color: white;
  padding: 20px;
  position: absolute;
  bottom: 0;
  width: 100%;
  box-sizing: border-box;
}

.review-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.review-header h3 {
  font-size: 1.5rem;
  margin: 0;
}

.review-stars {
  font-size: 1.25rem;
}

.review-text {
  margin-top: 10px;
  font-size: 1rem;
}

.review-author {
  font-style: italic;
  font-size: 0.9rem;
  margin-top: 10px;
}

.slider-arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 50px;
  height: 50px;
  background: rgba(255, 255, 255, 0.8);
  border: none;
  border-radius: 50%;
  font-size: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 10;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
  line-height: 1;
}

.slider-arrow:hover {
  background: white;
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.slider-arrow.prev {
  left: 10px;
}

.slider-arrow.next {
  right: 10px;
}

/* Mobile styles */
@media (max-width: 768px) {
	
  .review-slider-heading {
    font-size: 2rem !important;
  }
	
  .slider-arrow {
    display: none; /* Hide arrows on mobile */
  }
  
  .review-slide {
    min-width: 90%;
  }
  
  .review-image {
    height: 400px;
  }
	
  .review-header h3 {
    font-size: 1.2rem !important;
  }

  .review-text {
    font-size: 0.7rem !important;
  }

  .review-author {
    font-size: 0.8rem !important;
  }
	
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const slider = document.querySelector('.review-slider');
  const slides = document.querySelectorAll('.review-slide');
  const prevBtn = document.querySelector('.slider-arrow.prev');
  const nextBtn = document.querySelector('.slider-arrow.next');

  // Exit if no slides
  if (!slides.length) return;

  // Create clones for infinite scrolling
  function setupInfiniteSlider() {
    // Clone first and last slides
    slides.forEach(slide => {
      const clone = slide.cloneNode(true);
      slider.appendChild(clone);
    });
    
    // Add one more set of clones for smoother looping
    slides.forEach(slide => {
      const clone = slide.cloneNode(true);
      slider.appendChild(clone);
    });
    
    // Now prepend a set of clones
    for (let i = slides.length - 1; i >= 0; i--) {
      const clone = slides[i].cloneNode(true);
      slider.prepend(clone);
    }
  }
  
  // Set up infinite slider with clones
  setupInfiniteSlider();
  
  // Get all slides (original + clones)
  const allSlides = document.querySelectorAll('.review-slide');
  
  // Variables
  let currentIndex = slides.length; // Start at first original slide (after prepended clones)
  let slideWidth;
  let isAnimating = false;
  const slideCount = slides.length;
  
  // Update slider position
  function updateSlider(animate = true) {
    // Calculate dimensions
    const wrapperWidth = document.querySelector('.review-slider-wrapper').offsetWidth;
    slideWidth = wrapperWidth * 0.7; // 70% of container width
    
    // Set all slides to calculated width
    allSlides.forEach(slide => {
      slide.style.minWidth = `${slideWidth}px`;
    });
    
    // Calculate offset to center current slide
    const offset = (currentIndex * slideWidth) - ((wrapperWidth - slideWidth) / 2);
    
    // Apply transition or not based on parameter
    slider.style.transition = animate ? 'transform 0.4s ease' : 'none';
    slider.style.transform = `translateX(-${offset}px)`;
  }
  
  // Handle infinite looping
  function checkBoundaries() {
    // If we've scrolled to the "end clones"
    if (currentIndex >= slideCount * 2) {
      // Jump back to first set of original slides
      currentIndex = slideCount;
      updateSlider(false);
    }
    
    // If we've scrolled to the "beginning clones"
    if (currentIndex < slideCount) {
      // Jump forward to last set of original slides
      currentIndex = slideCount * 2 - (slideCount - (currentIndex % slideCount));
      updateSlider(false);
    }
  }
  
  // Add transition end handler
  slider.addEventListener('transitionend', function() {
    isAnimating = false;
    isSwiping = false;
    checkBoundaries();
  });
  
  // Add a fail-safe timer to reset animation state
  function startAnimationResetTimer() {
    return setTimeout(function() {
      isAnimating = false;
      isSwiping = false;
    }, 600); // slightly longer than animation duration
  }
  
  // Navigation buttons (for desktop)
  if (prevBtn && nextBtn) {
    prevBtn.addEventListener('click', function() {
      if (isAnimating) return;
      isAnimating = true;
      
      currentIndex--;
      updateSlider(true);
      startAnimationResetTimer();
    });
    
    nextBtn.addEventListener('click', function() {
      if (isAnimating) return;
      isAnimating = true;
      
      currentIndex++;
      updateSlider(true);
      startAnimationResetTimer();
    });
  }
  
  // Touch swipe support (primarily for mobile)
  let touchStartX = 0;
  let touchEndX = 0;
  let isSwiping = false;
  
  slider.addEventListener('touchstart', function(e) {
    if (isAnimating) return;
    
    touchStartX = e.changedTouches[0].screenX;
    isSwiping = true;
  }, { passive: true });
  
  slider.addEventListener('touchend', function(e) {
    if (!isSwiping || isAnimating) return;
    
    touchEndX = e.changedTouches[0].screenX;
    
    // Register as swipe if moved more than 50px
    if (Math.abs(touchStartX - touchEndX) > 50) {
      isAnimating = true;
      
      if (touchStartX > touchEndX) {
        // Swipe left - show next
        currentIndex++;
      } else {
        // Swipe right - show previous
        currentIndex--;
      }
      
      updateSlider(true);
      startAnimationResetTimer();
    }
    
    isSwiping = false;
  }, { passive: true });
  
  // Add a safety reset mechanism
  slider.addEventListener('touchcancel', function() {
    isSwiping = false;
    setTimeout(function() {
      isAnimating = false;
    }, 500);
  }, { passive: true });
  
  // Handle window resize
  window.addEventListener('resize', function() {
    updateSlider(false);
  });
  
  // Initialize slider
  updateSlider(false);
});
</script>

<!-- V1.3 added URL links to photos  --> 
