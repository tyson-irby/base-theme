<?php

/**
 * Template Name: About Template
 */
get_header(); ?>

<section class="io-page-intro">
  <div class="container max-width-md margin-bottom-lg margin-bottom-xl@md">
    <div class="io-author-intro">
      <div class="io-author-intro__portrait">
        <img src="<?php the_post_thumbnail_url(); ?>" title="Greetings earthling! I'm Tyson B. Irby." alt="Portrait of Tyson B. Irby">
      </div>

      <div class="io-author-intro-author__content text-component">
        <h2>Greetings earthling! I'm Tyson B. Irby.</h2>
        <div class="opacity-80%"><?php the_content(); ?></div>
      </div>
    </div>
  </div>
</section>

<?php if (have_rows('resume')) : ?>
  <?php while (have_rows('resume')) : the_row(); ?>
    <section class="io-resume margin-bottom-lg margin-bottom-xl@md">
      <div class="container max-width-md">

        <div class="grid gap-md gap-lg@md">

          <div class="col-12 col-6@md">
            <?php if (have_rows('work_experience')) : ?>
              <div class="io-resume-block__heading">
                <h2>
                  Experience
                </h2>
              </div>
              <div class="io-resume__block">

                <?php while (have_rows('work_experience')) : the_row(); ?>

                  <?php if (have_rows('job')) : ?>
                    <?php while (have_rows('job')) : the_row(); ?>
                      <div class="io-job">
                        <h3>
                          <?php the_sub_field('job_company'); ?>
                        </h3>
                        <div class="io-job__position">
                          <?php the_sub_field('position'); ?>
                        </div>
                        <div class="io-job__timeline">
                          <?php the_sub_field('timeline'); ?>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>

                <?php endwhile; ?>
              </div>
            <?php endif; ?>

            <?php if (have_rows('featured_clients')) : ?>
              <div class="io-resume-block__heading margin-top-xl">
                <h2>
                  Featured Clients
                </h2>
              </div>
              <div class="io-resume__block">

                <?php while (have_rows('featured_clients')) : the_row(); ?>

                  <figure>
                    <?php
                    $image = get_sub_field('client');
                    if (!empty($image)) : ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </figure>

                <?php endwhile; ?>
              </div>
            <?php endif; ?>

          </div>


          <?php if (have_rows('skills')) : ?>
            <div class="col-12 col-6@md">
              <div class="io-resume-block__heading">
                <h2>
                  Skills
                </h2>
              </div>
              <div class="io-resume__block">

                <div class="text-component">

                  <?php while (have_rows('skills')) : the_row(); ?>
                    <p>
                      <?php the_sub_field('skill') ?>
                    </p>
                  <?php endwhile; ?>

                </div>
              </div>
            </div>
          <?php endif; ?>

        </div>

      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('my_subaru_sti')) : ?>
  <?php while (have_rows('my_subaru_sti')) : the_row(); ?>
    <section class="io-interests">
      <div class="container max-width-md">

        <div class="io-section-intro margin-bottom-md margin-bottom-lg@md">
          Interests &amp; Hobbies
        </div>

        <div class="grid gap-md gap-lg@md">

          <div class="col-12 col-6@md">

            <div class="io-interests-block__heading">
              <h2>
                My 2018 Subaru STi
              </h2>
            </div>
            <div class="io-interests__block">

              <?php if (have_rows('left_column')) : ?>
                <div class="io-interests__media">
                  <?php while (have_rows('left_column')) : the_row(); ?>
                    <?php
                    $image = get_sub_field('image');
                    if (!empty($image)) : ?>
                      <figure>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      </figure>
                    <?php endif; ?>
                  <?php endwhile; ?>
                </div>
              <?php endif; ?>

            </div>

          </div>
          <?php if (have_rows('right_column')) : ?>
            <?php while (have_rows('right_column')) : the_row(); ?>
              <div class="io-details col-12 col-6@md">
                <?php if (have_rows('overview')) : ?>
                  <?php while (have_rows('overview')) : the_row(); ?>
                    <div class="io-interests-block__heading">
                      <h2>
                        <?php the_sub_field('section_title'); ?>
                      </h2>
                    </div>
                    <div class="io-interests-block__summary margin-bottom-md margin-bottom-lg@md">
                      <?php the_sub_field('section_summary'); ?>
                    </div>

                    <?php if (have_rows('mod_groups')) : ?>
                      <?php while (have_rows('mod_groups')) : the_row(); ?>

                        <?php if (have_rows('mod_group')) : ?>
                          <?php while (have_rows('mod_group')) : the_row(); ?>
                            <div class="io-mod-group-wrap">
                              <div class="io-interests-block__heading">
                                <h3>
                                  <?php the_sub_field('mod_category'); ?>
                                </h3>
                              </div>

                              <?php if (have_rows('mod_list')) : ?>
                                <?php while (have_rows('mod_list')) : the_row(); ?>

                                  <?php if (have_rows('mod')) : ?>
                                    <?php while (have_rows('mod')) : the_row(); ?>


                                      <?php if ('yes' == get_sub_field('has_link')) : ?>
                                        <a href="<?php the_sub_field('mod_link'); ?>" target="_blank" class="io-mod-group grid gap-md">

                                          <div class="io-mod-name col-10">
                                            <span><?php the_sub_field('mod_name'); ?></span>
                                          </div>
                                          <div class="io-mod-action col-2">
                                            <i class="fa-regular fa-cart-shopping-fast"></i>
                                          </div>

                                        </a>
                                      <?php else : ?>

                                        <div class="io-mod-group io-mod-group__no-link grid gap-md">

                                          <div class="io-mod-name col-10">
                                            <span><?php the_sub_field('mod_name'); ?></span>
                                          </div>
                                          <div class="io-mod-action col-2">
                                            <i class="fa-regular fa-cart-circle-xmark"></i>
                                          </div>

                                        </div>

                                      <?php endif; ?>

                                    <?php endwhile; ?>
                                  <?php endif; ?>

                                <?php endwhile; ?>
                              <?php endif; ?>
                            </div>
                          <?php endwhile; ?>
                        <?php endif; ?>

                      <?php endwhile; ?>
                    <?php endif; ?>

                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>

        </div>

      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>