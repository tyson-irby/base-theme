<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="app-section">
      Page Template
    </section>

  <?php endwhile; ?>

<?php else : ?>

  <!-- article -->
  <article>

    <h1><?php _e('Sorry, nothing to display.', 'irbyone'); ?></h1>

  </article>
  <!-- /article -->

<?php endif; ?>


<?php get_footer(); ?>