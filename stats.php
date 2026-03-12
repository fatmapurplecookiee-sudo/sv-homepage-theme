<?php
$stats = sv_section('stats');
?>
<section class="sv-stats" id="stats">
  <div class="sv-container">
    <div class="sv-stats-grid">
      <?php foreach ($stats as $i => $stat) {
        $s = (object) $stat;
      ?>
        <div class="sv-stat-item sv-reveal">
          <div class="sv-stat-val"><?php echo esc_html($s->value ?? ''); ?></div>
          <div class="sv-stat-lbl"><?php echo esc_html($s->label ?? ''); ?></div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
