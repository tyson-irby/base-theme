<?php

/**
 * Template Name: Left Sidebar Page Template
 */
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="io-page-intro io-page-intro__work--single">
      <div class="container max-width-lg grid gap-md padding-bottom-xxl">
        <div class="io-section__content col-12 col-7@md">

          <h1>
            <span><?php the_title(); ?></span>
          </h1>

        </div>

        <div class="io-section__actions col-12 col-5@md">

        </div>
      </div>
    </section>

    <article class="io-article <?php the_field('io_article_padding'); ?>">
      <div class="container max-width-lg">
        <!-- io the_content   -->

        <aside class="io-aside <?php the_field('io_aside_column_width'); ?>">

        </aside>

        <div class="io-section__content <?php the_field('io_content_column_width'); ?>">
          <?php the_content(); ?>
        </div>



        <!-- / io the_content   -->
      </div>
    </article>

  <?php endwhile; ?>

<?php else : ?>

  <!-- article -->
  <article>

    <h1><?php _e('Sorry, nothing to display.', 'irbyone'); ?></h1>

  </article>
  <!-- /article -->

<?php endif; ?>


<?php get_footer(); ?>