<?php
/**
 * Template Part: Case Studies
 * Data source: data/content.json -> case_studies array
 */

$cases = sv_section( 'case_studies' );
if ( empty( $cases ) ) return;

// First item is the "big" card; rest are small
$big   = null;
$small = [];

foreach ( $cases as $c ) {
    $c = (object) $c;
    if ( ! empty( $c->big ) && $big === null ) {
        $big = $c;
    } else {
        $small[] = $c;
    }
}
?>

<section class="sv-cases" id="case-studies">
  <div class="sv-container">

    <h2 class="sv-section-title sv-reveal">Proven Results</h2>
    <p class="sv-section-sub sv-reveal">Data-backed case studies from our partner agencies.</p>

    <div class="sv-cases-grid">

      <?php if ( $big ) : ?>
      <!-- Big card (left) -->
      <div class="sv-case-big sv-reveal">
        <div class="sv-case-img">
          <img
            src="<?php echo esc_url( SV_URI . '/assets/images/' . $big->img ); ?>"
            alt="<?php echo esc_attr( $big->title ); ?>"
            loading="lazy"
          >
          <span class="sv-case-tag"><?php echo esc_html( $big->tag ); ?></span>
          <span class="sv-case-pct"><?php echo esc_html( $big->pct ); ?></span>
        </div>
        <div class="sv-case-body">
          <h3><?php echo esc_html( $big->title ); ?></h3>
          <p><?php echo esc_html( $big->sub ); ?></p>
        </div>
      </div>
      <?php endif; ?>

      <?php if ( ! empty( $small ) ) : ?>
      <!-- Small cards (right column) -->
      <div class="sv-cases-col">
        <?php foreach ( $small as $s ) : ?>
          <div class="sv-case-small sv-reveal">
            <div class="sv-case-img">
              <img
                src="<?php echo esc_url( SV_URI . '/assets/images/' . $s->img ); ?>"
                alt="<?php echo esc_attr( $s->title ); ?>"
                loading="lazy"
              >
              <span class="sv-case-tag"><?php echo esc_html( $s->tag ); ?></span>
              <span class="sv-case-pct"><?php echo esc_html( $s->pct ); ?></span>
            </div>
            <div class="sv-case-body">
              <h3><?php echo esc_html( $s->title ); ?></h3>
              <p><?php echo esc_html( $s->sub ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

    </div><!-- .sv-cases-grid -->
  </div>
</section>
