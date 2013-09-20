$(document).ready(function()
{

	$( window ).scroll(function() 
	{
	  $('#section-case-home #img-case').css('top',  $(window).scrollTop() * -0 );
	});

	$( window ).resize(function()
	{
		console.log($('#section-case-home #img-case span'));
		if( $( window ).width() < 721)
		{
			$('#section-case-home #img-case span').text("arraste")
		}
		else
		{
			$('#section-case-home #img-case span').text("role")
		}

	})

	$('.carousel').carousel({
  		interval: 7000,
  		pause: "none"
	})

})

