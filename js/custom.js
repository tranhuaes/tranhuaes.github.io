jQuery(document).ready(function() {
	
	"use strict";
	
	

$(window).scroll(function(){
    $(".fade-scroll").css("opacity", 1 - $(window).scrollTop() / 350);
  });


});