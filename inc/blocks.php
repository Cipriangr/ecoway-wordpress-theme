<?php 
  add_action('acf/init', 'my_acf_init_second');
  function my_acf_init_second() {

    // register a testimonials block

    acf_register_block(array(
      'name'				=> 'hero',
      'title'				=> __('Hero'),
      'description'		=> __('A custom block for hero image and text'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'hero' ),
      'mode'        => 'edit',
    ));

    acf_register_block(array(
      'name'				=> 'about',
      'title'				=> __('About'),
      'description'		=> __('A custom block with details about services'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'about' ),
      'mode'        => 'edit',
    ));

    acf_register_block(array(
      'name'				=> 'services',
      'title'				=> __('Services'),
      'description'		=> __('A custom block with Services'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'services' ),
      'mode'        => 'edit',
    ));

    acf_register_block(array(
      'name'				=> 'videoblock',
      'title'				=> __('Videoblock'),
      'description'		=> __('A custom block with custom video'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'videoblock' ),
      'mode'        => 'edit',
    ));

    acf_register_block(array(
      'name'				=> 'logo',
      'title'				=> __('Logo'),
      'description'		=> __('A custom block with custom logos'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'logo' ),
      'mode'        => 'edit',
    ));

    acf_register_block(array(
      'name'				=> 'testimonials',
      'title'				=> __('Testimonials'),
      'description'		=> __('A custom block with testimonials'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'testimonials' ),
      'mode'        => 'edit',
    ));


    acf_register_block(array(
      'name'				=> 'googlemaps',
      'title'				=> __('Googlemaps'),
      'description'		=> __('A custom block with googlemaps'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'googlemaps' ),
      'mode'        => 'edit',
    ));

    acf_register_block(array(
      'name'				=> 'fieldservices',
      'title'				=> __('Field Services'),
      'description'		=> __('A custom block with services'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'fieldservices' ),
      'mode'        => 'edit',
    ));

    acf_register_block(array(
      'name'				=> 'serviceinfo',
      'title'				=> __('Service Info'),
      'description'		=> __('A custom block with services info'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'serviceinfo' ),
      'mode'        => 'edit',
    ));

    acf_register_block(array(
      'name'				=> 'gallerycarousel',
      'title'				=> __('Gallery Carousel'),
      'description'		=> __('A custom block with custom gallery'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'gallerycarousel' ),
      'mode'        => 'edit',
    ));

    acf_register_block(array(
      'name'				=> 'customgallery',
      'title'				=> __('Custom gallery'),
      'description'		=> __('A custom gallery with expand images'),
      'render_callback'	=> 'my_acf_block_render_callback',
      'category'			=> 'formatting',
      'icon'				=> 'image-filter',
      'keywords'			=> array( 'customgallery' ),
      'mode'        => 'edit',
    ));



  }

  function my_acf_block_render_callback( $block ) {
    $slug = str_replace('acf/', '', $block['name']);
    if( file_exists(STYLESHEETPATH . "/template-parts/blocks/{$slug}.php") ) {
        include( STYLESHEETPATH . "/template-parts/blocks/{$slug}.php" );
    }
  }
?>