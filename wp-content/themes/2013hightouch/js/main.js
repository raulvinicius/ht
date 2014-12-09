$(document).ready(function()
{

	//ANIMAÇÃO POR SCROLL

	$( window ).scroll(function() 
	{

		$('.hided').each(function()
		{
			if( $( window ).scrollTop() + ( $( window ).height() * 0.8 ) > $(this).offset().top )
			{
				$(this).addClass('appeared').removeClass('hided');
			}
		})

		$('#section-case-home #img-case').css('top',  $(window).scrollTop() * -0 );
	});

	nivelaHResultados();

	$( window ).resize(function()
	{

		$('.page-single-case #wrap-objetivo-case .span4').css('height', 'auto');

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

	$('.carousel .carousel-inner li:first-child').addClass('active');

	$('.tip').popover({
		animation: true
	});

	$('#page-contato #form form').submit(function(){return false}); 
	$('#page-contato #form form input[type="submit"]').bind('click', 
		function()
		{
			$(this).closest('form').validate({
				submitHandler: function(form)
				{
					$(form).hide();
					$('#process').show();

					$(form).ajaxSubmit({
						type: 'post',
						success: contatoOk
					});
				}, 
				rules: {
					nome: {
						required: true
					},
					email: {
						email: true,
						required: true
					},
					assunto: {
						required: true
					},
					mensagem: {
						required: true
					}
				},
				messages: {
					nome: {
						required: 'Campo obrigat&oacute;rio'
					},
					email: {
						email: 'E-mail inv&aacute;lido',
						required: 'Campo obrigat&oacute;rio'
					},
					assunto: {
						required: 'Campo obrigatório'
					},
					mensagem: {
						required: 'Deixe sua mensagem'
					}
				}
			});
		}
	)

	$('.alert button').bind('click', function()
	{
		$(this).closest('.alert').hide();
	})

})


function nivelaHResultados()
{
	var hSpan = 0;

	if( $('.page-single-case #wrap-objetivo-case .span4:first-child').css('float') == 'none' )
	{
		$('.page-single-case #wrap-objetivo-case .span4').css({
			'height': 'auto'
		});
	}
	else
	{
		$('.page-single-case #wrap-objetivo-case .span4').each(function()
		{
			hSpan = Math.max($(this).height(), hSpan);
		})
		$('.page-single-case #wrap-objetivo-case .span4').height(hSpan);
	}

}


function contatoOk (data)
{
	console.log($(this));
	console.log(data);

	$('#process').hide();
	$('#form-contato').show();

	if( data == 'erro')
	{
		$('.alert-error').show();
	}
	else if( data == 'sucesso')
	{
		$('.alert-success').show();
		$('#form-contato')[0].reset();
	}
}

