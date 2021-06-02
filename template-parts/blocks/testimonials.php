<section id="testimonials">
  <div class="title">
    <h3><?php the_field('title') ?></h3>
  </div>
  <div class="content">
      <div class="testimonial-carousel">
      <?php while(have_rows('testimonials')): the_row() ?>
        <div class="single-testimonial">
          <span><img src="<?php the_sub_field('stars_image') ?>"></span>
          <p><?php the_sub_field('custom_testimonial') ?></p>
          <div class="text">
            <p class="name"><?php the_sub_field('client_name') ?></p>
            <p><?php the_sub_field('location') ?></p>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    
  </div>
</section>