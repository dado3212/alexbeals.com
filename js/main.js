$(function() {
	$('#contact .in').focus(function() {
		$(this).prev().css('color','#127EC7');
	});

	$('#contact .in').blur(function() {
		$(this).prev().css('color','black');
	});

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

	$("button.menu").click(function(e) {
		$(".header .lowerMenu").toggleClass("active");
	});
});

function contact() {
	$.ajax({
		type: 'POST',
		url: 'php/contact.php',
		data: $("#contact form").serialize(), 
		success: function(response) {
			console.log(response);
			// add in content
			if (response == 'success') {
				$('.alert').css({'backgroundColor':'#EFFBE8','border':'1px solid #DEF6D0'});
				$('.alert').html('Message sent!');
				$('#contact form')[0].reset();
			} else {
				$('.alert').css({'backgroundColor':'#FEECE8','border':'1px solid #FDD9D0'});
				$('.alert').html('Something went wrong!  Make sure you filled out all the categories.');
			}

			/* Make visible */
			$('.alert').css({'opacity':'0','display':'block'});
			$('#contact form').css('marginTop',$('.alert').height() + 45);
			$('.alert').animate({
				opacity:1
			},500);

			/* Re-hide */
			setTimeout(function() {
				$('.alert').animate({
					opacity:0
				},500, function() {
					$('.alert').css('display','none');
					$('#contact form').css('marginTop','0px');

				});
			},3000);
		}
	});
}