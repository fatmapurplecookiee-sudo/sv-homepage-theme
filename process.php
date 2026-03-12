<?php
$steps = array(
    array('n' => '01', 'title' => 'Discovery',  'desc' => "We analyze your client's website, competitors, and goals to build a custom roadmap."),
    array('n' => '02', 'title' => 'Execution',  'desc' => 'Our team handles everything—content, links, technical fixes—while you take the credit.'),
    array('n' => '03', 'title' => 'Scale',       'desc' => 'Receive white-label reports showing growth, then identify new opportunities to scale.'),
);
?>
<section class="sv-process" id="process">
  <div class="sv-container">

    <h2 class="sv-process-title">
      Simple Process<span class="sv-dot-accent">.</span><br>
      Powerful Results<span class="sv-dot-accent">.</span>
    </h2>

    <div class="sv-process-grid">
      <?php foreach ($steps as $step) { ?>
        <div class="sv-process-step sv-reveal">
          <div class="sv-process-num"><?php echo $step['n']; ?></div>
          <div class="sv-process-line"></div>
          <h3 class="sv-process-step-title"><?php echo $step['title']; ?></h3>
          <p class="sv-process-step-desc"><?php echo $step['desc']; ?></p>
        </div>
      <?php } ?>
    </div>

  </div>
</section>
