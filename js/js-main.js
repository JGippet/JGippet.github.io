$(document).ready(function(){

	"use strict";
	
	$('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true
        });
	
});



// PARALAX

$(document).ready(function() {
var onScroll = function() {
        var scrollTop = $(this).scrollTop();
        $('.paralax-image').each(function(index, elem) {
        var $elem = $(elem);
        $elem.find('img').css('top', scrollTop - $elem.offset().top);
        });
};
onScroll.apply(window);
$(window).on('scroll', onScroll);
});

      
      

  
  