<?php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>

		<a href="<?php the_permalink(); ?>" class="io-work__grid-item col-6@sm col-4@md"">

			<figure>
				<img src=" <?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
			</figure>
			<div class="io-section__content">
				<div class="content_block">
					<h2>
						<?php the_title(); ?>
					</h2>
				</div>
			</div>

		</a>


<?php endwhile;
	wp_reset_postdata();
endif;
?>