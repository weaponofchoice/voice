$(document).ready( function() {

  var blogImage = $('body.single-post article section.image img');

  blogImage.click( function() {
    var fullscreen = $(this).parent().find('.fullscreen');
    fullscreen.addClass('is-active');

    fullscreen.click( function() {
      fullscreen.removeClass('is-active');
    });
  });

});