$(document).ready( function() {

  var aside = $('aside');

  window.onscroll = function() {
    if( $('body').scrollTop() > 149 ){
      aside.addClass("is-fixed");
    } else {
      aside.removeClass("is-fixed");
    }
  }

});