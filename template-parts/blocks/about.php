<section id="about">
  <div class="left-content">
    <div class="text-content">
      <h2><?php the_field('title') ?></h2>
      <p class="first"><?php the_field('text_1') ?></p>
      <p><?php the_field('text_2') ?></p>
    </div>
  </div>
  <div class="right-content">
    <div class="text-content">
      <h3><?php the_field('choose_title') ?></h3>
      <ul class="option-list">
        <?php while( have_rows('options-list') ): the_row();?>
          <li>
            <?php echo do_shortcode( '[icon name="list-icon"]' ); ?>
            <?php the_sub_field('options')?>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </div>
</section>