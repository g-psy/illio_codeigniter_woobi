(function($){
  $(function(){

// Navbar Scroll Options
	$(window).scroll(function() {
    	if ($('nav').offset().top > 50) {
    		$('nav').addClass("nav-small");

    	} else {
    		$('nav').removeClass("nav-small");
    	}
    });

// Nav Smooth scroll
    $(".scroll").click(function(event){
    	event.preventDefault();
    	$('html, body').animate({scrollTop:$(this.hash).offset().top}, 880);
  	});

  }); // end of document ready
})(jQuery); // end of jQuery name space
