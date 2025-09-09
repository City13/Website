<section class="trust-icons-section">
  <div class="container">

    <?php if ($title = get_sub_field('section_title')): ?>
      <h2 class="trust-title"><?php echo esc_html($title); ?></h2>
    <?php endif; ?>

    <?php if ($intro = get_sub_field('intro_text')): ?>
      <div class="trust-intro"><?php echo wp_kses_post($intro); ?></div>
    <?php endif; ?>

    <?php if (have_rows('icons')): ?>
      <div class="trust-icons-grid">
        <?php while (have_rows('icons')): the_row();
          $icon = get_sub_field('icon_image');
          $label = get_sub_field('label');
        ?>
          <div class="icon-box">
            <?php if ($icon): ?>
              <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($label); ?>">
            <?php endif; ?>
            <?php if ($label): ?>
              <p class="icon-label"><?php echo esc_html($label); ?></p>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <?php if (get_sub_field('button_text') && get_sub_field('button_link')): ?>
      <a class="trust-button" href="<?php the_sub_field('button_link'); ?>">
        <?php the_sub_field('button_text'); ?>
      </a>
    <?php endif; ?>

    <?php if ($disclaimer = get_sub_field('disclaimer_text')): ?>
      <div class="trust-disclaimer">
        <?php echo $disclaimer; ?>
      </div>
    <?php endif; ?>

  </div>
</section>

<style> 
.trust-icons-section {
  text-align: center;
  padding: 60px 20px;
}
.trust-title {
  font-size: 28px;
  font-weight: 700;
}
.trust-intro {
  max-width: 700px;
  margin: 0 auto 40px;
  font-size: 16px;
}
.trust-icons-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-left: -10px;
  margin-right: -10px;
  margin-bottom: 40px;
}

.icon-box {
  flex: 0 0 calc(100% / 6 - 20px);
  max-width: calc(100% / 6 - 20px);
  margin: 10px;
  text-align: center;
}
.icon-box img {
  width: 80px;
  margin-bottom: 10px;
}
.icon-label {
  font-size: 14px;
}
.trust-button {
  display: inline-block;
  background: var(--main_color);
  color: #fff;
  padding: 15px 30px;
  text-transform: uppercase;
  font-weight: bold;
}
.trust-button:hover {
  transform: scale(1.05);
        background-color: #8fd9c9; /* Brighter green on hover */
        color: #ffffff; /* Ensure text stays white */
    }
.trust-disclaimer {
  margin-top: 30px;
  font-size: 12px;
  color: #666;
}
.trust-title {
  font-family: var(--main_font ); /* or if that's your preferred one */
  font-size: 2.3rem;
  color: var(--main_color);
}
@media (max-width: 767px) {
  .icon-box {
    flex: 0 0 calc(100% / 4 - 20px);
    max-width: calc(100% / 4 - 20px);
  }
}
}

</style>

<!-- trust icons v1.1 -->
