<?php
$all = sv_section('testimonials');
$testimonials = array_slice($all, 0, 2);
?>
<section class="sv-testimonials" id="testimonials">
  <div class="sv-container">
    <div class="sv-testi-grid">
      <?php foreach ($testimonials as $i => $t) {
        $t = (object) $t;
      ?>
        <div class="sv-testi-card sv-reveal">
          <div class="sv-testi-stars">★★★★★</div>
          <p class="sv-testi-quote">"<?php echo esc_html($t->quote ?? ''); ?>"</p>
          <div class="sv-testi-author">
            <div class="sv-testi-avatar"><?php echo esc_html($t->initials ?? '?'); ?></div>
            <div>
              <div class="sv-testi-name"><?php echo esc_html($t->author ?? ''); ?></div>
              <div class="sv-testi-role"><?php echo esc_html($t->role ?? ''); ?></div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
