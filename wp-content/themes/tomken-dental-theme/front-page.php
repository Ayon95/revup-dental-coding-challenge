<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

<section class="hero split-screen-grid">
  <div class="hero__text-content">
    <svg class="hero__icon" role="img" aria-hidden="true" viewBox="0 0 81 103" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M4.06152 4.06323H76.9366C76.9366 4.06323 68.2301 89.8063 67.5852 98.2509H12.768L4.06152 4.06323Z" fill="white"/>
      <path d="M4.06152 32.9381C8.74478 30.714 17.914 36.2862 22.624 35.0006C28.6864 33.3451 34.0778 30.549 40.1553 30.5318C46.5786 30.514 52.6582 33.0797 59.0616 35.0006C63.1962 36.2402 72.4796 30.8515 76.5929 32.9381C76.5929 32.9381 69.3741 90.6882 68.6866 99.6257H12.3115L4.06152 32.9381Z" fill="#4C84D9"/>
      <path d="M4.06231 2C3.77548 2.00003 3.4918 2.05988 3.22941 2.17574C2.96702 2.2916 2.73167 2.46091 2.53842 2.67287C2.34516 2.88482 2.19824 3.13476 2.10704 3.40671C2.01584 3.67865 1.98236 3.96664 2.00875 4.25225L10.4836 95.9429C10.5939 97.1375 11.1465 98.2477 12.0329 99.0561C12.9194 99.8644 14.0758 100.313 15.2755 100.313H65.0375C66.2458 100.312 67.4103 99.8601 68.3023 99.0449C69.1943 98.2298 69.7493 97.1105 69.8582 95.9071C70.6097 87.6482 72.8915 64.7461 74.987 43.8942C76.2059 31.7724 77.4297 19.6511 78.6582 7.53026L78.903 5.1185L78.9669 4.48669L78.9834 4.32513L78.9875 4.28388L78.9882 4.27425L78.9889 4.2715L76.9374 4.0625L78.9896 4.27082C79.0185 3.98389 78.987 3.69409 78.897 3.42011C78.8071 3.14612 78.6607 2.89402 78.4674 2.68007C78.274 2.46612 78.038 2.29506 77.7744 2.17793C77.5109 2.06079 77.2258 2.00018 76.9374 2H4.06231Z" stroke="#2F448C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M33.1828 46.0007C28.065 46.0007 24.688 51.8596 24.688 59.0866C24.688 66.3136 28.065 89.1077 33.1828 89.1077C36.1693 89.1077 36.5082 70.1788 40.5198 70.1623C45.3034 70.1794 44.871 89.1077 47.8561 89.1077C52.9738 89.1077 56.3508 66.3136 56.3508 59.0866C56.3508 51.8596 52.9738 46.0007 47.8561 46.0007C45.4106 46.0007 42.9652 48.31 40.5198 48.31C38.0743 48.31 35.6282 46.0007 33.1828 46.0007Z" fill="white"/>
      <path d="M67.4246 13.4902L62.9497 42.0167" stroke="#11C5BB" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>

    <h1><?php the_title(); ?></h1>
    <p class="hero__subtitle"><?php echo get_field('subtitle'); ?></p>
    <div class="hero__buttons">
      <button class="btn btn--primary btn--with-icon">
        <span>Request An Appointment</span>
        <?php get_template_part('template-parts/icon-cursor'); ?>
      </button>
      <button class="btn btn--secondary btn--with-icon">
        <span>Call (905) 848 2250</span>
        <?php get_template_part('template-parts/icon-phone'); ?>
      </button>
    </div>
  </div>

  <?php if (has_post_thumbnail()):
    the_post_thumbnail('post-thumbnail', array());
  endif; ?>    
</section>

<section class="section right-fit section-block-margin">
  <div class="container two-col">
    <div class="right-fit__text-content">
      <h2 class="section__title">Are Dentures The Right Fit For You?</h2>
      <p>
        Here we can introduce Dentures briefly, and to promote dentures we’ll talk about the many symptoms 
        patients may experience if they’re in need of dentures. We can do a quick bullet list;
      </p>
      <ul class="right-fit__list">      
        <li>Gaps between teeth</li>
        <li>Chronic Tooth aches/pain</li>
        <li>Swollen/ bleeding gums</li>
        <li>Missing teeth</li>
        <li>Frequent indigestion etc. etc.</li>
      </ul>
      <p>
        After the symptoms are laid out we can incorporate our current content on denture pages into symbols 
        (like the dental extraction page) each symbol can go over what makes patients a good candidate for dentures. 
        Like -adequate saliva levels, doesn't smoke, and is capable of caring for them. Each symbol will have a brief sentence going into further detail.
      </p>
    </div>
    <div class="image-with-circles-container">
      <img 
        src="<?php echo esc_url(wp_get_attachment_image_url(23, 'medium')); ?>"
        srcset="<?php echo esc_attr(wp_get_attachment_image_srcset(23, 'medium')); ?>"
        sizes="(max-width: 400px) 300px, (min-width: 400px) 400px" 
        alt="<?php echo esc_attr(get_post_meta(23, '_wp_attachment_image_alt', true)); ?>"
      >
    </div>
  </div>
</section>

<section class="cost container section section-bottom-margin">
  <h2 class="section__title">Cost of Dentures In Mississauga</h2>
  <div class="cost__subtitle-container">
    <p>
      While the cost of dentures varies on a case to case basis, patients can typically 
      expect to pay between $123-$123.
    </p>
    <p>
      However, each patient’s situation and smiles are completely unique! 
    </p>
    <p>
      Depending on which type of denture you’ll receive, you could be paying more or less. These include;
    </p>
  </div>
  <?php
    $dentures_query = new WP_Query(array(
      'category_name' => 'denture',
      'order' => 'ASC'
    ));

    if ($dentures_query->have_posts()): ?>
      <div class="dentures">
        <?php while ($dentures_query->have_posts()): $dentures_query->the_post(); ?>
          <article class="denture">
            <h3 class="denture__title"><?php the_title(); ?></h3>
            <div class="denture__content"><?php the_content(); ?></div>
          </article>
        <?php endwhile; ?>
      </div>
    <?php endif; wp_reset_postdata(); ?>

    <div class="cost__cta">
      <p>
        To get a better understanding on your denture’s price-tag, or to learn about how our staff 
        will get you the maximum coverage possible with your insurance, give our office a call directly!
      </p>
      <div class="cost__button-container">
        <a href="#" class="btn btn--primary btn--with-icon">
          <span>Call 866-690-8321</span>
          <?php get_template_part('template-parts/icon-phone'); ?>
        </a>
    </div>
    </div>
</section>

<section class="section container section-bottom-margin denture-care">
  <h2 class="section__title">Take care of your dentures</h2>
  <article class="denture-care__post">
    <div class="image-with-circles-container">
      <img 
        src="<?php echo esc_url(wp_get_attachment_image_url(24, 'medium')); ?>"
        srcset="<?php echo esc_attr(wp_get_attachment_image_srcset(24, 'medium')); ?>"
        sizes="(max-width: 400px) 200px, (min-width: 400px) 300px" 
        alt="<?php echo esc_attr(get_post_meta(24, '_wp_attachment_image_alt', true)); ?>"
      >
    </div>
    <div class="denture-care__post-text">
      <h3 class="denture-care__post-title">Do you already wear dentures?</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
        in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
  </article>
  <article class="denture-care__post">
    <div class="image-with-circles-container">
      <img 
        src="<?php echo esc_url(wp_get_attachment_image_url(25, 'medium')); ?>"
        srcset="<?php echo esc_attr(wp_get_attachment_image_srcset(25, 'medium')); ?>"
        sizes="(max-width: 400px) 200px, (min-width: 400px) 300px" 
        alt="<?php echo esc_attr(get_post_meta(25, '_wp_attachment_image_alt', true)); ?>"
      >
    </div>
    <div class="denture-care__post-text">
      <h3 class="denture-care__post-title">Home care for your dentures?</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
      </p>
    </div>
  </article>
</section>

<?php get_template_part('template-parts/contact-cta'); ?>
<?php get_template_part('template-parts/faq'); ?>
<?php get_template_part('template-parts/patient-reviews'); ?>
<?php get_template_part('template-parts/appointment-cta'); ?>
<?php get_template_part('template-parts/contact-details'); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
