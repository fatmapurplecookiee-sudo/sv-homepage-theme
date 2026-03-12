<?php
$pill  = get_option('sv_hero_pill', 'Accepting New Agency Partners for Q1');
$line1 = get_option('sv_hero_line1', 'SEO that scales');
$line2 = get_option('sv_hero_line2', 'on autopilot.');
$desc  = get_option('sv_hero_desc', 'We help agencies and brands grow faster with scalable SEO, high-quality link building, and fully managed content strategies — delivered with transparency, speed, and proven results.');
$btn1  = get_option('sv_hero_btn1', 'Start Your Growth Engine');
$btn2  = get_option('sv_hero_btn2', 'View Our Process');
?>
<section class="sv-hero" id="hero">
  <div class="sv-container">

    <div class="sv-hero-pill">
      <span class="sv-pill-dot"></span>
      <?php echo esc_html($pill); ?>
    </div>

    <h1 class="sv-hero-title">
      <?php echo esc_html($line1); ?><br>
      <span class="sv-gradient"><?php echo esc_html($line2); ?></span>
    </h1>

    <p class="sv-hero-desc"><?php echo esc_html($desc); ?></p>

    <div class="sv-hero-btns">
      <a href="#get-started" class="sv-btn-white">
        <?php echo esc_html($btn1); ?>
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="#process" class="sv-btn-outline">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" stroke="currentColor" stroke-width="1.5"/><path d="M6.5 5.5L10 8l-3.5 2.5V5.5z" fill="currentColor"/></svg>
        <?php echo esc_html($btn2); ?>
      </a>
    </div>

    <!-- dashboard mockup -->
    <div class="sv-mockup-wrap">
      <div class="sv-mockup">
        <div class="sv-mockup-bar">
          <span class="sv-dot sv-dot-r"></span>
          <span class="sv-dot sv-dot-y"></span>
          <span class="sv-dot sv-dot-g"></span>
          <span class="sv-tab" style="width:70px;"></span>
          <span class="sv-tab" style="width:45px;margin-left:4px;"></span>
        </div>
        <div class="sv-mockup-body">
          <div class="sv-mockup-chart">
            <div class="sv-bars">
              <?php foreach (array(30,38,34,50,44,60,54,68,58,76,66,84) as $h) { ?>
                <div class="sv-bar" style="height:<?php echo $h; ?>%"></div>
              <?php } ?>
            </div>
            <div class="sv-chart-footer">
              <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 9L4 5l3 2 3-5" stroke="#22C55E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              +124%
            </div>
            <div class="sv-tooltip">
              <div class="sv-tooltip-icon" style="background:#22c55e;">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 9L4 5l3 2 3-5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </div>
              <div>
                <div class="sv-tooltip-label">Organic Traffic</div>
                <div class="sv-tooltip-val">+12,405</div>
              </div>
            </div>
          </div>
          <div class="sv-mockup-stats">
            <div class="sv-mstat">
              <div class="sv-mstat-icon" style="background:#7c3aed;">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><rect x="1" y="6" width="2" height="5" fill="white"/><rect x="5" y="3" width="2" height="8" fill="white"/><rect x="9" y="1" width="2" height="10" fill="white"/></svg>
              </div>
              <div class="sv-mstat-val">2,543</div>
              <div class="sv-mstat-lbl">Keywords Ranked</div>
            </div>
            <div class="sv-mstat">
              <div class="sv-mstat-icon" style="background:#16a34a;">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 9L4 5l3 2 3-5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </div>
              <div class="sv-mstat-val">485%</div>
              <div class="sv-mstat-lbl">Traffic Growth</div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
