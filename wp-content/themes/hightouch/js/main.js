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

