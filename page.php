<?php
/**
 * Template: Default Page
 * Used for any static WordPress page (not the homepage).
 */
get_header(); ?>

<main class="sv-page-content sv-container" style="padding-top: 120px; padding-bottom: 80px; min-height: 60vh;">
  <?php
  while ( have_posts() ) :
    the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1 class="sv-section-title" style="margin-bottom: 1.5rem;"><?php the_title(); ?></h1>
      <div class="sv-page-body" style="color: var(--text-gray); line-height: 1.8; font-size: 1rem;">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
