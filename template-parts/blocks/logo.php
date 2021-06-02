<section id="logo">
  <div class="content">
    <?php while (have_rows('logo')) : the_row( ) ?>
      <div class="single-logo">
        <img src="<?php the_sub_field('image') ?>">
      </div>
    <?php endwhile; ?>
  </div>
</section>