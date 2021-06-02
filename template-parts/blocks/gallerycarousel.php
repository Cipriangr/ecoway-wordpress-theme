<section id="carousel">
  <div class="content">
    <h3><?php the_field('title') ?></h3>
    <div class="gallery-carousel">
      <?php while(have_rows('gallery-carousel')) : the_row() ?>
      <?php
        $image = get_sub_field('image');
        $size = 'service-size';
      ?>
      <div class="image-content" style="background-image: url(' <?php echo $image['sizes']['service-size']?> ')">
      
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>