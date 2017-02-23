$(function() {
	// Add mobile flag
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		$('body').addClass('mobile');
	}

	// Handle clicking buttons and making the color
	$(".circlebutton").click(function(e) {
		var button = $(this);

		var circle = button.find(".circle");
		circle.removeClass("animate");

		var diameter = Math.max(button.outerWidth(), button.outerHeight());
		circle.css({height: diameter, width: diameter});

		var x = e.pageX - button.offset().left - circle.width()/2;
		var y = e.pageY - button.offset().top - circle.height()/2;

		//set the position and add class .animate
		circle.css({top: y+'px', left: x+'px'}).addClass("animate");

		if (button.hasClass('email')) {
			contact();
		}
	});

	// Handle toggling the menu on mobile
	$("button.menu").click(function(e) {
		$(".header .lowerMenu").toggleClass("active");
	});
});