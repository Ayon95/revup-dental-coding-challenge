<?php 
  $reviews_query = new WP_Query(array(
    'post_type' => 'patient_review',
    'order' => 'ASC'
  ));

  if ($reviews_query->have_posts()): ?>
    <section class="section container reviews section-bottom-margin">
      <h2 class="section__title">What Our Patients Are Saying</h2>
      <div class="reviews__cards">
        <?php while ($reviews_query->have_posts()):
            $reviews_query->the_post();
            $rating = get_field('rating'); 
          ?>
          <article class="review">
            <?php the_post_thumbnail(); ?>
            <h3 class="review__title"><?php the_title(); ?></h3>
            <div class="review__stars">
              <span class="sr-only"><?php echo $rating . ' star rating out of 5' ?></span>
              <?php for ($i = 0; $i < $rating; $i++): ?>
                <svg role="img" aria-hidden="true" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7496 6.40474C17.614 6.4838 17.9741 7.55106 17.3343 8.13766L13.9921 11.202C13.7292 11.4431 13.6146 11.8061 13.6914 12.1545L14.683 16.6483C14.8747 17.5175 13.9208 18.1852 13.1698 17.7076L9.53657 15.3969C9.20911 15.1886 8.79072 15.1886 8.46326 15.3969L4.83894 17.7019C4.08665 18.1804 3.13166 17.5096 3.32644 16.6396L4.32992 12.1576C4.40829 11.8076 4.29318 11.4424 4.02826 11.2006L0.673817 8.13853C0.0319641 7.55263 0.391474 6.48328 1.25691 6.40412L5.58013 6.0087C5.95305 5.9746 6.27566 5.73499 6.41608 5.38784L8.07288 1.2918C8.40997 0.458437 9.58986 0.458439 9.92695 1.29181L11.5837 5.38784C11.7242 5.73499 12.0468 5.9746 12.4197 6.0087L16.7496 6.40474Z" fill="#F5A623"/>
                </svg>
              <?php endfor; ?>
            </div>
            <blockquote class="review__comment">
              <p>&ldquo; <?php echo get_field('comment'); ?> &rdquo;</p>
            </blockquote>
          </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <a href="#" class="btn btn--secondary btn--with-icon">
        <span>See All</span>
        <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M0.966691 0.932136C0.434986 1.45789 0.436107 2.31698 0.969183 2.84134L6.21359 8L0.969182 13.1587C0.436106 13.683 0.434986 14.5421 0.966691 15.0679C1.48904 15.5844 2.32973 15.5844 2.85208 15.0679L10 8L2.85208 0.932136C2.32974 0.415642 1.48904 0.415642 0.966691 0.932136Z"/>
        </svg>

      </a>
    </section>

<?php endif; ?>