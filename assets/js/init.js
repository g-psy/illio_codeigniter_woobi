(function($){
  $(function(){
 // SideNav Options
    $('.button-collapse').sideNav({
    	menuWidth: 160, // Default is 240
    	edge: 'left', // Choose side-nav on <a> clicks, useful for Angular/Meteor
    	closeOnClick: true,
    	draggable: true // Choose whether you can drag to open on touch screens
    });
    $('.parallax').parallax();


// Navbar Scroll Options
	$(window).scroll(function() {
    	if ($('nav').offset().top > 50) {
    		$('nav').addClass("blue darken-3 nav-small nav-small-logo");

    	} else {
    		$('nav').removeClass("blue darken-3 nav-small nav-small-logo");
    	}
    });

    $(".scroll").click(function(event){
    	event.preventDefault();
    	$('html, body').animate({scrollTop:$(this.hash).offset().top}, 700);
  	});

// Form character Counter
	// $('input#input_text, textarea#textarea1').characterCounter();
	$('textarea').characterCounter();

  }); // end of document ready
})(jQuery); // end of jQuery name space
