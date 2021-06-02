<section id="services">
  <h3><?php the_field('title') ?></h3>
  <p><?php the_field('text')?></p>
  <span> Call today to help us. <a href="tel:<?php the_field('phone_number') ?>"><?php the_field('phone_number') ?></a></span>
  <div class="services-content">
    <?php while(have_rows ('services')):  the_row()  ?>
      <div class="single-service">
        <div class="image" style="background-image: url('<?php the_sub_field('image') ?>')">

        </div>
        <h4><?php the_sub_field ('service_title')?></h4>
        <?php if(get_sub_field('button_text')): ?>
        <a href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
  </div>
</section>