<?php
$d = sv_data();
if (!isset($d->comparison)) return;
$cols = $d->comparison->columns;
$rows = $d->comparison->rows;
?>
<section class="sv-comparison" id="comparison">
  <div class="sv-container">

    <h2 class="sv-section-title sv-reveal" style="text-align:center;">Why Agencies Switch to Us</h2>

    <div class="sv-table-wrap sv-reveal">
      <table class="sv-table">
        <thead>
          <tr>
            <?php foreach ($cols as $col) { ?>
              <th class="<?php echo $col->key === 'stan' ? 'sv-col-stan' : ''; ?>">
                <?php echo esc_html($col->label); ?>
              </th>
            <?php } ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $row) {
            $row = (array) $row;
          ?>
            <tr>
              <?php foreach ($cols as $col) {
                $val = $row[$col->key] ?? '';
                if ($col->key === 'feature') {
                  echo '<td class="sv-td-feature">' . esc_html($val) . '</td>';
                } else {
                  echo '<td>' . sv_check($val) . '</td>';
                }
              } ?>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </div>
</section>
