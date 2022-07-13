<?php

/**
 * Template Name: Homepage Template
 */
get_header(); ?>

<section class="io-hero io-hero__homepage position-relative z-index-2">
  <div class="container max-width-lg">

    <h1>
      <?php the_title(); ?>
    </h1>

    <div class="io-hero__content text-small">
      <?php the_content(); ?>
    </div>

  </div>
</section>

<?php
$args = array(
  'post_type' => 'work',
  'posts_per_page' => -1,
  'order' => 'DEC',
  // 'category_name' => 'marvel'
);

$the_query = new WP_Query($args); ?>

<?php if ($the_query->have_posts()) : ?>
  <section class="container max-width-lg io-wrapper io-wrapper__work position-relative z-index-2">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="io-section io-work io-work__homepage max-width-lg grid gap-lg gap-xl@md js-page-trans-link">

        <div class="io-section__media col-12 col-6@md">
          <figure>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="Branding Logo">
          </figure>
        </div>

        <div class="io-section__content flex items-center col-12 col-6@md">
          <div class="content_block">
            <h2>
              <?php the_title(); ?>
            </h2>

            <?php if (have_rows('static_categories')) : ?>
              <div class="io-categories io-categories__static">
                <?php while (have_rows('static_categories')) : the_row(); ?>
                  <span><?php the_sub_field('Category'); ?></span>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

            <div class="wp-the-content">
              <?php the_content(); ?>
            </div>
          </div>
        </div>

      </a>
    <?php endwhile; ?>
  </section>

  <?php wp_reset_postdata(); ?>

<?php endif; ?>

<?php get_footer(); ?>