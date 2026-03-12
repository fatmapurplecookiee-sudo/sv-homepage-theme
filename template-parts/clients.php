<?php
$d = sv_data();
$clients = isset($d->clients) ? $d->clients : array();
?>
<section class="sv-clients">
  <div class="sv-container">
    <p class="sv-clients-label">Trusted by Industry-Leading Agencies &amp; Fast-Growing Brands</p>
    <div class="sv-clients-row">
      <?php foreach ($clients as $c) { ?>
        <span class="sv-client-name"><?php echo esc_html($c); ?></span>
      <?php } ?>
      <?php foreach ($clients as $c) { ?>
        <span class="sv-client-name"><?php echo esc_html($c); ?></span>
      <?php } ?>
    </div>
  </div>
</section>
