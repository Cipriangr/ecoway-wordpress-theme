<section id="custom-video">
  <div class="content">
    <div class="text-content">
      <h2><?php the_field('title') ?></h2>
    </div>
    <?php if(get_field('video')): ?>
    <div class="video">
      <?php the_field('video') ?>
    </div>
    <?php endif; ?>
  </div>
</section>
