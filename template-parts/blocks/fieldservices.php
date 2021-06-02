<section id="fieldservices">
  <div class="content">
    <?php while(have_rows('services')) : the_row() ?>
      <div class="service">
        <div class="image" style="background-image: url('<?php the_sub_field('image') ?>')">
        </div>
        <h4><?php the_sub_field('title') ?></h4>
        <?php if(get_sub_field('button_text')): ?>
        <a href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
  </div>
</section>