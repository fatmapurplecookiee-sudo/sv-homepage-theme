<?php
// SVG icons for each service type
function sv_icon($type) {
    $icons = array(
        'layers' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>',
        'link'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/></svg>',
        'pen'    => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>',
        'map'    => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>',
        'search' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>',
        'tag'    => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>',
    );
    return isset($icons[$type]) ? $icons[$type] : $icons['link'];
}

$services = sv_section('services');
$title    = get_option('sv_services_title',    'Our SEO Services That Drive Scalable Growth');
$subtitle = get_option('sv_services_subtitle', 'Flexible, white-label, and built for long-term results.');
?>
<section class="sv-services" id="services">
  <div class="sv-container">

    <div class="sv-services-head">
      <div>
        <h2 class="sv-section-title"><?php echo esc_html($title); ?></h2>
        <p class="sv-section-sub"><?php echo esc_html($subtitle); ?></p>
      </div>
      <a href="#" class="sv-view-all">View Full Catalog →</a>
    </div>

    <div class="sv-services-grid">
      <?php foreach ($services as $i => $svc) {
        $s = (object) $svc;
        $wide = !empty($s->wide) ? 'sv-svc-wide' : '';
      ?>
        <div class="sv-svc-card <?php echo $wide; ?> sv-reveal">
          <div class="sv-svc-icon"><?php echo sv_icon($s->icon ?? 'link'); ?></div>
          <h3 class="sv-svc-title"><?php echo esc_html($s->title ?? ''); ?></h3>
          <p class="sv-svc-desc"><?php echo esc_html($s->desc ?? ''); ?></p>
          <a href="<?php echo esc_url($s->link ?? '#'); ?>" class="sv-svc-link">Learn more →</a>
        </div>
      <?php } ?>
    </div>

  </div>
</section>
