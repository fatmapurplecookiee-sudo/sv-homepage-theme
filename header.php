<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="sv-header">
  <div class="sv-header-pill">

    <a href="<?php echo home_url('/'); ?>" class="sv-logo">
      <img src="<?php echo SV_URI; ?>/assets/images/logo.png" alt="Stan Ventures" height="34">
    </a>

    <nav class="sv-nav">
      <a href="#services">Services <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M2.5 4.5l3.5 3.5 3.5-3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="#resources">Resources <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M2.5 4.5l3.5 3.5 3.5-3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="#case-studies">Case studies</a>
      <a href="#about">About Us <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M2.5 4.5l3.5 3.5 3.5-3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </nav>

    <a href="#get-started" class="sv-cta-btn"><?php echo esc_html(get_option('sv_cta_label', 'Get a Proposal')); ?></a>

    <button class="sv-hamburger" id="sv-hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>

  </div>

  <div class="sv-mobile-nav" id="sv-mobile-nav">
    <a href="#services">Services</a>
    <a href="#resources">Resources</a>
    <a href="#case-studies">Case studies</a>
    <a href="#about">About Us</a>
    <a href="#get-started" class="sv-cta-btn" style="text-align:center;margin-top:.5rem;">Get a Proposal</a>
  </div>
</header>

<main id="sv-main">
