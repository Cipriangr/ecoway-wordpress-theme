<!-- <?php
  $perPage = 3;
  $projectsCount = count(get_field('custom_gallery'));
  $numPages = ceil($projectsCount / $perPage);
  $allProjects = get_field('custom_gallery');
  $page = get_query_var('paged') ? get_query_var('paged') : 1;
  $projects = array_slice($allProjects, ($page - 1) * $perPage, 3);
?>

<section id="custom-gallery">
  <?php foreach($projects as $project) : ?>
    <div class="single-gallery">
      <div class="project-name">
        <h2><?php echo $project['project_name']; ?></h2>
      </div>
      <div class="gallery-content">
        <div class="expand-image">
          <img src="" alt="">
        </div>
        <div class="gallery-list">
          <?php foreach($project['images'] as $image) : ?>
            <div class="image">
              <img src="<?php echo $image['image']; ?>" alt="">
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>


</section>

<div class="custom-pagination">
  <?php if($projectsCount > $perPage) {
    echo paginate_links(array(
      'format' => '?paged=%#%',
      'current' => $page,
      'total' => $numPages
    ));
  } ?>
</div> -->


<section id="custom-gallery">
  <div class="content">
    <div class="project-name">
      <h2><?php the_field('project_name') ?></h2>
    </div>
    <div class="big-gallery-carousel">
      <?php while(have_rows('custom_gallery')): the_row() ?>
      <?php
        $image1 = get_sub_field('image');
        $size = 'gallery-size';
      ?>
        <div class="image-content" style="background-image: url(' <?php echo $image1['sizes']['gallery-size']?> ')">

        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>