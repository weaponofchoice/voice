$(document).ready( function() {

  var aside = $('aside');

  function getScrollTop(){
    if(typeof pageYOffset!= 'undefined'){
        //most browsers except IE before #9
        return pageYOffset;
    }
    else{
        var B= document.body; //IE 'quirks'
        var D= document.documentElement; //IE with doctype
        D= (D.clientHeight)? D: B;
        return D.scrollTop;
    }
  }


  window.onscroll = function() {
    var scrollPos = getScrollTop();

    if( scrollPos > 200 ){
      aside.addClass("is-fixed");
    } else {
      aside.removeClass("is-fixed");
    }
  }

});