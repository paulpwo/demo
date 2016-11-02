// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});




 new WOW().init();
 
 
 
 jQuery(document).ready(function ($) {
	$('#home-slider').flexslider({
	pauseOnHover: false,    
	slideshow: true,                //Boolean: Animate slider automatically
	slideshowSpeed: 3000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
	animationSpeed: 600,
	animation: "fade",              //String: Select your animation type, "fade" or "slide"
	easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
	direction: "horizontal",
	controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
	useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
	touch: true, 
	directionNav: false
	});
  });
  
  
jQuery(document).ready(function ($) {
	$('.testimonial').flexslider({
	pauseOnHover: true,    
	slideshow: false,                //Boolean: Animate slider automatically
	slideshowSpeed: 5000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
	animationSpeed: 1300,
	animation: "slide",              //String: Select your animation type, "fade" or "slide"
	easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
	direction: "horizontal",
	controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
	useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
	touch: true, 
	directionNav: false
	});
  });
 
 jQuery(document).ready(function ($) {
	$('#tw-slider').flexslider({
	pauseOnHover: false,    
	slideshow: true,                //Boolean: Animate slider automatically
	slideshowSpeed: 3000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
	animationSpeed: 600,
	animation: "fade",              //String: Select your animation type, "fade" or "slide"
	easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
	direction: "horizontal",
	controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
	useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
	touch: true, 
	directionNav: false
	});
  });
/*
// Attach a submit handler to the form
$( "#contact" ).submit(function( event ) {
 
  // Stop form from submitting normally
  event.preventDefault();
 
  // Get some values from elements on the page:
  var $form = $( this ),
    name = $form.find( "input[name='name']" ).val(),
    email = $form.find( "input[name='email']" ).val(),
    phone = $form.find( "input[name='phone']" ).val(),
    message = $form.find( "input[name='message']" ).val(),

    url = $form.attr( "action" );
 
  // Send the data using post
  var posting = $.post( url, { name: name, email: email, phone: phone, message: message } );
 
  // Put the results in a div
  posting.done(function( data ) {
    //var content = $( data ).find( "#content" );
    $( "#result" ).empty().append( data );
  });
}); */

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})