<?php
  $faqs_query = new WP_Query(array(
    'category_name' => 'faq'
  ));

  if ($faqs_query->have_posts()): ?>
    <section class="section container faq section-bottom-margin">
      <h2 class="section__title">FAQ's</h2>
      <div class="faq__accordion">
        <?php while ($faqs_query->have_posts()): $faqs_query->the_post(); ?>
          <div class="accordion__item">
            <h3 class="accordion__heading"><?php the_title(); ?></h3>
            <div class="accordion__panel">
              <div><?php the_content(); ?></div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </section>
  <?php endif; wp_reset_postdata(); ?>