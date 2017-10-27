
'use strict';


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *
 *  General
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

//
// Viewport width detection
//
var viewportWidth = document.documentElement.clientWidth;

$(window).resize(function() {

  viewportWidth = document.documentElement.clientWidth;

});



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *
 *  Helper functions
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

//
// Check for an empty required fields
//
function hasBlankRequiredFields(form) {
  var error = false;

  form.find('input, textarea').each(function() {
    var input = $(this);

    if (input.data('required') && input.val() === '') {

      input.addClass('js-required');

      input.on('blur', function() {

        if ($(this).val() !== '') {
          $(this).removeClass('js-required');
        }

      });

      error = true;
    }
  });

  if (error) {
    form
      .find('.js-required')
      .first()
      .focus();
  }

  return error;
}




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *
 *  Mobile menu
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

//
// Opening/Closing
//
$('#hamburger').click(function() {

  var $menu = $('.h-menu');

  if ($menu.is(':hidden')) {

    $menu.show(0);

  } else {

    $menu.hide(0);

  }

});


//
// Show menu if it was hidden on a small width screen
// and then the window had been resized to a larger width
//
$(window).resize(function() {

  if (viewportWidth > 960) {

    var $menu = $('.h-menu');

    $menu.css('display', '');

  }

});




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *
 *  "Home" page
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */


//
// Driving Zone Button
//
$('#driving-zone-btn').click(function() {

  var $drivingZoneButton = $(this);
  var $parkingZoneButton = $('#parking-zone-btn');

  var $drivingZonePicture = $('#driving-zone');
  var $parkingZonePicture = $('#parking-zone');

  $parkingZoneButton.removeClass('js-active');
  $drivingZoneButton.addClass('js-active');

  $parkingZonePicture.removeClass('js-active');
  $drivingZonePicture.addClass('js-active');

});


//
// Parking Zone Button
//
$('#parking-zone-btn').click(function() {

  var $parkingZoneButton = $(this);
  var $drivingZoneButton = $('#driving-zone-btn');

  var $parkingZonePicture = $('#parking-zone');
  var $drivingZonePicture = $('#driving-zone');

  $parkingZoneButton.addClass('js-active');
  $drivingZoneButton.removeClass('js-active');

  $parkingZonePicture.addClass('js-active');
  $drivingZonePicture.removeClass('js-active');

});




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *
 *  "FAQ" page
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

//
// Tabs switching
//
$('.faq-sidebar-btn').click(function() {

  var $button = $(this);
  var tabNumber = $button.data('tab');

  var $content = $('.faq-content__container[data-tab=' + tabNumber + ']');

  // Hide the active tab & deactivate the active button
  $('.faq-content__container.js-active').removeClass('js-active');
  $('.faq-sidebar-btn.js-active').removeClass('js-active');

  // Show the new tab & and set the active button
  $content.addClass('js-active');
  $button.addClass('js-active');

});


//
// Expand/Collapse answers
//
$('.faq-content-item__header').click(function() {

  var $header = $(this);
  var $content = $header.next('.faq-content-item__content');
  var $item = $header.parent();

  if ($content.is(':visible')) {

    $item.removeClass('js-active');
    $header.removeClass('js-expanded');
    $content.slideUp(200);

  } else {

    $item.addClass('js-active');
    $header.addClass('js-expanded');
    $content.slideDown(200);

  }

});




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *
 *  "About us" page
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

//
// Map
//
function initContactsMap() {

  if (viewportWidth > 568) {

    // Initialization
    var contactsMap = new google.maps.Map(document.getElementById('map'), {

      zoom: 15,
      center: { lat: 34.0167081, lng: -118.4967472 },
      disableDefaultUI: true,
      scrollwheel: false

    });

  } else {

    // Initialization
    var contactsMap = new google.maps.Map(document.getElementById('map'), {

      zoom: 15,
      center: { lat: 34.0167081, lng: -118.4897472 },
      disableDefaultUI: true,
      scrollwheel: false

    });

  }


  // Marker settings
  var contactsMapIcon = {

    url: 'img/map-marker.png',
    size: new google.maps.Size(190, 210),
    scaledSize: new google.maps.Size(95, 105),
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(35, 75)

  };


  // First marker
  var mapMarker = new google.maps.Marker({

    map: contactsMap,
    position: { lat: 34.0167081, lng: -118.4897472 },
    icon: contactsMapIcon

  });

}