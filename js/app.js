$(document).foundation();

$(document).ready(function(){
$('.hero-slick').slick({
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2400,
    slidesToShow: 1,
    slidesToScroll: 1,
    cssEase: 'linear',
    fade: true
});

$('.testimonial-carousel').slick({
    dots: false,
    infinite: true,
    nextArrow:'<div class="arrow_right"></div>',
    prevArrow:'<div class="arrow_left"></div>',
    autoplay: false,
    autoplaySpeed: 2500,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive:[
    {
    breakpoint: 1024,
    settings:{
        adaptiveHeight: true,
        slidesToShow: 1,
        slidesToScroll: 1
        }
    }
    ]
});
$('.gallery-carousel').slick({
    dots: false,
    infinite: true,
    nextArrow:'<div class="arrow-right"></div>',
    prevArrow:'<div class="arrow-left"></div>',
    autoplay: true,
    autoplaySpeed: 2500,
    slidesToShow: 3,
    slidesToScroll: 1,
    fadeOut: true,
    responsive:[
        {
        breakpoint: 1024,
            settings:{
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
        breakpoint: 768,
            settings:{
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

$('.big-gallery-carousel').slick({
    dots: false,
    infinite: true,
    nextArrow:'<div class="arrow-right"></div>',
    prevArrow:'<div class="arrow-left"></div>',
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive:[
        {
        breakpoint: 1024,
            settings:{
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});


expandImage()

function expandImage(){

    // on window load, load first image from list
    var firstImage = $($('#custom-gallery .gallery-list .image')[0]).find('img').attr('src')
    $('#custom-gallery .gallery-content .expand-image img').attr('src', firstImage).hide().fadeIn()

    // load image on click
    $('#custom-gallery .gallery-list .image').on('click', function(e) {
        $(this).parents('.gallery-content').find('.expand-image img').fadeOut(function() {
            $(this).parents('.gallery-content').find('.expand-image img').attr('src', e.target.src)    
            $(this).parents('.gallery-content').find('.expand-image img').fadeIn()
        })
    })
}

(function( $ ) {

  /**
   * initMap
   *
   * Renders a Google Map onto the selected jQuery element
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   jQuery $el The jQuery element.
   * @return  object The map instance.
   */
  function initMap( $el ) {
  
      // Find marker elements within map.
      var $markers = $el.find('.marker');
  
      // Create gerenic map.
      var mapArgs = {
          zoom        : $el.data('zoom') || 16,
          mapTypeId   : google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map( $el[0], mapArgs );
  
      // Add markers.
      map.markers = [];
      $markers.each(function(){
          initMarker( $(this), map );
      });
  
      // Center map based on markers.
      centerMap( map );
  
      // Return map instance.
      return map;
  }
  
  /**
   * initMarker
   *
   * Creates a marker for the given jQuery element and map.
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   jQuery $el The jQuery element.
   * @param   object The map instance.
   * @return  object The marker instance.
   */
  function initMarker( $marker, map ) {
  
      // Get position from marker.
      var lat = $marker.data('lat');
      var lng = $marker.data('lng');
      var latLng = {
          lat: parseFloat( lat ),
          lng: parseFloat( lng )
      };
  
      // Create marker instance.
      var marker = new google.maps.Marker({
          position : latLng,
          map: map
      });
  
      // Append to reference for later use.
      map.markers.push( marker );
  
      // If marker contains HTML, add it to an infoWindow.
      if( $marker.html() ){
  
          // Create info window.
          var infowindow = new google.maps.InfoWindow({
              content: $marker.html()
          });
  
          // Show info window when marker is clicked.
          google.maps.event.addListener(marker, 'click', function() {
              infowindow.open( map, marker );
          });
      }
  }
  
  /**
   * centerMap
   *
   * Centers the map showing all markers in view.
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   object The map instance.
   * @return  void
   */
  function centerMap( map ) {
  
      // Create map boundaries from all map markers.
      var bounds = new google.maps.LatLngBounds();
      map.markers.forEach(function( marker ){
          bounds.extend({
              lat: marker.position.lat(),
              lng: marker.position.lng()
          });
      });
  
      // Case: Single marker.
      if( map.markers.length == 1 ){
          map.setCenter( bounds.getCenter() );
  
      // Case: Multiple markers.
      } else{
          map.fitBounds( bounds );
      }
  }
  
  // Render maps on page load.
  $(document).ready(function(){
      $('.acf-map').each(function(){
          var map = initMap( $(this) );
      });
  });
  
  })(jQuery);
});