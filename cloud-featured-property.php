<?php
$hero_video     = get_sub_field('hero_background_video');
$hero_image_raw = get_sub_field('hero_background_image'); // desktop image
$hero_title     = get_sub_field('hero_property_title');
$hero_tagline   = get_sub_field('hero_tagline');
$hero_book_link = get_sub_field('hero_book_now_link');
$hero_more_link = get_sub_field('hero_details_link');
$show_header    = get_sub_field('header_present');

// NEW: Mobile image
$hero_image_mobile_raw = get_sub_field('hero_background_image_mobile'); // mobile image

/**
 * Resolve desktop image ID + URL regardless of ACF return format
 */
$img_id  = null;
$img_url = null;

if (is_array($hero_image_raw) && isset($hero_image_raw['ID'])) {
  $img_id  = (int) $hero_image_raw['ID'];
  $img_url = wp_get_attachment_image_url($img_id, 'full');
} elseif (is_numeric($hero_image_raw)) {
  $img_id  = (int) $hero_image_raw;
  $img_url = wp_get_attachment_image_url($img_id, 'full');
} elseif (is_string($hero_image_raw) && $hero_image_raw !== '') {
  $img_url = esc_url($hero_image_raw);
  $img_id  = attachment_url_to_postid($hero_image_raw);
}

$alt = $img_id ? get_post_meta($img_id, '_wp_attachment_image_alt', true) : '';
if ($alt === '') { $alt = 'Hero Background'; }

/**
 * Resolve mobile image ID + URL regardless of ACF return format
 */
$mobile_img_id  = null;
$mobile_img_url = null;

if (is_array($hero_image_mobile_raw) && isset($hero_image_mobile_raw['ID'])) {
  $mobile_img_id  = (int) $hero_image_mobile_raw['ID'];
  $mobile_img_url = wp_get_attachment_image_url($mobile_img_id, 'full');
} elseif (is_numeric($hero_image_mobile_raw)) {
  $mobile_img_id  = (int) $hero_image_mobile_raw;
  $mobile_img_url = wp_get_attachment_image_url($mobile_img_id, 'full');
} elseif (is_string($hero_image_mobile_raw) && $hero_image_mobile_raw !== '') {
  $mobile_img_url = esc_url($hero_image_mobile_raw);
  $mobile_img_id  = attachment_url_to_postid($hero_image_mobile_raw);
}

/**
 * Desktop originals (for super-sharp large screens) vs "full"
 */
$desktop_original_url = ($img_id && function_exists('wp_get_original_image_url'))
  ? wp_get_original_image_url($img_id)
  : '';
$desktop_full_url = $img_id ? wp_get_attachment_image_url($img_id, 'full') : $img_url;
?>

<section class="featured-hero">

  <?php if ($hero_video && wp_is_mobile() === false): ?>
    <video
      autoplay
      muted
      playsinline
      preload="metadata"
      class="hero-bg-video"
      <?php echo $img_url ? 'poster="' . esc_url($img_url) . '"' : ''; ?>
    >
      <source src="<?php echo esc_url($hero_video); ?>" type="video/mp4">
    </video>
  <?php endif; ?>

  <?php if ($img_id || $img_url): ?>
    <?php
      // Build desktop <img> once (keeps your absolute positioning class)
      $desktop_img_html = $img_id
        ? wp_get_attachment_image(
            $img_id,
            'full',
            false,
            [
              'class'         => 'hero-bg-image',
              'alt'           => esc_attr($alt),
              'sizes'         => '100vw',
              'fetchpriority' => 'high',
              'decoding'      => 'async',
            ]
          )
        : '<img src="' . esc_url($img_url) . '" class="hero-bg-image" alt="' . esc_attr($alt) . '" fetchpriority="high" decoding="async" />';

      // Build mobile source (if a mobile image is set)
      $mobile_srcset = $mobile_img_id ? wp_get_attachment_image_srcset($mobile_img_id, 'full') : '';
      $mobile_src    = $mobile_img_id ? '' : $mobile_img_url;

      echo '<picture>';

      // 1) Mobile art-direction (phones)
      if ($mobile_img_id || $mobile_img_url) {
        if ($mobile_srcset) {
          echo '  <source media="(max-width: 768px)" srcset="' . esc_attr($mobile_srcset) . '" sizes="100vw">';
        } else {
          echo '  <source media="(max-width: 768px)" srcset="' . esc_url($mobile_src) . '">';
        }
      }

      // 2) Serve the ORIGINAL file on large screens for maximum sharpness (only if different from "full")
      if ($desktop_original_url && $desktop_original_url !== $desktop_full_url) {
        echo '  <source media="(min-width: 1400px)" srcset="' . esc_url($desktop_original_url) . '">';
      }

      // 3) Fallback desktop image (normal srcset/“full” behavior)
      echo    $desktop_img_html;
      echo '</picture>';
    ?>
  <?php endif; ?>

  <div class="hero-overlay"></div>

  <div class="hero-content">
    <?php if ($show_header): ?>
      <h4 class="hero-subtitle">Featured Home:</h4>
    <?php endif; ?>
    <?php if ($hero_title): ?><h1><?php echo esc_html($hero_title); ?></h1><?php endif; ?>
    <?php if ($hero_tagline): ?><h3><?php echo esc_html($hero_tagline); ?></h3><?php endif; ?>
    <div class="hero-buttons">
      <?php if ($hero_book_link): ?><a href="<?php echo esc_url($hero_book_link); ?>" class="btn-primary">Book Now</a><?php endif; ?>
      <?php if ($hero_more_link): ?><a href="<?php echo esc_url($hero_more_link); ?>" class="btn-secondary">More Info</a><?php endif; ?>
    </div>
  </div>

  <div class="hero-loop-icon" title="Replay">&#x21bb;</div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const video    = document.querySelector('.hero-bg-video');
  const image    = document.querySelector('.hero-bg-image');
  const loopIcon = document.querySelector('.hero-loop-icon');

  if (video && image && loopIcon) {
    image.style.display = 'block';
    video.style.display = 'none';
    loopIcon.style.display = 'none';

    setTimeout(() => {
      image.style.display = 'none';
      video.style.display = 'block';
      if (video.paused) { try { video.play(); } catch(e){} }
    }, 2000);

    video.addEventListener('ended', () => {
      video.style.display = 'none';
      image.style.display = 'block';
      loopIcon.style.display = 'block';
    });

    loopIcon.addEventListener('click', () => {
      loopIcon.style.display = 'none';
      image.style.display = 'none';
      video.style.display = 'block';
      if (video.paused) { try { video.play(); } catch(e){} }
    });
  }
});
</script>

<style>
/* ===== Hero (v1.5 — loads original on large screens for sharpness) ===== */

.featured-hero {
  position: relative;
  width: 100%;
  height: 75vh;
  overflow: hidden;
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.topTitle { display: none; }

/* Background media */
.hero-bg-video,
.hero-bg-image {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 40%;
  z-index: 1;
}

.hero-bg-image { display: block; }
.hero-bg-video { display: none; }

/* Overlay (currently off; adjust if needed) */
.hero-overlay {
  position: absolute;
  inset: 0;
  z-index: 2;
  background: linear-gradient(
    to bottom,
    rgba(0,0,0,0) 0%,
    rgba(0,0,0,0) 45%,
    rgba(0,0,0,0) 100%
  );
}

/* Content */
.hero-content {
  position: absolute;
  bottom: 40px;
  left: 40px;
  z-index: 3;
  max-width: 40%;
  text-align: left;
  word-wrap: normal;
  overflow-wrap: normal;
  padding: 0;
}

.hero-content h4.hero-subtitle {
  font-size: 2rem;
  font-weight: 600;
  margin-bottom: 0.5rem;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 1px;
  text-shadow: 1px 1px 4px rgba(0,0,0,0.8);
  font-family: var(--main_font, 'Helvetica Neue', sans-serif);
  line-height: .9;
}

.hero-content h1 {
  font-size: 8rem;
  font-weight: 700;
  margin-bottom: 0;
  text-shadow: 1px 1px 4px rgba(0,0,0,0.8);
  font-family: var(--main_font, 'Helvetica Neue', sans-serif);
  line-height: 1.2;
}

.hero-content h3 {
  font-size: 3rem;
  margin-bottom: 1rem;
  margin-left: 0.5rem;
  text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
  font-family: var(--main_font, 'Helvetica Neue', sans-serif);
  line-height: 1;
}

/* Buttons */
.hero-buttons {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
  justify-content: left;
  margin-top: 2rem;
}

.hero-buttons a {
  display: inline-block;
  margin: 0 10px 0 0;
  padding: 12px 28px;
  font-size: 2rem;
  border-radius: 5px;
  text-decoration: none;
  transition: background 0.3s ease, filter 0.3s ease;
}

.btn-primary { background: var(--main_color, #FF5555); color: #fff; }
.btn-primary:hover { background: var(--main_color, #FF5555); filter: brightness(1.2); }

.btn-secondary { background: rgba(255,255,255,0.85); color: #222; }
.btn-secondary:hover { background: #fff; }

/* Replay */
.hero-loop-icon {
  position: absolute;
  bottom: 40px;
  right: 40px;
  font-size: 3rem;
  color: var(--main_color, #FF5555);
  background: #fff;
  padding: 5px 12px;
  border-radius: 50%;
  cursor: pointer;
  z-index: 4;
  display: none;
  transition: background 0.3s ease;
}
.hero-loop-icon:hover { background: #f0f0f0; }

/* Mobile */
@media (max-width: 768px) {
  .featured-hero { height: 58vh; } /* reduces side cropping feel */
  .hero-bg-image, .hero-bg-video { object-position: center 50%; }

  .hero-content {
    bottom: 40px;
    left: 20px;
    max-width: 85%;
  }
  .hero-content h4.hero-subtitle { font-size: 1.2rem; }
  .hero-content h1 { font-size: 3rem; }
  .hero-content h3 { font-size: 1.5rem; margin-left: 0; }
  .hero-buttons {
    justify-content: flex-start;
    gap: 10px;
    padding-left: 0;
  }
  .hero-buttons a {
    font-size: 1.1rem;
    padding: 14px 20px;
    white-space: nowrap;
  }
}

/* Optional: slightly less crop on very wide desktops */
@media (min-width: 1400px){
  .featured-hero { height: 68vh; } /* tweak to taste */
}

</style>
