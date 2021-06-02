<section id="custom-hero">
  <div class="hero-slick">
    <?php while( have_rows('hero') ) : the_row(); ?>
    <div id="hero"  <?php if( is_front_page() ) echo 'class="is_homepage_hero"'; ?> style="background-image: url('<?php the_sub_field('hero_image') ?>')">
      <div class="text-content">
        <h1><?php the_field('hero_title') ?></h1>  
        <?php if(get_field('hero_text')): ?>
        <div class="hero-text">
          <p><?php the_field('hero_text') ?></p>
        </div>
        <?php endif; ?>
        <?php if(get_field('button_text')): ?>
        <div class="contact">
          <h4><?php the_field('text') ?></h4>
          <span><a href="<?php the_field('button_link')?>"><?php the_field('button_text')?></a></span>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
  <?php if(get_field('badge_title')): ?>
    <div class="badge" style="background-image: url('<?php the_field('badge_image') ?>')">
      <h5><?php the_field ('badge_title') ?></h5>
      <p><?php the_field('badge_text') ?></p>
    </div>
    <?php endif; ?>
</section>
