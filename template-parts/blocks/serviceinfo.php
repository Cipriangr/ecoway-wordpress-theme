<section id="service-info">
  <div class="breadcrumb">
    <?php global $post;
      if ( $post->post_parent ) { ?>
        <?php echo do_shortcode( '[icon name="left-arrow"]' ); ?>
        <a href="<?php echo get_permalink( $post->post_parent ); ?>" >
        <?php echo 'BACK TO OVERVIEW' ?>
        </a>
    <?php } ?>
  </div>
  <div class="content">
    <div class="image" style="background-image:url('<?php the_field('image') ?>')">

    </div>
    <div class="text">
      <h3><?php the_field('service_title') ?></h3>
      <p><?php the_field('text_area') ?></p>
      <?php if (get_field('button_text')): ?>
        <a href="<?php the_field('button_link') ?>"><?php the_field('button_text') ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>